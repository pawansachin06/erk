<template>
    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">Other Posts</h4>
                <div class="pull-right">
                    <a :href="site_url+'/admin/other/post-create'" class="btn btn-default">发布新帖</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-overflow">
                    <table class="table table-xl border">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr v-for="(p,i) in post">
                                <td>{{i+1}}</td>
                                <td>{{p.title}}</td>
                                <td>{{p.category_name.name}}</td>
                                <td class="text-left font-size-18">
                                    <a :href="site_url+'/admin/other/post-edit/'+p.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="btn text-gray" @click.prevent="deletePost(p.id)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script src="../../../../globalSetting.js" type="text/javascript"></script>

<script>
    import {site_root} from '../../../../globalSetting.js';
    export default {
        data() {
            return{
                post: {},
                site_url: site_root
            }
        },
        methods: {
            loadAllPost() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/other/post/loadAllPost')
                        .then(function (response) {
                            thisObject.post = response.data.records;
                        }).catch(function (error) {
                    console.log(error.message);
                });
            },
            deletePost(id) {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/other/post-delete/' + id)
                        .then(function (response) {
                            thisObject.loadAllPost();
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadAllPost();
        }
    }
</script>
