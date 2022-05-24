<template>
  <div id="app">
    
    <Header :albums="albums"/>

    <Main :albums="albums"/>

  </div>
</template>

<script>
import axios from "axios";
import Header from "@/components/HeaderComponent.vue";
import Main from "@/components/MainComponent.vue";

export default {
  name: 'App',
  components: {
    Header,
    Main
  },
  data() {
        return {
            api_url: "https://flynn.boolean.careers/exercises/api/array/music",
            albums: null,
            error: null
        };
  },
  methods: {
      callApi() {
          axios
              .get(this.api_url)
              .then((response) => {
                  //console.log(response);
                  this.albums = response.data.response;
                  //console.log(this.albums);
              })
              .catch((error) => {
                  console.error();
                  error;
                  this.error = `Sorry, there is a problem! ${error}`;
              });
      },
  },
  mounted() {
      this.callApi();
  },
}

</script>

<style lang="scss">
  
  @import '@/assets/scss/style.scss';

</style>
