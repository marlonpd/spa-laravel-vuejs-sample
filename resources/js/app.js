/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

var $ = require('jquery');
window.$ = $;

require('./bootstrap');

import Vue from 'vue'

import VueRouter from 'vue-router'

import swal from 'sweetalert';

import icons from 'glyphicons'

window.router = VueRouter;
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
Vue.prototype.$http = window.axios

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import AddPersonComponent from './components/AddPersonComponent'
import EditPersonComponent from './components/EditPersonComponent'
import ViewListComponent from './components/ViewListComponent'

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const routes = [
    { path: '/add-person', name : 'AddPersonComponent', component: AddPersonComponent },
    { path: '/edit-person/:id', name : 'EditPersonComponent', component: EditPersonComponent, props: true },
    { path: '/view-list', name : 'ViewListComponent', component: ViewListComponent },
    { path: '/', name : 'ViewListComponent', component: ViewListComponent }
 ]

const router = new VueRouter({
    routes, // short for routes: routes
    mode: 'history'
});

const app = new Vue({
    el: '#app',
    mixins : [main],
    router
}).$mount('#app');
