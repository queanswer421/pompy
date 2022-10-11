require('./bootstrap');
import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

import router from './router'
import store from './store'
import axios from 'axios'
import VueAxios from 'vue-axios'

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
