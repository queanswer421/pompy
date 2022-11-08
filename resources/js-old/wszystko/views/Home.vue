<template>
    <v-container class="mt-8">
      <v-row>
        <v-col cols="12" sm="12">
          <!-- <v-toolbar flat color="rgba(0,0,0,0)" class="mt-n5">
            <v-toolbar-title>Status</v-toolbar-title>
            <v-spacer></v-spacer>
          </v-toolbar> -->

          <v-row class="px-5 mt-n6 ml-5">
            <v-col cols="12" sm="3" 
            v-for="(list, idx) in lists" :key="idx">
              <v-card
                align="center"
                color="#F9FAFC"
                class="rounded-circle border pt-10"
                width="200"
                height="200"
                flat
              >
                <v-icon size="60" color="#2EBFAF">
                  {{ list.icon }}
                </v-icon>

                <v-card-text class="grey--text text-lg-h6">
                  {{ list.title }}
                </v-card-text>

                <v-btn
                  absolute
                  color="#2EBFAF"
                  class="white--text"
                  fab
                  left
                  top
                >
                  <h2>{{ list.count }}</h2>
                </v-btn>
              </v-card>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
    </v-container>
</template>

<script>

export default {
  name: "Home",
  data: () => ({
   
    lists: [],
  }),
  created () {
    this.initialize()
  },
  
  methods: {
    async initialize(){
      try {
        // let {data} = await this.axios.get('http://pompyapi.online/admin/dashboard');
        let {data} = await this.axios.get('http://127.0.0.1:8000/admin/dashboard');
        console.log(data);
        this.lists = data;
      } catch (e) {
        console.log(e)
      }
    },

}
}
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