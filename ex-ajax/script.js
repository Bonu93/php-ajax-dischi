
const app = new Vue({

    el: '#app',
    data: {
        database: null,
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('http://localhost/php-ajax-dischi/ex-ajax/data.php')
            .then((result) => {
                this.database = result.data;
            })
        }
    },
    
})