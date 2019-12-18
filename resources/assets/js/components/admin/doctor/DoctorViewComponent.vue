<template>
    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">医生风采</h4>
                <div class="pull-right">
                    <a :href="site_url+'/admin/doctor/create'" class="btn btn-default">添加产品</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-overflow">
                    <table class="table table-xl border">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Comapny Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(d,i) in doctor_data">
                                <td>{{i+1}}</td>
                                <td>{{d.name}}</td>
                                <td>{{d.title}}</td>
                                <td>{{d.company_name}}</td>
                                <td class="text-left font-size-18 d-flex">
                                    <a :href="site_url+'/admin/doctor/edit/'+d.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="btn text-gray" @click.prevent="deleteDoctor(d.id)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                doctor_data: {},
                site_url: site_root,
            }
        },
        methods: {
            loadAllDoctor() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/doctor/loadAllDoctor')
                        .then(function (response) {
                            thisObject.doctor_data = response.data.records;
                        }).catch(function (error) {
                    console.log(error.message);
                });
            },
            deleteDoctor(id) {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/doctor/delete/' + id)
                        .then(function (response) {
                            thisObject.loadAllDoctor();
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadAllDoctor();
        }
    }
</script>
