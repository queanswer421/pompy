<template>
  <v-container>
    <v-row class="mt-n12">
            <v-col cols="12" sm="12">
             <HomeBoard />
            </v-col>
    </v-row>
  </v-container>
</template>

<script>
import HomeBoard from "../components/HomeBoard";

export default {
  name: "Home",
    data: () => ({

    }),

  components: {
    HomeBoard
  },
};
</script>
