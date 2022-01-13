<template>
  <v-row>
    <v-col sm="3"> <p style="position: fixed">Фильтры</p></v-col>
    <v-col><nuxt-child /></v-col>
    
    
  </v-row>
</template>

<style>
h2 {
  margin-bottom: 10px;
}
.v-card__price {
  position: relative;

  color: red;
  white-space: nowrap;
}
.v-card__price::before {
  position: absolute;
  top: -1.2em;

  content: attr(data-price-old) " " attr(data-currency);
  color: initial;
  opacity: 0.7;
  text-decoration: line-through;
  font-size: 0.8em;
  white-space: nowrap;
}
.v-card__price::after {
  content: " " attr(data-currency);
}

.btnToOrder {
  max-width: 40%;
}
.btnToOrder > * {
  width: 100%;
  white-space: break-spaces;
}

.btnToOrder * {
  font-size: 0.5rem;
  white-space: initial;
  text-align: center;
}
</style>