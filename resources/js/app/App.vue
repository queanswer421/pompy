<template>
    <v-app>
        <v-content>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            <v-card class="elevation-12">
              <v-window v-model="step">
                <v-window-item :value="1">
                  <v-row>
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1
                          class="text-center display-2 teal--text text--darken-3"
                        >System Pracownika</h1>
                        
                      </v-card-text>
                      <div class="text-center mt-3 mb-5">
                        <v-btn href="http://localhost:8000/employers/" rounded color="teal darken-3" dark>Login</v-btn>
                      </div>
                    </v-col>
                    <v-col cols="12" md="4" class="teal darken-3">
                      <v-card-text class="white--text mt-12">
                        <h1 class="text-center display-1">System do zarządzania</h1>
                        <!-- <h5
                          class="text-center"
                        >System do zarządzania firmą</h5> -->
                      </v-card-text>
                      <div class="text-center mb-5">
                        <v-btn rounded outlined dark @click="step++">Wybierz</v-btn>
                      </div>
                    </v-col>
                  </v-row>
                </v-window-item>
                <v-window-item :value="2">
                  <v-row class="fill-height">
                    <v-col cols="12" md="4" class="teal darken-3">
                      <v-card-text class="white--text mt-12">
                        <h1 class="text-center display-1">System dla pracowników</h1>
                        <!-- <h5
                          class="text-center"
                        >System dla pracowników</h5> -->
                      </v-card-text>
                      <div class="text-center mb-5">
                        <v-btn rounded outlined dark @click="step--">Wybierz</v-btn>
                      </div>
                    </v-col>

                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1 class="text-center display-2 teal--text text--darken-3">System zarządzający</h1>


                      </v-card-text>
                      <div class="text-center mt-3 mb-5">
                        <v-btn href="http://localhost:8000/companies/" rounded color="teal darken-3" dark>Login</v-btn>
                      </div>
                    </v-col>
                  </v-row>
                </v-window-item>
              </v-window>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-content>
    </v-app>

</template>

<script>
export default {
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};
</script>