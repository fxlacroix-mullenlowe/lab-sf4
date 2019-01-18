<template>
    <vs-row>

        <div>
            <vs-navbar v-model="activeItem" class="nabarx">
                <vs-button vs-type="flat" vs-radius="50%" vs-icon="menu"></vs-button>

                <vs-navbar-title>
                    Hello world
                </vs-navbar-title>

                <vs-spacer></vs-spacer>

                <vs-navbar-item index="0">
                    <a href="#">Home</a>
                </vs-navbar-item>
                <vs-navbar-item index="1">
                    <a href="#">News</a>
                </vs-navbar-item>
                <vs-navbar-item index="2">
                    <a href="#">Update</a>
                </vs-navbar-item>
            </vs-navbar>
        </div>


        <vs-col :key="index" v-for="col,index in 3" v-tooltip="'col - 4'" vs-type="flex" vs-justify="center" vs-align="center" vs-w="4">
            33.3%
        </vs-col>

        <vs-alert active="true">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
        </vs-alert>
        <vs-avatar />
        <vs-avatar color="primary" icon="date_range" />
        <vs-avatar color="success" icon="whatshot" />
        <vs-avatar color="danger" icon="photo_camera" />
        <vs-avatar color="warning" icon="filter_vintage" />
        <vs-avatar color="dark" icon="watch" />

        <vs-breadcrumb
                :items="
                   [
                     {
                       title: 'Dashboard',
                       url: 'dashboard'
                     },
                     {
                       title: 'Link 1',
                       url: 'link-1'
                     },
                     {
                       title: 'Link 2',
                       disabled: true
                     },
                     {
                       title: 'Active',
                       active: true
                     }
                   ]"
        ></vs-breadcrumb>

        <vs-button color="primary" vs-type="filled">Primary</vs-button>
        <vs-button color="success" vs-type="filled">Success</vs-button>
        <vs-button color="danger" vs-type="filled">Danger</vs-button>
        <vs-button color="warning" vs-type="filled">Warning</vs-button>
        <vs-button color="dark" vs-type="filled">Dark</vs-button>
        <vs-button color="rgb(134, 4, 98)" vs-type="filled">RGB</vs-button>
        <vs-button disabled vs-type="filled">Disabled</vs-button>
        <vs-button vs-color="primary" vs-type="filled" to="/components/list.html">Router</vs-button>


        <vs-row vs-justify="center">
            <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="6">
                <vs-card>
                    <div slot="header">
                        <h3>
                            Hello world !
                        </h3>
                    </div>
                    <div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </div>
                    <div slot="footer">
                        <vs-row vs-justify="flex-end">
                            <vs-button vs-type="gradient" color="danger" vs-icon="favorite"></vs-button>
                            <vs-button color="primary" vs-icon="turned_in_not"></vs-button>
                            <vs-button color="rgb(230,230,230)" color-text="rgb(50,50,50)" vs-icon="settings"></vs-button>
                        </vs-row>
                    </div>
                </vs-card>
            </vs-col>
        </vs-row>

        <div class="">
            <ul class="centerx">
                <li>
                    <vs-checkbox v-model="checkBox1">Primary</vs-checkbox>
                </li>
                <li>
                    <vs-checkbox icon="sms" color="success" v-model="checkBox2">SMS</vs-checkbox>
                </li>
                <li>
                    <vs-checkbox icon="close" color="danger" v-model="checkBox3">Cancel</vs-checkbox>
                </li>
                <li>
                    <vs-checkbox icon="attach_file" color="warning" v-model="checkBox4">File</vs-checkbox>
                </li>
                <li>
                    <vs-checkbox icon="format_bold" color="dark" v-model="checkBox5">Bold</vs-checkbox>
                </li>
                <li>
                    <vs-checkbox icon="location_searching" color="rgb(38, 187, 174)" v-model="checkBox6">Location</vs-checkbox>
                </li>
                <li>
                    <vs-checkbox icon="camera_alt" color="#720ea8" v-model="checkBox7">Camera</vs-checkbox>
                </li>
            </ul>
        </div>

        <div class="centerx">
            <vs-chip>
                <vs-avatar />
                Icon Default
            </vs-chip>
            <vs-chip color="primary">
                <vs-avatar icon="send" />
                Icon send
            </vs-chip>
            <vs-chip color="success">
                <vs-avatar icon="markunread" />
                Icon markunread
            </vs-chip>
            <vs-chip color="danger">
                <vs-avatar icon="link_off" />
                Icon link_off
            </vs-chip>
            <vs-chip color="warning">
                <vs-avatar icon="battery_alert" />
                Icon battery_alert
            </vs-chip>
            <vs-chip color="dark">
                <vs-avatar icon="edit" />
                Icon edit
            </vs-chip>
        </div>

        <div class="con-example-images">
            <vs-images>
                <vs-image :key="index" :src="`https://picsum.photos/400/400?image=2${index}`" v-for="(image, index) in 9" />
                <vs-image :key="index" :src="`https://picsum.photos/400/400?image=1${index}`" v-for="(image, index) in 7" />
            </vs-images>
        </div>
        <div>
            <vs-pagination :total="40" v-model="currentx"></vs-pagination>
        </div>

        <vs-progress :percent="100" color="primary">primary</vs-progress>
        <vs-progress :percent="90" color="warning">warning</vs-progress>
        <vs-progress :percent="75" color="danger">danger</vs-progress>
        <vs-progress :percent="60" color="success">success</vs-progress>
        <vs-progress :percent="45" color="dark">dark</vs-progress>
        <vs-progress :percent="30" color="rgb(164, 69, 15)">RGB</vs-progress>
        <vs-progress :percent="15" color="#24c1a0">HEX</vs-progress>

        <div class="con-select-example">
            <input v-model="colorx" type="color" name="" value="">
            <vs-select
                    :color="colorx"
                    class="selectExample"
                    label="Figuras"
                    v-model="select1"
            >
                <vs-select-item :key="index" :vs-value="item.value" :vs-text="item.text" v-for="(item,index) in options1" />
            </vs-select>
            <vs-select
                    :color="select2"
                    class="selectExample"
                    label="Figuras"
                    v-model="select2"
            >
                <vs-select-item :key="index" :vs-value="item.value" :vs-text="item.text" v-for="(item,index) in options2" />
            </vs-select>
        </div>


        <div id="parentx">

            <vs-button @click="active=!active" color="primary" vs-type="filled">Open Sidebar</vs-button>
            <vs-sidebar parent="body" default-index="1"  color="primary" class="sidebarx" spacer v-model="active">

                <div class="header-sidebar" slot="header">
                    <vs-avatar  size="70px" src="https://randomuser.me/api/portraits/men/85.jpg"/>

                    <h4>
                        My Name
                        <vs-button color="primary" vs-icon="more_horiz" vs-type="flat"></vs-button>
                    </h4>

                </div>

                <vs-sidebar-item index="1" icon="question_answer">
                    Dashboard
                </vs-sidebar-item>

                <vs-sidebar-item index="2" icon="gavel">
                    History
                </vs-sidebar-item>

                <vs-divider icon="person" position="left">
                    User
                </vs-divider>

                <vs-sidebar-item index="3" icon="verified_user">
                    Configurations
                </vs-sidebar-item>
                <vs-sidebar-item index="4" icon="account_box">
                    Perfile
                </vs-sidebar-item>
                <vs-sidebar-item index="5" >
                    Card
                </vs-sidebar-item>

                <div class="footer-sidebar" slot="footer">
                    <vs-button vs-icon="reply" color="danger" vs-type="flat">log out</vs-button>
                    <vs-button vs-icon="settings" color="primary" vs-type="border"></vs-button>
                </div>

            </vs-sidebar>
        </div>
        <div class="">
            <vs-slider v-model="value1"/>
            <vs-slider disabled="true" v-model="value2"/>
            <vs-slider max=200 v-model="value3"/>
        </div>

    </vs-row>
</template>

<script>
    export default {};
</script>

<style>
    .con-example-images{
        width: 400px;
        max-height: 500px;
        overflow: auto;
    }


</style>