  
<template>
    <v-text-field
        hide-details
        label="Search"
        @keyup.enter="search()"
        class="search_field"
        :autofocus="autofocus"
        :value="search_value"
        @input="updateValue($event)"
        clearable
    ></v-text-field>
<!--    append-outer-icon="mdi-magnify"-->
<!--    @click:append-outer="search()"-->
</template>

<script>
export default {
    name: "Search",
    props: {
        autofocus: Boolean,
        search_value: String,
    },
    methods: {
        search: function() {
            if (this.search_value!='') {
                if (this.$route.query['query']!=this.search_value)
                    this.$router.push({path: '/search', query: {query: this.search_value}});
            }
        },
        updateValue: function (value) {
            this.$emit('update:search_value', value);
        }
    },
}
</script>

<style scoped>
.search_field {
    margin: 1em !important;
}
</style>