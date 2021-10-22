require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import router from './router';

import App from './app.vue'

import VueAxios from 'vue-axios'
import axios from 'axios';

import {
    BootstrapVue,
    IconsPlugin
} from 'bootstrap-vue';

//import css files
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

Vue.use(VueAxios, axios);

// Install BootstrapVue
Vue.use(BootstrapVue);

// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);

// bootstrap datatable
import {
    TablePlugin
} from 'bootstrap-vue';
Vue.use(TablePlugin);

// vuex store
import {
    store
} from './store';

// for flash messages
import VueFlashMessage from '@smartweb/vue-flash-message';
Vue.use(VueFlashMessage);

// for form validation
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

// for common functions
import common from "./common"
Vue.mixin(common)



const app = new Vue(Vue.util.extend({
        router
    },
    App)).$mount('#app');
