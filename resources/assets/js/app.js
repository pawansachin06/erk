
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueSwal from 'vue-swal'
import VeeValidate from 'vee-validate'
import BootstrapVue from 'bootstrap-vue'
Vue.use(VueSwal);
Vue.use(VeeValidate);

Vue.use(BootstrapVue);


require('./bootstrap');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('medical-view-component', require('./components/admin/medical/MedicalProductViewComponent.vue'));
Vue.component('medical-add-component', require('./components/admin/medical/MedicalProductAddComponent.vue'));
Vue.component('medical-edit-component', require('./components/admin/medical/MedicalProductEditComponent.vue'));

Vue.component('category-view-component', require('./components/admin/health/category/CategoryViewComponent.vue'));
Vue.component('category-add-component', require('./components/admin/health/category/CategoryAddComponent.vue'));
Vue.component('category-edit-component', require('./components/admin/health/category/CategoryEditComponent.vue'));
Vue.component('post-view-component', require('./components/admin/health/post/PostViewComponent.vue'));
Vue.component('post-add-component', require('./components/admin/health/post/PostAddComponent.vue'));
Vue.component('post-edit-component', require('./components/admin/health/post/PostEditComponent.vue'));

Vue.component('news-category-view-component', require('./components/admin/news/category/CategoryViewComponent.vue'));
Vue.component('news-category-add-component', require('./components/admin/news/category/CategoryAddComponent.vue'));
Vue.component('news-category-edit-component', require('./components/admin/news/category/CategoryEditComponent.vue'));
Vue.component('news-post-view-component', require('./components/admin/news/post/PostViewComponent.vue'));
Vue.component('news-post-add-component', require('./components/admin/news/post/PostAddComponent.vue'));
Vue.component('news-post-edit-component', require('./components/admin/news/post/PostEditComponent.vue'));

Vue.component('doctor-view-component', require('./components/admin/doctor/DoctorViewComponent.vue'));
Vue.component('doctor-add-component', require('./components/admin/doctor/DoctorAddComponent.vue'));
Vue.component('doctor-edit-component', require('./components/admin/doctor/DoctorEditComponent.vue'));
Vue.component('slider-view-component', require('./components/admin/slider/SliderViewComponent.vue'));
Vue.component('slider-add-component', require('./components/admin/slider/SliderAddComponent.vue'));
Vue.component('slider-edit-component', require('./components/admin/slider/SliderEditComponent.vue'));

Vue.component('websitedynamics-view-component', require('./components/admin/website_dynamics/WebsiteDynamicsViewComponent.vue'));
Vue.component('websitedynamics-add-component', require('./components/admin/website_dynamics/WebsiteDynamicsAddComponent.vue'));
Vue.component('websitedynamics-edit-component', require('./components/admin/website_dynamics/WebsiteDynamicsEditComponent.vue'));

Vue.component('about-edit-component', require('./components/admin/about/AboutEditComponent.vue'));

Vue.component('other-category-view-component', require('./components/admin/other/category/CategoryViewComponent.vue'));
Vue.component('other-category-add-component', require('./components/admin/other/category/CategoryAddComponent.vue'));
Vue.component('other-category-edit-component', require('./components/admin/other/category/CategoryEditComponent.vue'));
Vue.component('other-post-view-component', require('./components/admin/other/post/PostViewComponent.vue'));
Vue.component('other-post-add-component', require('./components/admin/other/post/PostAddComponent.vue'));
Vue.component('other-post-edit-component', require('./components/admin/other/post/PostEditComponent.vue'));
Vue.component('email-edit-component', require('./components/admin/admin_email/EmailEditComponent.vue'));
Vue.component('email-view-component', require('./components/admin/admin_email/EmailViewComponent.vue'));

const app = new Vue({
    el: '#app'
});

