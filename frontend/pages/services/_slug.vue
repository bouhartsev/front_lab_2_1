<template>
  <div v-if="service">
    <h2>{{ service.name }}</h2>

    <v-responsive aspect-ratio="1.5" class="service-image">
      <v-carousel v-if="Array.isArray(service.image_full)" height="100%">
        <v-carousel-item v-for="(photo, i) in service.image_full" :key="i">
          <v-img :src="photo" />
        </v-carousel-item>
      </v-carousel>
      <v-img v-else :src="service.image_full" :lazy-src="item.image_preview" />
    </v-responsive>

    <p>{{ service.desc }}</p>

    <div class="d-flex flex-row price-n-order">
      <span
        :data-price-old="service.price_old"
        data-currency="руб."
        class="v-card__price"
        >{{ service.price }}</span
      >
      <v-spacer></v-spacer>
      <v-btn :to="{ name: 'order' }" class="btnToOrder">Добавить в заказ</v-btn>
    </div>

    <!-- form -->
    <!-- leave the comment -->
    <!-- comments -->
    <!-- recommended -->

    <br>
    <br><br>
    <p>TEMP DEBUG:</p>

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
    ></v-rating>
    {{ service }}
  </div>
  <div v-else>Test</div>
</template>

<script>
export default {
  computed: {
    service: function () {
      let id = this.$nuxt.context.params.id;

      id = Number(this.$nuxt.context.params.slug);

      if (id) return this.$store.getters.serviceById(id);
      else
        return this.$store.getters.serviceBySlug(
          this.$nuxt.context.params.slug
        );
    },
  },
  created() {
    this.$store.dispatch("GET_SERVICE", "action GET_SERVICE");
  },
};
</script>

<style>
.service-image {
  float: left;
  width: 400px;
  margin: 10px;
  margin-left: 0;
}

.price-n-order {
  margin-top: 20px;
}
</style>