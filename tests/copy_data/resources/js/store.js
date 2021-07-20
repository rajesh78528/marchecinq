import Vue from "vue";
import Vuex from "vuex";
Vue.use(Vuex);
const store = new Vuex.Store({
    state: {
        url: "http://18.196.41.77",
        authUser: window.authUser,
        setting: window.setting,
        load: false,
        firebasetoken: localStorage.getItem("firebasetoken") || null,
        cartData: [],
        locale: window.locale,
        translations: window.translations
    },

    /*All getters*/
    getters: {
        isLoggedIn(state) {
            if (_.isEmpty(state.authUser)) {
                return false;
            } else {
                return true;
            }
        },
        loggedInUser(state) {
            return state.authUser;
        },
        load(state) {
            return state.load;
        }
    },

    /*all mutations*/
    mutations: {
        getCartData(state, data) {
            state.cartData = data;
        }
    },

    /*all actions*/
    actions: {
        update({ commit }, data) {
            commit("update", data);
        },
        user({ commit }, user) {
            commit("user", user);
        }
    }
});

export default store;
