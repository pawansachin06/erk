<template>
    <div class="container">
        <div class="form-group">
            <label for="title">Title</label>
            <input v-validate="'required'" type="text" class="form-control" name="post_title" placeholder="Enter title" v-model="website_data.website_title">
                <span class="text-danger">{{ errors.first('post_title') }}</span>
        </div>
        <div class="form-group">
            <label for="category">Description:</label>
            <vue-editor v-validate="'required'" v-model="website_data.website_description" name="description"> </vue-editor>
            <span class="text-danger">{{ errors.first('description') }}</span>
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
        <button type="submit" @click.prevent="update" class="btn btn-default">Submit</button>
    </div>
</template>

<script>
    import {site_root} from '../../../globalSetting.js';
    import { VueEditor } from "vue2-editor";
    export default {
        data() {
            return{
                website_data: {},
                site_url: site_root,
                blog_detail: {
                    image: ""
                }
            }
        },
        components: {
            VueEditor
        },
        props: ['websites'],
        methods: {
            uploadImage: function () {
                var thisObject = this;
                var formData = new FormData();
                var imagefile = document.querySelector('#fileupload');
                formData.append("image", imagefile.files[0]);
                axios.post(thisObject.site_url + '/admin/website_dynamics/upload-image', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                    onUploadProgress: function (progressEvent) {
                        this.uploadPercentage = parseInt(Math.round((progressEvent.loaded * 100) / progressEvent.total));
                    }.bind(this)
                }).then(function (response) {
                    thisObject.blog_detail.image = response.data.data.url;
                    thisObject.website_data.website_image = response.data.data.url;
                console.log(thisObject.school.logo);
                }).catch(function (error) {
                thisObject.errors = error.response.data.errors;
                });
            },
            deleteImage: function () {
                var thisObject = this;
                thisObject.blog_detail.image = "";
                thisObject.website_data.website_image = "";
            },
            update() {
                var thisObject = this;
                thisObject.$validator.validate().then(valid => {
                    if (valid) {
                        axios.post(thisObject.site_url + '/admin/website_dynamics/update', thisObject.website_data).then(function (response) {
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
            this.website_data = this.websites;
            this.blog_detail.image = this.website_data.website_image;
        }
    }
</script>
