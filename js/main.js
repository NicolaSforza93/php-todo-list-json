const { createApp } = Vue

createApp({
    data() {
        return {
            newTodo: '',
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

        },
        addStoreTodo() {
            console.log(this.newTodo);
            // Nell'oggetto data inserisco la proprietà postParam, ovvero il parametro in post che il server andrà a cercare
            const data = {
                postParam: this.newTodo
            }

            axios.post('store.php', data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((res) => {
                console.log(res.data);
                this.todos = res.data.results;
                this.newTodo = '';
            });
        }
    },
    created() {
        this.fetchData();

    },
    mounted() {
        console.log('OK');
    }
}).mount('#app')
