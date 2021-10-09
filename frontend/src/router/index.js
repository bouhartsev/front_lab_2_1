import Vue from "vue";
import VueRouter from "vue-router";

import Home from "../views/Home.vue";
// import About from "../views/About.vue";
// import Search from "../views/Search.vue";

// import Tracks from "../views/Tracks.vue";
// import Track from "../views/Track.vue";
// import Artists from "../views/Artists.vue";
// import Artist from "../views/Artist.vue";
// import Releases from "../views/Releases.vue";
// import Release from "../views/Release.vue";
// import Genres from "../views/Genres.vue";
// import Genre from "../views/Genre.vue";
// import Playlists from "../views/Playlists.vue";
// import Playlist from "../views/Playlist.vue";

// import Error404 from "../views/Error404.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
        meta: {
            title: 'Главная',
        }
    },
    // {
    //     path: "/about",
    //     name: "About",
    //     component: About,
    // },
    // {
    //     path: "/search",
    //     name: "Search",
    //     component: Search,
    // },

    // {
    //     path: "/tracks",
    //     component: {
    //         render: (h) => h("router-view"),
    //     },
    //     children: [
    //         {
    //             path:"",
    //             name: "Tracks",
    //             component: Tracks,
    //         },
    //         {
    //             path: "/tracks/:id",
    //             name: "Track",
    //             component: Track,
    //         },
    //     ]
    // },

    // {
    //     path: "/page-not-found",
    //     alias: '*',
    //     component: Error404,
    // }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes,
    scrollBehavior(to, from, savedPosition) {
      let temp = to+from+savedPosition; // временный фикс линтера - исправить!
      return { x: 0, y: temp*0 }
    }
});

router.beforeEach(async (to, from, next) => {
    //const { title } = to.meta;
    let title = '';
    if (to.meta.title) title = to.meta.title;
    const brand = "Паладин";
    document.title = `${title ? title + " | " : ""}${brand}`;
    next();
});

export default router;