<template>
    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">新的类别</h4>
                <div class="pull-right">
                    <a :href="site_url+'/admin/news/category-create'" class="btn btn-default m-0">添加新类别</a>                    
                </div>
            </div>

            <div class="card-body">
                <div class="table-overflow">
                    <table class="table table-xl border">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(c,i) in category">
                                <td>{{i+1}}</td>
                                <td>{{c.name}}</td>
                                <td class="text-left font-size-18">
                                    <a :href="site_url+'/admin/news/category-edit/'+c.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="text-gray" @click.prevent="deleteCategory(c.id)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
    import {site_root} from '../../../../globalSetting.js';
    export default {
        data() {
            return{
                category: {},
                site_url: site_root
            }
        },
        methods: {
            loadAllCategory() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/news/loadAllCategory')
                        .then(function (response) {
                            thisObject.category = response.data.records;
                        }).catch(function (error) {
                    console.log(error.message);
                });
            },
            deleteCategory(id) {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/news/category-delete/' + id)
                        .then(function (response) {
                            console.log(response.data);
                            thisObject.loadAllCategory();
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadAllCategory();
        }
    }
</script>
