<template>

    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">All User</h4>
            </div>
            <div class="card-body">
                <div class="table-overflow">
                    <table class="table table-xl border userview">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(u,i) in user">
                                <td>{{i+1}}</td>
                                <td>{{u.name}}</td>
                                <td><img v-bind:src="site_url + '/storage/app/' + u.image" class="img-fluid"/></td>
                                <td>{{u.email}}</td>
                                <td>{{u.age}}</td>
                                <td class="text-left font-size-18">
                                    <a :href="site_url+'/admin/user/edit/'+u.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="text-gray" @click.prevent="deleteUser(u.id)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .userview td img{max-width: 100px;border-radius: 50%;height: 100px;}
</style>
<script>
    import {site_root} from '../../../globalSetting.js';
    export default {
        data() {
            return{
                user: {},
                site_url: site_root
            }
        },
        methods: {
            loadAllUser() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/user/loadAllUser')
                        .then(function (response) {
                            thisObject.user = response.data.records;
                            console.log(thisObject.user);
                        }).catch(function (error) {
                    console.log(error.message);
                });
            },
            deleteUser(id) {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/user/delete/' + id)
                        .then(function (response) {
                            thisObject.loadAllUser();
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadAllUser();
        }
    }
</script>
