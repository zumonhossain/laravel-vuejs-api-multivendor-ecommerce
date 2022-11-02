import { createRouter, createWebHashHistory } from "vue-router";
import Index from "../views/pages/Index.vue";

const routes = [

    { path: "/", component: Index },

];

const router = createRouter({
  history: createWebHashHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;
