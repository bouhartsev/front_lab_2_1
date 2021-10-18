import Vue from 'vue';
import Vuex from 'vuex';
import services from './modules/services';

Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {},
  getters: {},
  mutations: {},
  actions: {},
  modules: {
    services,
  },
});