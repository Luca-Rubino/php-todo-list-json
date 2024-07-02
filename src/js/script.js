const { createApp } = Vue

    createApp({
        data() {
        return {
            todoList: [],
        }
        },
        methods: {
            getApi() {
                    axios.post('./page/server.php', {
                        params: {
                        
                        }
                    })
                    .then((response) =>  {
                        this.todoList = response.data.tasks;
                        // console.log(this.todoList);
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
                    .finally(function () {
                        // always executed
                    });  
            }
        },
        created(){
            this.getApi();
        },
}).mount('#app')