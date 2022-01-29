<template>
  <div>
    <h2>Заголовок формируется в процессе выбора характеристик</h2>
    <v-layout row>
      <v-flex
        xs12
        sm6
        md4
        class="px-2 py-2"
        style="box-sizing: border-box"
        v-for="(item, i) in services"
        :key="i"
      >
        <!-- :min-height="minimal ? 50 : 200" -->
        <v-lazy :options="{ threshold: 0.2 }">
          <v-card
            link
            :to="{
              name: 'services-slug',
              params: { id: item.id, slug: item.id },
            }"
          >
            <v-img
              v-if="Array.isArray(item.image_full)"
              :src="item.image_full[0]"
              :lazy-src="item.image_preview"
              aspect-ratio="1.5"
            />
            <v-img
              v-else
              :src="item.image_full"
              :lazy-src="item.image_preview"
              aspect-ratio="1.5"
            />
            <!-- <template #placeholder>
						<v-img :src="item.image_preview"></v-img>
					</template> -->
            <!--for artists-->
            <v-card-title>{{ item.name }}</v-card-title>
            <v-card-subtitle v-if="item.shortDesc">{{
              item.shortDesc
            }}</v-card-subtitle>
            <v-card-text>
              <p v-if="item.quantity"><b>Тираж: </b> {{ item.quantity }}</p>
              <p v-if="item.paper"><b>Бумага: </b> {{ item.paper }}</p>
              <p v-if="item.paints"><b>Красочность: </b> {{ item.paints }}</p>
              <p v-if="item.size">
                <b>Размеры: </b> {{ item.width + " x " + item.height }} мм
                <span>{{ item.size }}</span>
              </p>
            </v-card-text>
            <v-card-actions>
              <span
                :data-price-old="item.price_old"
                data-currency="руб."
                class="v-card__price"
                >{{ item.price }}</span
              >
              <v-spacer></v-spacer>
              <v-btn :to="{ name: 'order' }" class="btnToOrder"
                >Добавить в заказ</v-btn
              >
            </v-card-actions>
            <!--for tracks-->
            <!-- <v-card-subtitle v-if="item.artistsservices"
                ><router-link
                  title="Go to artist"
                  v-for="(artist, index) in item.artistsservices"
                  :key="index"
                  :to="'/artists/' + artist.id"
                  >{{ get_artist(artist)
                  }}<span v-if="index != item.artistsservices.length - 1"
                    >,
                  </span></router-link
                ></v-card-subtitle>-->
          </v-card>
        </v-lazy>
      </v-flex>
    </v-layout>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  head() {
    return {
      title: "Услуги",
    };
  },
  // data: () => ({
  //   services: {
  //     key0: { id: 0, key1: 123 },
  //     key0_0: { id: 1, key2: 321 },
  //     key0_1: { id: 1, key2: 321 },
  //     key0_2: { id: 1, key2: 321 },
  //     key0_3: { id: 1, key2: 321 },
  //     key0_4: { id: 1, key2: 321 },
  //     key0_5: { id: 1, key2: 321 },
  //     key0_6: { id: 1, key2: 321 },
  //     key0_7: { id: 1, key2: 321 },
  //     key0_8: { id: 1, key2: 321 },
  //   },
  // }),
  computed: {
    ...mapGetters(["services"]),
    // Другие вычисляемые свойства
  },
  created() {
    this.$store.dispatch("GET_SERVICES", "action GET_SERVICES");
  },
};
</script>

<style>
.v-card__title {
  font-size: 1.1rem;
  word-break: keep-all;
}

.v-card__subtitle,
.v-card__text {
  font-size: 0.7rem;
}

.v-card__text p {
  margin: 0;
}
</style>