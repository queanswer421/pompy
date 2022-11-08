<template>
    <main>
        <router-view></router-view>
    </main>
</template>
<script>
import Footer from "./components/Footer.vue";

export default {
    components: {
        Footer,
    },
};
</script>
