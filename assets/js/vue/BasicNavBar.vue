<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-inverse">
        <div v-if="loading">
            <img src="../../images/loader-3.gif"/>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">{{ menu.brand }}</a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav">
                <li class="nav-item" v-for="(href, item) in menu.links">
                    <a class="nav-link" :href="href">{{ item }}</a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    import Routing from '../utils/Routing';

    export default {
        data() {
            return {
                menu: [],
                loading: false
            };
        },
        methods: {},
        created() {
            this.loading = true;
            fetch(Routing.generate("vue_menu"))
                .then((response) => response.json())
                .then(function(data) {
                   this.menu = data;
                   this.loading = false;
                }.bind(this));
        }
    };
</script>