<template>
    <div class="container">

        <div class="form-group" v-if="blog_detail.image == ''">
            <label class="control-label">Image</label>
            <div class="control_element"> 
                <div class="box">
                    <form id="uploadForm" enctype="multipart/form-data" v-on:change="uploadImage()">
                        <input type="file" name="fileupload" id="fileupload" class="inputfile inputfile-6"/>
                        <label for="fileupload">
                            <span class="uploaded-image">{{blog_detail.image}}</span><strong><i class="fa fa-upload"></i></strong>
                        </label>
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
        <button type="submit" @click.prevent="submit" class="btn btn-default">Submit</button>
    </div>
</template>
<script src="../../../globalSetting.js" type="text/javascript"></script>

<script>
import {site_root} from '../../../globalSetting.js';
import { VueEditor } from "vue2-editor";
export default {
    data() {
        return{
            slider_data: {
                image_url: ""
            },
            site_url: site_root,
            blog_detail: {
                image: ""
            }
        }
    },
    components: {
        VueEditor
    },
    methods: {
        uploadImage: function () {
            var thisObject = this;
            var formData = new FormData();
            var imagefile = document.querySelector('#fileupload');
            formData.append("image", imagefile.files[0]);
            axios.post(thisObject.site_url + '/admin/slider/upload-image', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
                onUploadProgress: function (progressEvent) {
                    this.uploadPercentage = parseInt(Math.round((progressEvent.loaded * 100) / progressEvent.total));
                }.bind(this)
            }).then(function (response) {
                thisObject.blog_detail.image = response.data.data.url;
                thisObject.slider_data.image_url = response.data.data.url;

            }).catch(function (error) {
//                thisObject.errors = error.response.data.errors;
            });
        },
        deleteImage: function () {
            var thisObject = this;
            thisObject.blog_detail.image = "";
        },
        submit() {
            var thisObject = this;
            thisObject.$validator.validate().then(valid => {
                if (valid) {
                    axios.post(thisObject.site_url + '/admin/slider/store', thisObject.slider_data).then(function (response) {
                        thisObject.$swal({
                            title: "Success",
                            text: 'Record added successfully!',
                            icon: 'success'
                        });
                        thisObject.slider_data = {
                            image_url: ""
                        };
                        thisObject.blog_detail = {
                            image: ""
                        }
                        thisObject.$validator.reset();
                    }).catch(function (error) {
                        console.log(error.message);
                    });
                }
            });
        }
    },

    mounted() {

    }
}
</script>
