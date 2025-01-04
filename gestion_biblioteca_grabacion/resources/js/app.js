import "./bootstrap";
import { createApp } from "vue";
import HelloWorld from "./components/HelloWorld.vue";
import BookList from "./components/BookList.vue";

import router from "./router";

//Crear app

createApp(HelloWorld).use(router).mount("#app");
