<template>
  <v-app>
    <v-main>      
      <v-main class="ma-4">

<!-- Provides the application the proper gutter -->
<v-container fluid>
<Home2 />
  <!-- If using vue-router -->
  <!-- <router-view></router-view> -->
  <v-divider color="white" class="mt-1" dark></v-divider>
</v-container>
</v-main>
    </v-main>
  </v-app>
</template>

<script>

import About from './Company/views/Home2.vue'
export default {
  name: 'Company',

  components: {
    Home2
  },

  data: () => ({
    //
  }),
};
</script>
