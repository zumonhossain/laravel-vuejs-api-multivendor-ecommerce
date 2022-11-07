import { createRouter, createWebHistory } from "vue-router";
import Index from "../views/pages/Index.vue";
import { UserLogin } from "@/views/auth";
import { UserRegister } from "@/views/auth";

const routes = [

    {
      path: "/",
      name:"index.page",
      component: Index,
      meta: { title: "Home" },
    },

    { path: "/auth/login",
      name:"user.login", 
      component: UserLogin,
      meta: { title: "Login" },
    },

    { path: "/auth/register", 
      name:"user.register", 
      component: UserRegister,
      meta: { title: "Register" },
    },

];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});


const DEFAULT_TITLE = "404";

router.beforeEach((to, from, next) => {

  document.title = to.meta.title || DEFAULT_TITLE;
  next();

});


export default router;
