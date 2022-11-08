import Vue from "vue";
import VueRouter from "vue-router";
import store from "./store.js";

Vue.use(VueRouter);
store.dispatch("autologin");

const authGuard = (to, from, next) => {
    if (store.getters.isAuth) {
        next();
    } else {
        next({ name: "login" });
    }
};

const notAuthGuard = (to, from, next) => {
    if (!store.getters.isAuth) {
        next();
    } else {
        next({ name: "protected" });
    }
};

const routes = [
    {
        path: "/admin/login",
        name: "login",
        component: () => import("./views/Login.vue"),
        beforeEnter: notAuthGuard,
    },
    {
        path: "/admin",
        name: "administrator",
        component: () => import("./views/Dashboard.vue"),
        beforeEnter: authGuard,
        redirect: "/admin/home",
        children: [
            {
                path: "/admin/home",
                name: "Home",
                component: () => import("./views/Home.vue"),
                beforeEnter: authGuard,
            },
            {
                path: "/admin/pumps",
                name: "Pumps",
                component: () => import("./views/Pumps.vue"),
                beforeEnter: authGuard,
            },
            {
                path: "/admin/company",
                name: "Company",
                component: () => import("./views/Company.vue"),
                beforeEnter: authGuard,
            },
            {
                path: "/admin/managers",
                name: "Managers",
                component: () => import("./views/Managers.vue"),
                beforeEnter: authGuard,
            },
            {
                path: "/admin/employers",
                name: "Employers",
                component: () => import("./views/Employers.vue"),
                beforeEnter: authGuard,
            },
            {
                path: "/admin/settings",
                name: "Settings",
                component: () => import("./views/Settings.vue"),
                beforeEnter: authGuard,
            },
        ],
    },

    // {
    //   path: '/admin/end',
    //   name: 'End',
    //   component: () => import('../views/End.vue')
    // },
    // {
    //   path: '/admin/about',
    //   name: 'About',
    //   component: () => import('../views/About.vue')
    // },
    // {
    //   path: '/admin',
    //   name: 'Home',
    //   component: Home
    // },
];
const router = new VueRouter({
    mode: "history",
    // base: process.env.BASE_URL,
    routes,
});
export default router;
