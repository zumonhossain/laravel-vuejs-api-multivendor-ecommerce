
<script setup>
    import { HeaderPart, NavBar, CartSideBar, MobileMenu, FooterPart, LoginModal } from "@/components";
</script>

<template>
    <div>
        <div class="backdrop"></div>
        <a class="backtop fas fa-arrow-up" href="#"></a>

        <!-- header part -->
        <HeaderPart/>

        <!-- navBar part -->
        <NavBar/>

        <!-- cart-sidebar part -->
        <CartSideBar/>

        <!-- MobileMenu part -->
        <MobileMenu/>

        <router-view></router-view>

        <!-- footer part -->
        <FooterPart/>
        
    </div>
</template>