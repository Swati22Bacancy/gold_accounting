<template>
    <main>
        <my-header v-if="!login_page()"></my-header>
        <my-sidebar v-if="!login_page()"></my-sidebar>
        <div class="">
            <router-view></router-view>
        </div>
    </main>
</template>
 
<script>
import Header from '../components/layouts/Header';
import Sidebar from '../components/layouts/Sidebar';
    export default {
        components:{
            'my-header':Header,
            'my-sidebar':Sidebar
        },
        data() {
            return {
                //
            }
        },
        methods : 
        {
            login_page(){
                if(this.$router.currentRoute.name == 'login' || this.$router.currentRoute.name == 'forgotpassword'){
                    return true;
                }
                else{
                    return false;
                }
            },
        }
    }
</script>
<style src="../assets/styles/customstyle.css">
/* @import './assets/styles/customstyle.css'; */
</style>
<style>
@import url("../assets/styles/adminlte.css");
</style>