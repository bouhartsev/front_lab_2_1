<template>
  <v-container fluid style="height: 1500px">
    <v-carousel
      cycle
      height="400"
      hide-delimiter-background
      show-arrows-on-hover
      delimiter-icon="mdi-minus"
    >
      <v-carousel-item v-for="(slide, i) in slides" :key="i">
        <v-sheet :color="colors[i]" height="100%">
          <v-row class="fill-height" align="center" justify="center">
            <div class="text-h2">{{ slide }} Slide</div>
          </v-row>
        </v-sheet>
      </v-carousel-item>
    </v-carousel>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, sit tenetur
      sunt dolorum perferendis unde labore quis iure cupiditate fugit repellat
      cumque eveniet necessitatibus voluptatibus nostrum enim rem temporibus!
      Nesciunt? Nulla minus quaerat dolorum repellendus aspernatur cum quia
      ipsam explicabo autem molestiae! Eligendi culpa distinctio illo
      perspiciatis nisi est in enim ab ea quisquam architecto aliquam
      necessitatibus, iure doloremque totam. Sint, nisi quae in eligendi amet
      sapiente id voluptas impedit praesentium dolorem, eveniet necessitatibus,
      repudiandae facilis omnis harum modi consectetur iure vitae. Nulla
      delectus impedit nesciunt cum repudiandae facilis eligendi. Maxime atque
      minus explicabo soluta optio, eos corrupti laudantium, suscipit officiis
      incidunt veniam, autem distinctio dolore qui ab quia voluptates quaerat
      ex? Vero expedita aspernatur quas ratione possimus neque consequuntur.
      Quam aliquam recusandae voluptatem quisquam laborum. Veritatis ullam
      delectus ipsa excepturi assumenda distinctio exercitationem. Nihil ducimus
      odio, atque laboriosam quaerat corrupti odit distinctio repellendus, sunt
      non praesentium nulla ipsa deserunt?
    </p>
  </v-container>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      colors: [
        "indigo",
        "warning",
        "pink darken-2",
        "red lighten-1",
        "deep-purple accent-4",
      ],
      slides: ["First", "Second", "Third", "Fourth", "Fifth"],
    };
  },
};
</script>

<style>
</style>