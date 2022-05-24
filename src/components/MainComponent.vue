<template>

    <main class="d-flex align-items-center justify-content-center">
        
        <AlbumsSection :albums="albums"/>

    </main>
    
</template>

<script>
import AlbumsSection from "@/components/AlbumsSectionComponent.vue"
export default {
    name: 'MainComponent',
    props: {
        albums: Array
    },
    components: {
        AlbumsSection
    }
}
</script>

<style lang="scss" scoped>
    main {
        background-color: $main;
        height: 94vh;
    }
</style>

