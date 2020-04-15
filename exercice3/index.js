// Init all materialize property
M.AutoInit();

new Vue({
    el: '#app',
    data: {
        numbers: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        ops: ['-', '+', '='],
        operator: '',
        display: 0,
        result: 0,
    },
    methods: {
        addNum: function (number) {
            this.display = number;

            switch (this.operator) {
                case '+':
                    this.result += number;
                    break;
                case '-':
                    this.result -= number;
                    break;
                case '=':
                    this.display = this.result;
                    break;

                default:
                    this.result = number;
                    break;
            }
        },

        calc: function (opp) {
            this.operator = opp;
            this.display = opp === '=' ? this.result : this.display;
        },

        clear: function (event) {
            this.result = 0;
            this.display = 0;
            this.operator = '';
        }
    }
});