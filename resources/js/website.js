require("./bootstrap");

window.Vue = require("vue");

import axios from "axios";
import VueAxios from "vue-axios";

Vue.use(VueAxios, axios);

Vue.component(
    "contact-us-form",
    require("./components/ContactForm.vue").default
);

const app = new Vue({
    el: "#app"
});
