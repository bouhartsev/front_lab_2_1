<template>
  <div>
    Temp service
    <br />
    URL: {{ this.$nuxt.context.params.slug }}
    <br />
    ID (необязательный, должен условно выводиться):
    {{ this.$nuxt.context.params.id }}
    <br />
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
    {{ service }}
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      service: 0,
    };
  },
  created() {
    this.$store.dispatch("GET_SERVICE", "action GET_SERVICE");

    let id = this.$nuxt.context.params.id;

    id = Number(this.$nuxt.context.params.slug);

    if (id) this.service = this.$store.getters.serviceById(id);
    else
      this.service = this.$store.getters.serviceBySlug(
        this.$nuxt.context.params.slug
      );
    console.log(this.service);
  },
};
</script>

<style>
</style>