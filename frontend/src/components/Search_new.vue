<template>
    <v-text-field
        hide-details
        placeholder="Поиск"
        @keyup.enter="search()"
        class="search_field"
        clearable
        prepend-inner-icon="mdi-magnify"
        @click:prepend-inner="search()"
        v-model="search_value"
    ></v-text-field>
    <!-- label="Поиск"
        solo -->
</template>

<script>
export default {
    name: "Search",
    data: () => ({
      search_value: '',
    }),
    methods: {
        search: function() {
            if (this.search_value!='') {
                if (this.$route.query['query']!=this.search_value)
                    this.$router.push({path: '/search', query: {query: this.search_value}});
            }
        },
    },
}
</script>