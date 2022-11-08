<template>
  <v-app id="inspire" :style="{ background: $vuetify.theme.themes.dark.background }">
  <v-navigation-drawer app
      dark
      color="#000000"
      v-model="drawer">
      <SideBar/>
  </v-navigation-drawer>

  <v-app-bar app color="#F5F6FA" flat>
        <!-- <v-text-field
            dense
            label="Search..."
            color="black"
           
          ></v-text-field> -->
    <v-app-bar-nav-icon @click.stop="drawer=!drawer"></v-app-bar-nav-icon>
          <v-spacer></v-spacer>
    <v-btn class="ml-2"  icon  small>
      <v-icon dark>
        mdi-bell
      </v-icon>
    </v-btn>
    <v-btn class="ml-2" icon  small>
      <v-icon dark>
        mdi-email
      </v-icon>
    </v-btn>
    <v-btn class="ml-3" fab  small color="#6B6C6E">
      <v-icon dark large color="white">
        mdi-account
      </v-icon>
    </v-btn>
  </v-app-bar>

  <!-- Sizes your content based upon application components -->
  <v-main class="ma-4">

    <!-- Provides the application the proper gutter -->
    <v-container fluid>

      <!-- If using vue-router -->
      <router-view></router-view>
      <v-divider color="white" class="mt-1" dark></v-divider>
    </v-container>
  </v-main>

  <v-footer 
    app
    dark
      padless
      inset>
    <Foot />tttt
  </v-footer>
</v-app>
</template>

<script>
import SideBar from "./components/SideBar";
import Foot from "./components/Foot";
// import Table from "./components/Table";
// import History from "./components/History";
// import Appointment from "./components/Appointment";
export default {
  name: "App",
  data: () => ({
   drawer: true,
    lists: [
      {
        icon: "fas fa-user-md",
        title: "Active Doctors",
        count: 21,
      },
      {
        icon: "fas fa-procedures",
        title: "Active Patients",
        count: 41,
      },
      {
        icon: "fas fa-user-nurse",
        title: "Active Nurses",
        count: 35,
      },
      {
        icon: "fas fa-hospital",
        title: "Representative",
        count: 15,
      },
    ],
  }),

  components: {
    SideBar,
    Foot,
    // History,
    // Appointment,
    // Table
  },
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