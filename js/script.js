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
                    console.log(response.data);
                    this.todo = response.data;
                    console.log(this.todo);
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