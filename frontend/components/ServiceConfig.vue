<template>
  <v-form ref="form" v-model="valid" lazy-validation>
    <v-text-field
      v-model="quantity"
      label="Тираж"
      required
      :rules="requiredRule"
      @keypress="filterNum"
    >
      <template v-slot:append>{{
        declOfNum(quantity, ["экземпляр", "экземпляра", "экземпляров"])
      }}</template>
    </v-text-field>

    <v-select
      v-model="paper"
      :items="paperItems"
      label="Бумага"
    ></v-select>
    <v-combobox
      v-model="paints"
      :items="paintsItems"
      label="Красочность"
      @keypress="filterNum"
    ></v-combobox>

    <v-row no-gutters>
      <v-col cols="12" md="2" style="align-self: center" class="mr-2">Размеры:</v-col>
      <v-col xs="5" sm="3">
        <v-text-field v-model="width" label="Width" required :rules="requiredRule" @keypress="filterNum"> </v-text-field>
      </v-col>
      <span style="align-self: center" class="mx-2">x</span>
      <v-col xs="5" sm="3">
        <v-text-field v-model="height" label="Height" required :rules="requiredRule" @keypress="filterNum"></v-text-field>
      </v-col>
      <v-col cols="12" sm="4" md="2" :class="(!$vuetify.breakpoint.xs)?'ml-2':''">
        <v-select v-model="size" :items="sizeStandarts" outlined></v-select>
      </v-col>
    </v-row>

    <!-- <v-btn :disabled="!valid" color="success" class="mr-4" @click="validate">
      Validate
    </v-btn> -->
  </v-form>
</template>

<script>
export default {
  data() {
    return {
      requiredRule: [(v) => !!v || "Это поле обязательно"],

      quantity: 100,
      paper: null,
      paperItems: ["Офсетная, 100 г/м", "Test", "Test 2"],
      paints: null,
      paintsItems: [1, 2, 4],
      width: null,
      height: null,
      size: "Custom",
      sizeStandarts: ["Custom", "A0", "A1", "A2", "A3", "A4", "A5"],
    };
  },
  methods: {
    declOfNum: function (number, words) {
      return words[
        number % 100 > 4 && number % 100 < 20
          ? 2
          : [2, 0, 1, 1, 1, 2][number % 10 < 5 ? Math.abs(number) % 10 : 5]
      ];
    },
    filterNum: function (evt) {
      evt = evt ? evt : window.event;
      let expect = evt.target.value.toString() + evt.key.toString();

      if (!/^[-+]?[0-9]*\.?[0-9]*$/.test(expect)) {
        evt.preventDefault();
      } else {
        return true;
      }
    },
  },
};
</script>

<style>
</style>