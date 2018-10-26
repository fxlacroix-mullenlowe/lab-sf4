<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <BasicNavBar />
                <Jumbotron />
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    import Jumbotron from './Jumbotron';
    import BasicNavBar from './BasicNavBar';
    import Heading from './Heading';
    export default {
        components: {
            Jumbotron,
            BasicNavBar,
            Heading
        },
        data() {
            return {
                firstname: null,
                counter: 0,
                show: false
            };
        },
        methods: {
            say(name) {
                alert(name + ' ' + this.firstname);
            },
            addPoint() {
                var waiting = document.querySelector('.waiting');
                waiting.innerText += '.';
            },
            updateFirstname(firstname) {
                this.firstname = firstname;
                this.show = true;
            }
        },
        created() {
            fetch('/api/get/firstname')
                .then((response) => response.json())
                .then(function(data) {
                    var self = this;
                    var interval = setInterval(self.addPoint, 500);
                    setTimeout(function() {
                        self.updateFirstname(data.firstname)
                        clearInterval(interval);
                    }, 2000);
                }.bind(this));
        }
    };
</script>