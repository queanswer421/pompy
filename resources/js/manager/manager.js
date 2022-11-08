require('./bootstrap');
import Vue from 'vue'
import App from './App.vue'
import router from './router/index';
import store from './store.js'
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap';

Vue.config.productionTip = false

const manager = new Vue({
  store,
  router,
  render: h => h(App), 
}).$mount("#manager");
