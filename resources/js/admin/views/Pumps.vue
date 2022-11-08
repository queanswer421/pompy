<template>
  <v-container>
    <v-row class="mt-n12">
            <v-col cols="12" sm="12">
             <PumpsTable />
            </v-col>
    </v-row>
    <v-row class="mt-n12">
            <v-col cols="12" sm="12">
             <!-- <PumpsTableTest /> -->
            </v-col>
    </v-row>
    <v-row class="mt-12">
            <v-col cols="12" sm="12">
      <FetchPumps />
    </v-col>
    </v-row>
  </v-container>
</template>
<script>
  // import PumpsTableTest from "../components/PumpsTableTest";
import PumpsTable from "../components/PumpsTable";
import FetchPumps from "../components/FetchPumps.vue";

  export default {
    name: "Pumps",
    data: () => ({
     
    }),
  
    components: {
    PumpsTable,
    FetchPumps
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
  </style> -->