<template>
   <b>boooo</b>
</template>

<script>
    export default {
        mounted() {
            window.Echo.channel('notify')
            .listen('EventPublicArticle', ({article}) =>{
                alert(`Добавлена статья ${article['name']}`);
            })
            
        }
    }
</script>
