import router from "./router";
import store from "./store";
require("./bootstrap");
import common from "./common";
window.Vue = require("vue");

Vue.mixin(common);

require("es6-object-assign").polyfill();
require("es6-promise").polyfill();

import VueProgressBar from "vue-progressbar";
Vue.use(VueProgressBar, {
    color: "rgb(143, 255, 199)",
    failedColor: "red",
    thickness: "4px"
});

import VueImg from "v-img";
Vue.use(VueImg);

import * as VueGoogleMaps from "vue2-google-maps";
Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyA3FHVkk6T4HeN-tzlTgOdksqechEWGWEc",
        libraries: "places"
    },
    installComponents: true
});

import Paginate from "vuejs-paginate";
Vue.component("paginate", Paginate);

import "vue-toast-notification/dist/theme-default.css";
import VueToast from "vue-toast-notification";
Vue.use(VueToast, {
    // One of options
    position: "top-right"
});

const files = require.context("./", true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
            .split("/")
            .pop()
            .split(".")[0],
        files(key).default
    )
);

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: "#app",
    router,
    store: store
});
