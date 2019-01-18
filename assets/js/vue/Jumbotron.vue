<template>
    <div class="jumbotron">
        <div v-if="loading">
            <img src="../../images/loader-3.gif"/>
        </div>
        <span v-html="data.content"></span>
    </div>
</template>

<script>
    import Routing from '../utils/Routing';

    export default {
        data() {
            return {
                data: '',
                loading: false
            };
        },
        methods: {},
        created() {
            this.loading = true;
            fetch(Routing.generate("vue_home"))
                .then((response) => response.json())
                .then(function(data) {
                    this.data = data;
                    this.loading = false;
                }.bind(this));
        }
    };
</script>