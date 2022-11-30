
const { createApp } = Vue

createApp({
    data() {
        return {
            // count: 0
            url: 'server.php',
            toDoList: [

            ],
            task: ''
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

        },
        addTask() {
            console.log(this.task);

            axios
                .post(this.url, {
                    task: this.task
                }, {
                    headers: { 'Content_type': 'multipart/form-data' }
                })
                .then(response => {
                    console.log(response.data);

                    response.data = this.toDoList
                    // console.log(response.data);

                })
        }

    },
    mounted() {
        this.Server(this.url)
    }
}).mount('#app')