// Importa Vue
import Vue from 'vue'
// crea un oggetto usando .observable
const state = Vue.observable({
        genre: '',
        artist: ''
    })
    // esporta lo state
export default state