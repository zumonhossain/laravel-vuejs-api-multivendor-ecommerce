import { createApp } from 'vue';
import { createPinia } from 'pinia';
import './style.css';
import './template.js';

import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'

import router from "./router";
import App from './App.vue'

import piniaPluginPersistedstate from 'pinia-plugin-persistedstate'




const pinia = createPinia()
pinia.use(piniaPluginPersistedstate);

const app = createApp(App);
    app.use(router);
    app.use(pinia);
    app.use(ElementPlus);
    app.mount('#app');
