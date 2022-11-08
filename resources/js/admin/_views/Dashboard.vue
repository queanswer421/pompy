<template>
  <v-container fluid fill-height>
      <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
                <v-toolbar dark color="primary">
                  <v-toolbar-title>Dashboard</v-toolbar-title>
                </v-toolbar>
            </v-card>
          </v-flex>
      </v-layout>
    </v-container>
  </template>

  <script>
    // import { required, minLength, email } from 'vuelidate/lib/validators'
    // import BFormInvalidFeedback from 'bootstrap-vue/src/components/form/form-invalid-feedback';
    // import authAxios from '../auth-axios.js';

    export default {
      // components: {BFormInvalidFeedback},
    //   data(){
    //     return {
    //       email: '',
    //       password: ''
    //     }
    //   },
    //   validations: {
    //     email: {
    //       required,
    //       email
    //     },
    //     password: {
    //       required,
    //       minLength: minLength(8)
    //     }
    //   },
    //   methods: {
    //     async onSubmit(event){
    //       event.preventDefault();
    //       await this.$store.dispatch('login', {
    //         email: this.email,
    //         password: this.password
    //       });
    //       this.$router.push({name: 'protected'})
    //     },
    //     onReset(event){
    //       event.preventDefault();
    //       this.email = '';
    //       this.password = '';
    //       this.$v.$reset();
    //     }
    //   }
    };
  </script>
