// export const state = () => {}

// export const mutations = {}

// export const actions = {}

// export const getters = {}

import axios from 'axios';

const state = () => ({
  services: null,
});

const getters = {
  services: (state) => {
    console.log('get services', state.services);
    return state.services;
  },
};

const mutations = {
  SET_SERVICES: (state, payload) => {
    state.services = payload;
  },

  ADD_SERVICE: (state, payload) => {
    state.services.push(payload);
  },
};

const actions = {
  GET_SERVICES: async (context, payload) => {
    let {data} = await axios.get('/api/services.json');
    context.commit('SET_SERVICES', data);
    console.log(payload); //temp - never used
  },

  // SAVE_SERVICE: async (context, payload) => {
  //   let {data} = await axios.post('/api/services.json');
  //   context.commit('ADD_TODO', payload);
  //   console.log(data); //temp - never used
  // },
};

export default {
  state,
  getters,
  mutations,
  actions,
};