// Init all materialize property
M.AutoInit();

new Vue({
    el: '#app',
    data: {
        checked: true,
    },

    methods: {
        change: function (event) {
            this.checked = !this.checked;
        }
    }
});