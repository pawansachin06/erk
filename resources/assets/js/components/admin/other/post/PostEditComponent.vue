<template>
    <div class="container">
        <div class="form-group">
            <label for="title">Title:</label>
            <input v-validate="'required'"  type="text" class="form-control" name="post_title" placeholder="Enter title" v-model="post_data.title">
            <span class="text-danger">{{ errors.first('post_title') }}</span>
        </div>
        <div class="form-group">
            <label for="school">Category:</label>
            <select v-validate="'required'"  class="form-control" v-model="post_data.category_id" name="category">                
                <option disabled selected value="">Select Category</option>
                <option v-for="c in category" v-bind:value="c.id">{{c.name}}</option>
            </select>
            <span class="text-danger">{{ errors.first('category') }}</span>
        </div>
        <div class="form-group">
            <label for="category">Description:</label>
            <vue-editor v-validate="'required'"  v-model="post_data.description" name="description"> </vue-editor>
            <span class="text-danger">{{ errors.first('description') }}</span>
        </div>
        <button type="submit" @click.prevent="update" class="btn btn-default">Submit</button>
    </div>
</template>
<script src="../../../../globalSetting.js" type="text/javascript"></script>

<script>
import {site_root} from '../../../../globalSetting.js';
import { VueEditor } from "vue2-editor";
export default {
    data() {
        return{
            post_data: {},
            site_url: site_root,
            category: {}
        }
    },
    components: {
        VueEditor
    },
    props: ['posts'],
    methods: {
        loadAllCategory() {
            var thisObject = this;
            axios.get(thisObject.site_url + '/admin/other/post/loadAllCategory'
                    ).then(function (response) {
                thisObject.category = response.data.records;
            }).catch(function (error) {
                console.log(error.message);
            });
        },
        update() {
            var thisObject = this;
            thisObject.$validator.validate().then(valid => {
                if (valid) {
                    axios.post(thisObject.site_url + '/admin/other/post-update', thisObject.post_data).then(function (response) {
                        thisObject.$swal({
                            title: "Success",
                            text: 'Record updated successfully!',
                            icon: 'success'
                        });
                        thisObject.post_data = {
                            title: "",
                            category_id: "",
                            description: ""
                        };
                        thisObject.$validator.reset();
                    }).catch(function (error) {
                        console.log(error.message);
                    });
                }
            });
        }
    },

    mounted() {
        this.loadAllCategory();
        this.post_data = this.posts;
    }
}
</script>
