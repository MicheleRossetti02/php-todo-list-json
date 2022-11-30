
const { createApp } = Vue

createApp({
    data() {
        return {
            // count: 0
            url: 'server.php',
            toDoList: [

            ]
        }
    },
    methods: {
        Server(url) {
            axios
                .get(url)
                .then(response => {
                    this.toDoList = response.data;
                    console.log(response.data);
                })

        }
    },
    mounted() {
        this.Server(this.url)
    }
}).mount('#app')