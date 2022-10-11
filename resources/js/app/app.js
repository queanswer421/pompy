require('./bootstrap');
import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import vuetify from './plugins/vuetify';
import App from './App.vue'

Vue.use(Vuetify)

const app = new Vue({
    vuetify,
    // vuetify: new Vuetify,
    render: h => h(App),
}).$mount("#app");