<template>
    <div class="container">
        <div class="form-group">
            <label for="title">电子邮件:</label>
            <input v-validate="'required'" type="email" class="form-control" name="email" placeholder="Enter email" v-model='email.email'/>
            <span class="text-danger">{{ errors.first('email') }}</span>
        </div>
        <button type="submit" @click.prevent="update" class="btn btn-default">更新</button>
    </div>
</template>

<script>
    import {site_root} from '../../../globalSetting.js';
    export default {
        data() {
            return{ 
                site_url: site_root
            }
        },
        methods: {
            update() {
                var thisObject = this;
                thisObject.$validator.validate().then(valid => {
                    if (valid) {
                        axios.post(thisObject.site_url + '/admin/email/update', thisObject.email).then(function (response) {
                            thisObject.$swal({
                                title: "Success",
                                text: 'Record updated successfully!',
                                icon: 'success'
                            });
                            thisObject.$validator.reset();
                        }).catch(function (error) {
                            console.log(error.message);
                        });
                    }
                });
            }
        },
        props: ['email']
    }
</script>
