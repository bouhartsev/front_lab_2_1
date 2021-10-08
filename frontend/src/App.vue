<template>
  <v-app>
    <Menu />

    <v-main>
      <h2>Мелочь, а приятно: обучение кадров - приоритетная задача. Lorem ipsum dolore sit!</h2>
      <p>Приятно, граждане, наблюдать, как <b>некоторые</b> особенности внутренней политики объективно рассмотрены соответствующими инстанциями. С учётом сложившейся международной обстановки, укрепление и развитие внутренней структуры позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач!</p>
      <p>Illum ipsum quos dicta temporibus officiis doloribus, ipsam error non aut eius pariatur nobis in dolore. Non maiores excepturi quos nesciunt perspiciatis doloribus eos deleniti, in debitis aliquam? Sequi, autem!</p>
      <blockquote>
        В рамках спецификации современных стандартов, элементы политического процесса и по сей день остаются уделом либералов, которые жаждут быть объединены в целые кластеры себе подобных. Не следует, однако, забывать, что внедрение современных методик создаёт предпосылки для прогресса профессионального сообщества. В частности, существующая теория выявляет срочную потребность прогресса профессионального сообщества.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia illum saepe quibusdam rem, eius molestiae, laboriosam facilis, architecto impedit numquam ducimus ipsum delectus possimus quaerat cupiditate doloribus vel quisquam sint!
        <cite>Имя Автора (<a href="#">Ссылка</a>)</cite>
      </blockquote>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores at nobis quae nisi distinctio magni adipisci sunt tenetur dicta debitis consequatur consectetur rem provident ea deserunt quasi, illum error corporis.</p>
    </v-main>
  </v-app>
</template>

<script>
import Menu from "./components/Menu";

export default {
  name: "App",

  components: {
    Menu
  },

  data: () => ({
    // 
  }),
};
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&family=Marck+Script&family=Poiret+One&family=Raleway&display=swap');

h1 {
  font-size: 1em;
  font-family: 'Jura', sans-serif;
}

h2 {
  /* font-family: 'Jura', sans-serif; */
}

p {
  /*  */
}

blockquote {
  font-family: 'Raleway', sans-serif;
  padding-left: 25px;
  margin-left: 25px;
  
  border-left: 2px black solid;
}

cite {
  margin-top: 10px;
  display: block;
  font-weight: 600;
}

/* font-family: 'Poiret One', cursive; */

a {

}

</style>