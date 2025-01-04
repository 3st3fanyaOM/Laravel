// resources/js/router.js

import { createRouter, createWebHistory } from "vue-router";
import HelloWorld from "./components/HelloWorld.vue";
import BookList from "./components/BookList.vue";

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
];

// Crear el router
const router = createRouter({
    history: createWebHistory(),
    routes, // Ruta
});

export default router;
