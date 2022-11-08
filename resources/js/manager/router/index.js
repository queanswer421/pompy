import Vue from "vue";
import Router from "vue-router";
import Home from "../views/Home.vue";

Vue.use(Router);

const routes = [
    {
        path: "/managers",
        name: "login",
        component: () => import("../views/auth/Login.vue"),
    },
    {
        path: '/register',
        name: 'register',
        component: () => import('../views/auth/Register.vue')
    },
    // {
    //     path: '/reset-password',
    //     name: 'reset-password',
    //     component: () => import('../views/auth/ResetPassword.vue')
    // },
    // {
    //     path: "/managers",
    //     name: "managers",
    //     component: Home,
    // },
    // {
    //     path: "/managers/home",
    //     name: "dashboard",
    //     component: () => import("../views/Dashboard.vue"),
    // },
    // {
    //     path: '/home',
    //     name: 'home',
    //     component: Home,
    //     children: [
    //         {
    //             path: '',
    //             name: 'dashboard',
    //             component: () => import('../views/Dashboard.vue')
    //         },
    //         // {
    //         //     path: 'categories',
    //         //     name: 'categories',
    //         //     component: () => import('../views/Categories.vue')
    //         // }
    //     ]
    // },
    // {
    //     path: '/login',
    //     name: 'login',
    //     component: () => import('../views/auth/Login.vue')
    // },

];
const router = new Router({
    mode: "history",
    routes: routes,
});
export default router;
