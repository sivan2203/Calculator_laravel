var vue = new Vue({
    el: '#calc',
    data: {
        result: '',
        numbers: [1,2,3,4,5,6,7,8,9,0],
        operations: ['+','-','*','/'],
    },
    methods: {
        input: function(char) {
            this.result = this.result.toString();
            this.result+=char;
        },
        reset: function() {
            this.result = '';
        },
        calc: function() {
            this.result = eval(this.result);
            let date = new Date();
            axios.post('/post-data', {
                "result": this.result,
                "time": date
            }).then(res => {
                console.log(res); // Результат ответа от сервера
            });
        }
    }
})
