<template>
    <v-app-bar app elevate-on-scroll shrink-on-scroll v-scroll="onScroll" height="300px" extension-height="0">

        <!-- {{ window.pageYOffset }} -->
        <!-- v-scroll="onScroll" -->
        <!--   shrink-on-scroll extended prominent scroll-off-screen hide-on-scroll-->
        <!-- <v-app-bar-nav-icon @click="$parent.$parent.$refs.nav.burger_click()"></v-app-bar-nav-icon> -->

        <!-- <v-app-bar-title>Test</v-app-bar-title> -->
        <router-link :to="{ name: 'Home' }">
                <v-img src="https://picsum.photos/200/50"></v-img>
                
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
        <template #extension>
            <v-slide-y-transition>
                <v-row v-show="!isScrolled">
                    <v-col sm="2">
                        <router-link :to="{ name: 'Home' }">
                                <h1>Паладин</h1>
                                <strong>оперативная полиграфия</strong>
                        </router-link>
                    </v-col>
                    <v-col>
                        <v-row>
                            <v-breadcrumbs
                                :items="[{text: 'Главная'}, {text: 'Новости'}, {text: 'Открытие'}]"
                                large
                            ></v-breadcrumbs>
                            <v-spacer></v-spacer>
                            <span>//Поиск</span>
                        </v-row>
                    </v-col>
                    <v-col sm="3">
                        <a href="tel:8495290-31-21">8 (495) 290-31-21</a>
                        <v-btn link>Обратный звонок</v-btn>
                    </v-col>
                </v-row>
            </v-slide-y-transition>
        </template>
    </v-app-bar>
</template>

<script>
export default {
    name: 'Menu',
    data: () => ({
      isScrolled: false,
    }),
    // computed: {
    //     // геттер вычисляемого значения
    //     isScrolled: function () {
    //     // `this` указывает на экземпляр vm
    //         console.log(document.scrollTop);
    //         return document.scrollTop;
    //     }
    // },
    methods: {
      onScroll (e) {
        this.isScrolled = (e.target.scrollingElement.scrollTop<50)?false:true;
      },
    },
}
</script>

<style>
.v-toolbar__extension, .v-toolbar__extension>* {
    align-items: flex-end;
}
</style>