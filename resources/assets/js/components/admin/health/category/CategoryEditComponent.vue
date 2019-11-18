<template>
    <div class="container">
        <div class="form-group">
            <label for="category">Category Name:</label>
            <input v-validate="'required'" type="text" class="form-control" name="category" placeholder="Enter category name" v-model="category.name">
            <span class="text-danger">{{ errors.first('category') }}</span>
        </div>
        <button type="submit" @click.prevent="update" class="btn btn-default">Submit</button>
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
        props: ['categories'],
        methods: {
            update() {
                var thisObject = this;
                thisObject.$validator.validate().then(valid => {
                    if (valid) {
                        axios.post(thisObject.site_url + '/admin/health/category-update', thisObject.category).then(function (response) {
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
        mounted() {
            this.category = this.categories;
        }
    }
</script>
