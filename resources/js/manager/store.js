// import { is } from 'core-js/core/object';
import Vue from 'vue'
import Vuex from 'vuex'
// import authAxios from './auth-axios.js';
import router from './router';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    token: null,
    userId: null,
    userType: null,
    error: false
  },
  getters:{
    isAuth: state => state.token !== null
  },
//   mutations: {
//     auth(state, payload){
//       state.token = payload.token;
//       state.userId = payload.userId;
//       state.userType = payload.userType;
//     },
//     clearAuth(state){
//       state.token = null,
//       state.userId = null,
//       state.userType = null
//     },
//     error(state){
//       state.error = true
//     }
//   },
//   actions: {
//     async login({commit}, payload){
//       try {
//         let response = await authAxios.post('admin/login', payload);
//           commit('auth', {
//             token: response.data.token,
//             userId: response.data.id,
//             userType: 'administrator'
//           });
//           console.log(response.data);
//           // if(!response.error){
//             const now = new Date();
//             const endDate = new Date(now.getTime() + 864 * 100000 * 2);
//             localStorage.setItem('token', response.data.token);
//             localStorage.setItem('userId', response.data.id);
//             localStorage.setItem('expires', endDate);
//             console.log(endDate);
//         router.push('/admin');
//       } catch(e) {
//         console.log(error.data);
//         console.log(e);
//         commit('error');
//         // console.log(e);
//       }
//     },
//     logout({commit}){
//       commit('clearAuth');
//       localStorage.removeItem('token');
//       localStorage.removeItem('userId');
//       localStorage.removeItem('expires');
//       // router.push('/admin/login');
//       window.location = 'http://localhost:8000/'
//     },
//     autologin({commit}) {
//       const token = localStorage.getItem('token');
//       if(!token) {
//         return;
//       }
//       const userId = localStorage.getItem('userId');
//       if(!userId) {
//         return;
//       }
//       const expirationDate = localStorage.getItem('expires');
//       const now = new Date();
//       if(now >= expirationDate) {
//         localStorage.removeItem('token');
//         localStorage.removeItem('userId');
//         localStorage.removeItem('expires');
//         return;
//       }

//       commit('auth', {
//         token,
//         userId
//       });
//     },
//   }
})
