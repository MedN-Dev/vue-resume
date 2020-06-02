import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    cv: []
  },
  mutations: {
    setCV(state, value) {
      state.cv = value;
      document.title = state.cv["firstName"] + " " + state.cv["lastName"];
    }
  },
  getters: {
    getCV: state => state.cv,
    getSection: state => section => {
      return state.cv[section];
    },
    getName: state => state.cv["firstName"] + " " + state.cv["lastName"],
    displaySection: state => query => {
      return state.cv[query];
    }
  },
  actions: {
    loadCV({ commit }) {
      let vitae = require("@/assets/cv.json");
      commit("setCV", vitae);
    }
  }
});
