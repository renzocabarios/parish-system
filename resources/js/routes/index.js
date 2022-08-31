import { createWebHistory, createRouter } from "vue-router";
import LoginView from "../views/LoginView.vue";
import RegisterView from "../views/RegisterView.vue";

const routes = [
    {
        path: "/login",
        name: "Login",
        component: LoginView,
    },
    {
        path: "/register",
        name: "register",
        component: RegisterView,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
