<template>
  <v-container>
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
    <Foot />
  </v-footer>
  </v-container>
 
</template>

<script>
import SideBar from "../components/SideBar";
import Foot from "../components/Foot";
export default {
  data(){
    return {
      drawer: true,
    }
  },
  components: {
    SideBar,
    Foot,
  },
};
  </script>
