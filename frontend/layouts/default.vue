<template>
  <v-app>
    <Menu />

    <v-main>
      <v-container fluid>
        <Nuxt />
      </v-container>
    </v-main>
    <v-footer padless class="text-center">
      <v-col cols="12">
        {{ new Date().getFullYear() }} &copy;
        <strong><a href="//bouhartsev.top/" target="_blank">Matvey Bouhartsev</a></strong>
      </v-col>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  name: "DefaultLayout",
};
</script>
