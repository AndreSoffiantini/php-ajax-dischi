<template>
    <div class="col text-center">
        <div class="album_card p-3">
            <img :src="album.poster" alt="album.title">
            <h3 class="text-light text-uppercase my-3">{{album.title}}</h3>
            <span class="text-secondary">{{album.author}}</span>
            <br>
            <span class="text-secondary">{{album.year}}</span>
        </div>        
    </div>
</template>

<script>
export default {
    name:'AlbumCardComponent',
    props: {
        album: Object
    }
}
</script>

<style lang="scss" scoped>
    
    .album_card {
        background-color: $header_cards;
        height: 100%;

        img {
        height: 200px;
        aspect-ratio: 1;
        }
    }
    
    
</style>