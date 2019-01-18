<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <BasicNavBar />
            </div>
            <div class="col-md-9">
                <Jumbotron />
            </div>
            <div class="col-md-3">
                <SideBar />
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</template>

<script>
    import Jumbotron from './Jumbotron';
    import BasicNavBar from './BasicNavBar';
    import Heading from './Heading';
    import SideBar from './SideBar';
    export default {
        components: {
            Jumbotron,
            BasicNavBar,
            Heading,
            SideBar
        }
    };
</script>