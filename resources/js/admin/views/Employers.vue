<template>
  <v-container>
    <v-row class="mt-n12">
            <v-col cols="12" sm="12">
             <EmployersTable />
            </v-col>
    </v-row>
  </v-container>
</template>
<script>
  import EmployersTable from "../components/EmployersTable";

  export default {
    name: "Employers",
     
    data: () => ({

    }),
  
    components: {
      EmployersTable
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