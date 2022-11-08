require('./bootstrap');
import Vue from 'vue'

Vue.config.productionTip = false

import App from './App.vue'

const employer = new Vue({
  render: h => h(App), //indicate the App component inside render function
}).$mount("#employer");