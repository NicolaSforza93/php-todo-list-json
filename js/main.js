const { createApp } = Vue

createApp({
    data() {
        return {
            todos: []
        }
    },
    methods: {
        fetchData() {
            axios.get('server.php')
                .then((res) => {
                    // console.log(res.data);
                    this.todos = res.data;
                })

        }
    },
    created() {
        this.fetchData();
    },
    mounted() {
        console.log('OK');
    }
}).mount('#app')
