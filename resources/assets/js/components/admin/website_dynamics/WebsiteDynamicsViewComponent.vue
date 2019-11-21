<template>
    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">Website Dynamics</h4>
                <div class="pull-right">
                    <a :href="site_url+'/admin/website_dynamics/create'" class="btn btn-default">Add Post</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-overflow">
                    <table class="table table-xl border">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(w,i) in website_data">
                                <td>{{i+1}}</td>
                                <td>{{w.website_title}}</td>
                                <td><img v-bind:src="site_url + '/storage/app/' + w.website_image" style="height:50px;width:50px;" class="img-fluid"/></td>
                                <td class="text-left font-size-18 d-flex">
                                    <a :href="site_url+'/admin/website_dynamics/edit/'+w.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="btn text-gray" @click.prevent="deleteWebsite(w.id)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {site_root} from '../../../globalSetting.js';
    export default {
        data() {
            return{
                website_data: {},
                site_url: site_root,
            }
        },
        methods: {
            loadAllWebsite() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/website_dynamics/loadAllWebsite')
                        .then(function (response) {
                            thisObject.website_data = response.data.records;
                        }).catch(function (error) {
                    console.log(error.message);
                });
            },
            deleteWebsite(id) {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/website_dynamics/delete/' + id)
                        .then(function (response) {
                            thisObject.loadAllWebsite();
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadAllWebsite();
        }
    }
</script>
