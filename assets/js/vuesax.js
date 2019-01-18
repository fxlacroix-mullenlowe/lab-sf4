import Vue from 'vue';
import Page from './vuesax/Page';
import Vuesax from 'vuesax';

import 'vuesax/dist/vuesax.css'
import 'material-icons/iconfont/material-icons.css';

Vue.use(Vuesax);
new Vue({
    el: '#app',
    template: '<Page/>',
    components: { Page }
});

