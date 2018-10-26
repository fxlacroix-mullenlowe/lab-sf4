import Vue from 'vue';
import Page from './vue/Page';

import 'bootstrap/dist/css/bootstrap.min.css';

Vue.component('todo-item', {
    template: '<li>This is a todo</li>'
})

new Vue({
    el: '#root',
    template: '<Page/>',
    components: { Page }
});
