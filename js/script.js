const { createApp } = Vue

createApp({
    data() {
        return{
            todo: [],
        }
    },
    methods: {
        getData: function() {
            axios.get('./server.php')
                .then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                })
                .finally(function () {

                });
        }
    },
    created() {
        this.getData()
    }
}).mount('#app')