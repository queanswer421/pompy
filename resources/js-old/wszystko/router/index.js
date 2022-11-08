import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/welcome',
    name: 'Home',
    component: Home
  },
  {
    path: '/welcome/pumps',
    name: 'Pumps',
    component: () => import('../views/Pumps.vue')
  },
  {
    path: '/welcome/company',
    name: 'Company',
    component: () => import('../views/Company.vue')
  },
  {
    path: '/welcome/employers',
    name: 'Employers',
    component: () => import('../views/Employers.vue')
  },
  {
    path: '/welcome/settings',
    name: 'Settings',
    component: () => import('../views/Settings.vue')
  },
  {
    path: '/welcome/end',
    name: 'End',
    component: () => import('../views/End.vue')
  },
  {
    path: '/welcome/about',
    name: 'About',
    component: () => import('../views/About.vue')
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
