<template>
    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">产品</h4>
                <div class="pull-right">
                    <a :href="site_url+'/admin/account/create'" class="btn btn-default">添加产品</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-overflow">
                    <table class="table table-xl border">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(a,i) in account_data">
                                <td>{{i+1}}</td>
                                <td><img style="max-width: 200px;" :src="site_url + '/storage/app/' + a.image"/></td>
                                <td class="text-left font-size-18">
                                    <a :href="site_url+'/admin/account/edit/'+a.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="btn text-gray" @click.prevent="deleteAccount(a.id)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                account_data: {},
                site_url: site_root,
            }
        },
        methods: {
            loadAllAccount() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/account/loadAllAccount')
                        .then(function (response) {
                            thisObject.account_data = response.data.records;
                        }).catch(function (error) {
                    console.log(error.message);
                });
            },
            deleteAccount(id) {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/account/delete/' + id)
                        .then(function (response) {
                            thisObject.$swal({
                                title: "Success",
                                text: 'Record deleted successfully!',
                                icon: 'success'
                            });
                            thisObject.loadAllAccount();
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadAllAccount();
        }
    }
</script>
