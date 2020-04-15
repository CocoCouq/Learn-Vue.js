// Init all materialize property
M.AutoInit();


new Vue({
    el: '#app',
    data: {
        number1: 0,
        number2: 0,
        result: 0,
    },
    methods: {
        add: function (event) {
            this.result = this.number1 + this.number2;
        },
    }
});