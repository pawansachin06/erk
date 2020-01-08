<template>
    <div class="container">
        <div class="form-group">
            <label for="name">Name:</label>
            <input v-validate="'required'" type="text" class="form-control" name="user_name" placeholder="Enter Name" v-model="user.name">
            <span class="text-danger">{{ errors.first('user_name') }}</span>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input v-validate="'required'" type="text" class="form-control" name="user_email" placeholder="Enter Email" v-model="user.email">
            <span class="text-danger">{{ errors.first('user_email') }}</span>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input v-validate="'required'" type="text" class="form-control" name="user_age" placeholder="Enter Age" v-model="user.age">
            <span class="text-danger">{{ errors.first('user_age') }}</span>
        </div>
        <div class="form-group" v-if="blog_detail.image == ''">
            <label class="control-label">Image</label>
            <div class="control_element">
                <div class="box">
                    <form id="uploadForm" enctype="multipart/form-data" v-on:change="uploadImage()">
                        <input type="file" name="fileupload" id="fileupload" class="inputfile inputfile-6"/>
                        <label for="fileupload"><span class="uploaded-image">{{blog_detail.image}}</span><strong><i class="fa fa-upload"></i></strong></label>
                    </form>
                </div>
            </div>
        </div>
        <div class="form-group" v-if="blog_detail.image != ''">
            <label class="control-label">Image</label>
            <div class="control_element">
                <div class="wrap-img-upload">
                    <img v-bind:src="site_url + '/storage/app/' + blog_detail.image" class="img-fluid"/>
                    <button class="close-img" @click.prevent='deleteImage()'><i class="fa fa-remove"></i></button>
                </div>
            </div>
        </div>
        <button type="submit" @click.prevent="update" class="btn btn-default">Update</button>
    </div>
</template>

<script>
    import {site_root} from '../../../globalSetting.js';
    import { VueEditor } from "vue2-editor";
    export default {
        data() {
            return{
                site_url: site_root,
                user: {

                },
                blog_detail: {
                    image: ""
                },
            }
        },
        components: {
            VueEditor
        },
        props: ['users'],
        methods: {
            uploadImage: function () {
                var thisObject = this;
                var formData = new FormData();
                var imagefile = document.querySelector('#fileupload');
                formData.append("image", imagefile.files[0]);
                console.log(formData);
                axios.post(thisObject.site_url + '/admin/user/upload-image', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                    onUploadProgress: function (progressEvent) {
                        this.uploadPercentage = parseInt(Math.round((progressEvent.loaded * 100) / progressEvent.total));
                    }.bind(this)
                }).then(function (response) {
                    thisObject.blog_detail.image = response.data.data.url;
                    thisObject.user.image = response.data.data.url;
                }).catch(function (error) {
                });
            },
            deleteImage: function () {
                var thisObject = this;
                thisObject.blog_detail.image = "";
            },
            update() {
                var thisObject = this;
                thisObject.$validator.validate().then(valid => {
                    if (valid) {
                        axios.post(thisObject.site_url + '/admin/user/update', thisObject.user).then(function (response) {
                            thisObject.$swal({
                                title: "Success",
                                text: 'Record updated successfully!',
                                icon: 'success'
                            });
                            thisObject.$validator.reset();
                        }).catch(function (error) {
                            console.log(error.message);
                        });
                    }
                });
            }
        },
        mounted() {
            this.user = this.users;
            this.blog_detail.image = this.user.image;
        }
    }
</script>
