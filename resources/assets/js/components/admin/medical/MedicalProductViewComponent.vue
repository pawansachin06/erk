<template>

    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">产品</h4>
                <div class="pull-right">
                    <a :href="site_url+'/admin/medical-create'" class="btn btn-default m-0">添加产品</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-overflow">
                    <table class="table table-xl border">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(m,i) in medical">
                                <td>{{i+1}}</td>
                                <td>{{m.title}}</td>
                                <td>{{m.category}}</td>
                                <td class="text-left font-size-18">
                                    <a :href="site_url+'/admin/medical/edit/'+m.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="text-gray" @click.prevent="deleteMedical(m.id)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                medical: {},
                site_url: site_root
            }
        },
        methods: {
            loadAllMedical() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/medical/loadAllMedical')
                        .then(function (response) {
                            thisObject.medical = response.data.records;
                        }).catch(function (error) {
                    console.log(error.message);
                });
            },
            deleteMedical(id) {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/medical/delete/' + id)
                        .then(function (response) {
                            console.log(response.data);
                            thisObject.loadAllMedical();
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadAllMedical();
        }
    }
</script>
