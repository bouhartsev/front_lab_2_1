<template>
  <v-app>
    <Menu />

    <v-main>
      <p>Test</p>
    </v-main>
  </v-app>
</template>

<script>
import Menu from "./components/Menu";

export default {
  name: "App",

  components: {
    Menu
  },

  data: () => ({
    // 
  }),
};
</script>
