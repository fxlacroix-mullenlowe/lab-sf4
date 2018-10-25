import Vue from 'vue';
import Page from './component/vue/Page';

import 'bootstrap/dist/css/bootstrap.min.css';

new Vue({
    el: '#root',
    template: '<Page/>',
    components: { Page }
});
