require('./bootstrap');

import Vue from 'vue'
window.Vue = require('vue');

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import Swal from 'sweetalert2/dist/sweetalert2.js'


// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

 



const swal = window.swal = require('sweetalert2');

window.swal = Swal;



const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

window.toast = Toast;

import { Form, HasError,AlertError } from 'vform'

window.Form = Form;
Vue.component(HasError.name,HasError)
Vue.component(AlertError.name,AlertError)

Vue.component('role', require('./components/role.vue').default);
Vue.component('user', require('./components/user.vue').default);

const app = new Vue({
  el:"#app"
});

