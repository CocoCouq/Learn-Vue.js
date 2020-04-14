// Init all materialize property 
M.AutoInit();

// EXERCICE 1 - ADDITIONNEUR 
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

// EXERCICE 2 - MAGIC NUMBER
let magic = parseInt(Math.random()*100);

new Vue({
    el:'#app2',
    data: {
        number: 0,
        message: 'Entrez un nombre',
    },
    methods: {
        verify: function (event) {
            this.message = magic < this.number
                ? 'Plus petit'
                : (magic > this.number
                    ? 'Plus grand'
                    : 'BRAVO !!');
        },
        newNumber: function (event) {
            magic = parseInt(Math.random()*100);
            this.message = 'Entrez un nombre';
        }
    }
});
