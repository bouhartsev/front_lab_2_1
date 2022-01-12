  
<template>
    <v-text-field
        hide-details
        placeholder="Поиск"
        @keyup.enter="search()"
        prepend-inner-icon="mdi-magnify"
        @click:prepend-inner="search()"
        class="search_field"
        v-model="search_value"
        clearable
    ></v-text-field>
<!--    append-outer-icon="mdi-magnify"-->
<!--    @click:append-outer="search()"-->
</template>

<script>
export default {
    props: {
        search_value: String,
    },
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

<style scoped>
.search_field {
    margin: 1em !important;
    width: 100px;
}
</style>