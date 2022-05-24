<template>

    <!-- <form @submit.prevent="$emit('selectSubmit')"> -->
    <form>
        <select 
            @change="$emit('selectSubmit')"
            @input="$emit('input', $event.target.value)" 
            class="form-select" 
            aria-label="Default select example" 
        >
            <option selected>Select music genre</option>
            <option v-for="genre in genres" :key="genre" :value="genre">{{genre}}</option>
        </select>
        <!-- @click="$emit('selectSubmit', $event.target.value)" -->
    </form>         

</template>

<script>
export default {
    name: 'GenreSelectComponent',
    props: {
        albums: Array,
        genre: String
    },
    data() {
        return {
            genres: []
        }
    },
    methods: {
        filterGenres() {
            //console.log(this.albums);
            this.albums.forEach(album => {
                //console.log(album.genre);
                if(!this.genres.includes(album.genre)) {
                    this.genres.push(album.genre)
                }
            });
            //console.log(this.genres);
        }
    },
    mounted() {
        setTimeout(this.filterGenres,500);
    }
}
</script>

<style lang="scss" scoped>

    select {
        width: fit-content;
    }

</style>