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
                .then((response) => {
                    this.todo = response.data;
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