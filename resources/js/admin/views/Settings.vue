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
        <v-card>
    <v-tabs
      v-model="tab"
      background-color="primary"
      dark
    >
      <v-tab
        v-for="item in items"
        :key="item.tab"
      >
        {{ item.tab }}
      </v-tab>
    </v-tabs>

    <v-tabs-items v-model="tab">
      <v-tab-item
        v-for="item in items"
        :key="item.tab"
      >
        <v-card flat>
          <component v-bind:is="item.content"></component>
        </v-card>
      </v-tab-item>
    </v-tabs-items>
  </v-card>
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
      tab: null,
        items: [
          { tab: 'Producenci', content: 'ProducerTable' },
          { tab: 'Kategorie', content: 'CategoryTable' },
          { tab: 'Typy', content: 'TypeTable' },
        ],
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