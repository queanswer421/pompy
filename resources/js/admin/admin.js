require('./bootstrap');
import Vue from 'vue'
import Vuetify from 'vuetify'
import '../../../node_modules/vuetify/dist/vuetify.min.css'

import router from './router.js'
import store from './store.js'
import axios from 'axios'
import VueAxios from 'vue-axios'

import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)
Vue.use(BootstrapVue);

Vue.use(VueAxios, axios);
Vue.config.productionTip = false

Vue.use(Vuetify)
import App from './App.vue'

const admin = new Vue({
  store,
  router, // replace routes with router
  vuetify: new Vuetify,
  render: h => h(App), //indicate the App component inside render function
}).$mount("#admin");
