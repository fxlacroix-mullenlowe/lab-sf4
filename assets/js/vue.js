import Vue from 'vue';
import VueRouter from 'vue-router'
import PageSax from './vuesax/Page';
import Page from './vue/Page';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'vuesax/dist/vuesax.css'
import 'material-icons/iconfont/material-icons.css';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        {path: '/vue', component: Page},
        {path: '/vuesax', component: PageSax},
        {path: '/game', component: PageSax},
    ]
});

new Vue({
    el: '#root',
    template: '<Page/>',
    components: { Page }
});
