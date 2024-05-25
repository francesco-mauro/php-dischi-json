
const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: []
        };
    },
    // creo dischi facendo la richiesta ad api tramite axios per ottenere il materiale per gli src e v:for
    created() {
        axios.get('api/api.php') 
            .then(response => {
                this.dischi = response.data;
            })
    }
}).mount('#app');
