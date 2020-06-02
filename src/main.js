import Vue from "vue";
import App from "./App.vue";
import "./registerServiceWorker";
import store from "./store";

import VueI18n from "vue-i18n";
import { translations } from "@/assets/lang/index.js";

import "./assets/css/main.css";

Vue.use(VueI18n);

const i18n = new VueI18n({
  locale: "en",
  fallbackLocale: "en",
  messages: translations
});

Vue.config.productionTip = false;

new Vue({
  store,
  i18n,
  render: h => h(App)
}).$mount("#app");
