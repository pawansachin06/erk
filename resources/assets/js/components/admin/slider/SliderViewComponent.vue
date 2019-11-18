<template>
    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">产品</h4>
                <div class="pull-right">
                    <a :href="site_url+'/admin/slider/create'" class="btn btn-default">添加产品</a>
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
                            <tr v-for="(s,i) in slider_data">
                                <td>{{i+1}}</td>
                                <td><img style="max-width: 200px;" :src="site_url + '/../storage/app/' + s.image"/></td>
                                <td class="text-left font-size-18">
                                    <a :href="site_url+'/admin/slider/edit/'+s.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="#" class="btn text-gray" @click.prevent="deleteSlider(s.id)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                slider_data: {},
                site_url: site_root,
            }
        },
        methods: {
            loadAllSlider() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/slider/loadAllSlider')
                        .then(function (response) {
                            thisObject.slider_data = response.data.records;
                        }).catch(function (error) {
                    console.log(error.message);
                });
            },
            deleteSlider(id) {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/slider/delete/' + id)
                        .then(function (response) {
                            thisObject.$swal({
                                title: "Success",
                                text: 'Record deleted successfully!',
                                icon: 'success'
                            });
                            thisObject.loadAllSlider();
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadAllSlider();
        }
    }
</script>
