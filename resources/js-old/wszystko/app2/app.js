require('../bootstrap');
import Vue from 'vue'
import Vuetify from 'vuetify';
// import Vuetify from './plugins/vuetify';
// import Vuetify from './Company/plugins/vuetify';
// import Vuetify from 'vuetify';
import '../../node_modules/vuetify/dist/vuetify.min.css'

import router from '../Company/router'
// import store from './Company/store'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios);
Vue.config.productionTip = false

Vue.use(Vuetify)
// Vue.component('Welcome',require('./App.vue').default)

import Company from '../wszystko/App2.vue'

const company = new Vue({
  
  // store,
    el: '#company',
    router,
    vuetify: new Vuetify,
    render(h) { return h(Company) }
});