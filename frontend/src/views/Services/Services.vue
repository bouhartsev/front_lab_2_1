<template>
  <v-row
    ><v-col sm="3"> Фильтры </v-col>
    <v-col>
      <v-layout row>
        <v-flex
          xs12
          sm6
          md4
          class="px-9 py-2"
          style="box-sizing: border-box"
          v-for="(item, i) in data"
          :key="i"
        >
		<!-- :min-height="minimal ? 50 : 200" -->
          <v-lazy
            
            :options="{ threshold: 0.2 }"
          >
            <v-card link :to="'/' + 'services' + '/' + item.id" class="">
              <!-- <v-img v-if="!minimal" :src="get_poster(image_src(item), image_placeholder)" aspect-ratio="1.5"> -->
              <!--                            <template #placeholder>-->
              <!--                                <v-img :src="'/static/img/placeholder/'+image_placeholder"></v-img>-->
              <!--                            </template>-->
              <!-- </v-img> -->
              <!--for artists-->
              <v-card-title v-if="item.pseudonym">{{
                item.pseudonym
              }}</v-card-title>
              <v-card-title v-else-if="item.name">{{ item.name }}</v-card-title>
              <!--for artists-->
              <v-card-subtitle v-if="item.pseudonym">{{
                item.name
              }}</v-card-subtitle>
              <!--for releases-->
              <v-card-subtitle v-if="'test' == 'releases' && item.tracks">{{
                item.tracks.length == 1 ? "single" : "album"
              }}</v-card-subtitle>
              <!--for tracks-->
              <!-- <v-card-subtitle v-if="item.artistsData"
                ><router-link
                  title="Go to artist"
                  v-for="(artist, index) in item.artistsData"
                  :key="index"
                  :to="'/artists/' + artist.id"
                  >{{ get_artist(artist)
                  }}<span v-if="index != item.artistsData.length - 1"
                    >,
                  </span></router-link
                ></v-card-subtitle -->
              >
            </v-card>
          </v-lazy>
        </v-flex>
      </v-layout>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: "Services",
  data: () => ({
    data: {
		'key0': {id: 0, 'key1': 123},
		'key0_0': {id: 1, 'key2': 321},
		'key0_1': {id: 1, 'key2': 321},
		'key0_2': {id: 1, 'key2': 321},
		'key0_3': {id: 1, 'key2': 321},
		'key0_4': {id: 1, 'key2': 321},
		'key0_5': {id: 1, 'key2': 321},
		'key0_6': {id: 1, 'key2': 321},
		'key0_7': {id: 1, 'key2': 321},
		'key0_8': {id: 1, 'key2': 321},
    },
  }),
};
</script>

<style>
</style>