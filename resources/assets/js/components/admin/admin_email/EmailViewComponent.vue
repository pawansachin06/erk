<template>
    <div class="content-section">
        <div class="card">
            <div class="card-header border bottom card-header border bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">电子邮件</h4>
            </div>
            <div class="card-body">
                <div class="table-overflow">
                    <table class="table table-xl border">
                        <thead class="thead-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr v-for="(e,i) in email">
                                <td>{{i+1}}</td>
                                <td>{{e.email}}</td>
                                <td class="text-left font-size-18">
                                    <a :href="site_url+'/admin/email/edit/'+e.id" class="text-gray m-r-15"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
                site_url: site_root,
                email: {}
            }
        },
        methods: {
            loadEmail() {
                var thisObject = this;
                axios.get(thisObject.site_url + '/admin/email/fetch-email')
                        .then(function (response) {
                            thisObject.email = response.data.records;
                        }).catch(function (error) {
                    console.log(error.message);
                });
            }
        },
        mounted() {
            this.loadEmail();
        }
    }
</script>
