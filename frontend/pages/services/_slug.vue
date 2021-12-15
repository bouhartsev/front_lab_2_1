<template>
  <div>
    Temp service
    <br />
    URL: {{ this.$nuxt.context.params.slug }}
    <br />
    ID (необязательный, должен условно выводиться): {{ this.$nuxt.context.params.id }}
    <br />
    {{ this.$route.matched.length }}
    <p>Тут будет крутой дизайн и все данные</p>
    <v-rating
      empty-icon="mdi-star-outline"
      full-icon="mdi-star"
      half-icon="mdi-star"
      hover
      length="5"
      size="32"
      :value="3"
    ></v-rating>
  </div>
</template>

<script>
export default {

};
</script>

<style>
</style>