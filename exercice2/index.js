// Init all materialize property
M.AutoInit();


let magic = parseInt(Math.random()*100);

new Vue({
    el:'#app',
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