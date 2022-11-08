<template>
  <v-container>
    <v-row class="mt-n12">
            <v-col cols="12" sm="12">
             <ManagersTable />
            </v-col>
    </v-row>
  </v-container>
</template>
<script>
  import ManagersTable from "../components/ManagersTable";

  export default {
    name: "Managers",
     
    data: () => ({

    }),
  
    components: {
      ManagersTable
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