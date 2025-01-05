// resources/js/router.js

import { createRouter, createWebHistory } from "vue-router";
import HelloWorld from "./components/HelloWorld.vue";
import BookList from "./components/BookList.vue";
import Registro from "./components/Registro.vue";
import Login from "./components/Login.vue";
import Profile from "./components/Profile.vue";

// Definir las rutas
const routes = [
    {
        path: "/books",
        component: BookList,
    },
    {
        path: "/hello",
        component: HelloWorld,
    },
    {
        path: "/registro",
        name: 'Registro',
        component: Registro,
    },
    {
        path: "/login",
        name: 'Login',
        component: Login,
    },
    {
        path: "/profile",
        name: 'Profile',
        component: Profile,
        meta: {requiresAuth: true}
    }
];

// Crear el router
const router = createRouter({
    history: createWebHistory(),
    routes, // Ruta
});

export default router;
