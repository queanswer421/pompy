<template>
    <div id="wrapper">
        <Sidebar />
        <div id="content-wrapper">
            <Header />
            <router-view></router-view>
            <Footer />
        </div>
    </div>
</template>
<script>
import Header from "../components/Header.vue";
import Sidebar from "../components/Sidebar.vue";
import Footer from "../components/Footer.vue";
export default {
    components: {
        Header,
        Sidebar,
        Footer,
    },
};
</script>
