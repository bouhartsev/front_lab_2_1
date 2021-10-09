<template>
    <v-app-bar app extended prominent elevate-on-scroll>
        <!--   shrink-on-scroll extended prominent scroll-off-screen -->
        <v-app-bar-nav-icon @click="$parent.$parent.$refs.nav.burger_click()"></v-app-bar-nav-icon>

        <!-- <v-app-bar-title>Test</v-app-bar-title> -->
        <router-link :to="{ name: 'Home' }">
                <v-img src="https://picsum.photos/200/100"></v-img>
                
        </router-link>

        <v-btn :to="{ name: 'Home' }">
            Главная
        </v-btn>

        <v-btn :to="{ name: 'Services' }">
            Услуги
        </v-btn>

        <v-btn :to="{ name: 'Contacts' }">
            Контакты
        </v-btn>

        <v-btn :to="{ name: 'About' }">
            О нас
        </v-btn>

        <!-- <v-tooltip bottom>
            <template v-slot:activator="{ on, attrs }">
                <v-btn icon :to="{ name: 'About' }" exact v-bind="attrs" v-on="on">
                    <v-icon>help</v-icon>
                </v-btn>
            </template>
            <span>About</span>
        </v-tooltip> -->

        <v-spacer></v-spacer>

        <v-btn :to="{ name: 'Order' }">
            Заказ
        </v-btn>

        <!-- hide on scroll -->
        <template v-slot:extension>
            <router-link :to="{ name: 'Home' }">
                    <h1>Паладин</h1>
                    <strong>оперативная полиграфия</strong>
            </router-link>
            <v-breadcrumbs
                :items="[{text: 'Главная'}, {text: 'Новости'}, {text: 'Открытие'}]"
                large
            ></v-breadcrumbs>
            <v-spacer></v-spacer>

            <a href="tel:8495290-31-21">8 (495) 290-31-21</a>
            <v-btn link>Обратный звонок</v-btn>
        </template>
    </v-app-bar>
</template>

<script>
export default {
    name: 'Menu',

}
</script>

<style>

</style>