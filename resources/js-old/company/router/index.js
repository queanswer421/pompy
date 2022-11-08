import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/admin',
    name: 'Home',
    component: Home
  },
  {
    path: '/admin/pumps',
    name: 'Pumps',
    component: () => import('../views/Pumps.vue')
  },
  {
    path: '/admin/company',
    name: 'Company',
    component: () => import('../views/Company.vue')
  },
  {
    path: '/admin/employers',
    name: 'Employers',
    component: () => import('../views/Employers.vue')
  },
  {
    path: '/admin/settings',
    name: 'Settings',
    component: () => import('../views/Settings.vue')
  },
  {
    path: '/admin/end',
    name: 'End',
    component: () => import('../views/End.vue')
  },
  {
    path: '/admin/about',
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
