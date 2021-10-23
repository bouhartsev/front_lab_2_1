<template>
  <v-app>
    <Menu />

    <v-main>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
import Menu from "./components/Menu";

export default {
  name: "App",

  components: {
    Menu,
  },

  data: () => ({
    //
  }),
  created() {
    this.$store.dispatch('GET_SERVICES', 'action GET_SERVICES');
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&family=Marck+Script&family=Poiret+One&family=Raleway&display=swap");

h1 {
  font-size: 1em;
  font-family: "Jura", sans-serif;
}

h2 {
  /* font-family: 'Jura', sans-serif; */
}

p {
  /*  */
}

blockquote {
  font-family: "Raleway", sans-serif;
  padding-left: 25px;
  margin-left: 25px;

  border-left: 2px black solid;
}

cite {
  margin-top: 10px;
  display: block;
  font-weight: 600;
}

/* font-family: 'Poiret One', cursive; */

</style>