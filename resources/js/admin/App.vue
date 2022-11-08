<template>
  <v-app id="inspire" :style="{ background: $vuetify.theme.themes.dark.background }">

    <router-view></router-view>
    <!-- <router-link to="/admin" >Admin</router-link>
    <router-link to="/admin/login" >Login</router-link> -->
  </v-app>
</template>

<script>
export default {
  name: "App",
  data: () => ({
   drawer: true,
  }),
};
</script>
<style scoped>
.border {
  border: 2px solid #2ebfaf !important;
}
.v-btn--fab.v-size--default.v-btn--absolute.v-btn--top {
  top: 65px !important;
}
.v-btn--absolute.v-btn--left,
.v-btn--fixed.v-btn--left {
  left: -26px !important;
}
</style>