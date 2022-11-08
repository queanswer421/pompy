<template>
  <v-container>
    <v-row>
      <v-col cols="12" sm="12">
        <v-toolbar flat color="rgba(0,0,0,0)" class="mt-n5">
          <v-toolbar-title>Ustawienia parametrów</v-toolbar-title>
          <v-spacer></v-spacer>
        </v-toolbar>
      </v-col>
    </v-row>
    <v-row class="mt-n5">
      <v-col cols="12" sm="12">
        <ProducerTable />
      </v-col>
    </v-row>
    <v-row class="mt-5">
      <v-col cols="12" sm="6">
        <CategoryTable />
      </v-col>
      <v-col cols="12" sm="6">
        <TypeTable />
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
  import ProducerTable from "../components/ProducerTable";
  import TypeTable from "../components/TypeTable";
  import CategoryTable from "../components/CategoryTable";
  export default {
    name: "Settings",
    data: () => ({
     
    }),
    components: {
      ProducerTable,
      TypeTable,
      CategoryTable,
      // History,
      // Appointment,
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