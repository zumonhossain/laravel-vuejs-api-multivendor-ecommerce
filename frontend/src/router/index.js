import { createRouter, createWebHistory } from "vue-router";
import { Index, Shop, SingleProduct, Checkout } from "@/views/pages";
import { SellerPage, SellerStore, SellerApply } from "@/views/pages/seller";
import { UserLogin, UserRegister } from "@/views/auth";
import { MyProfile, MyOrderList, MyWishlist } from "@/views/user";

const routes = [
    {
      path: "/",
      name:"index.page",
      component: Index,
      meta: { title: "Home" },
    },

    {
      path: "/shop",
      name:"shop.page",
      component: Shop,
      meta: { title: "Shop" },
    },

    {
      path: "/product",
      name:"product.details",
      component: SingleProduct,
      meta: { title: "Product Details" },
    },

    {
      path: "/checkout",
      name:"checkout.page",
      component: Checkout,
      meta: { title: "Checkout" },
    },

    {
      path: "/seller-list",
      name:"seller.page",
      component: SellerPage,
      meta: { title: "Seller-List" },
    },

    {
      path: "/seller-store",
      name:"seller.store",
      component: SellerStore,
      meta: { title: "Seller-Store" },
    },

    {
      path: "/seller-apply",
      name:"seller.apply",
      component: SellerApply,
      meta: { title: "Seller-Apply" },
    },



    //User Routes
    { 
      path: "/auth/login",
      name:"user.login", 
      component: UserLogin,
      meta: { title: "Login" },
    },

    { 
      path: "/auth/register", 
      name:"user.register", 
      component: UserRegister,
      meta: { title: "Register" },
    },

    { 
      path: "/my/profile", 
      name:"user.profile", 
      component: MyProfile,
      meta: { title: "Profile" },
    },

    { 
      path: "/my/orders", 
      name:"user.orders", 
      component: MyOrderList,
      meta: { title: "Orders" },
    },

    { 
      path: "/my/wishlist", 
      name:"user.wishlist", 
      component: MyWishlist,
      meta: { title: "Wishlist" },
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
