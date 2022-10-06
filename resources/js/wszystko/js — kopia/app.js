require('./bootstrap');
import Vue from 'vue';
import App from './App.vue';

Vue.component('example', require('./components/Example.vue'));

new Vue({
    render: h => h(App)
  }).$mount('#app')