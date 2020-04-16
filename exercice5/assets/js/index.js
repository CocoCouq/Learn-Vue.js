// Materialize
M.AutoInit();

$.ajax({
    url: "Model/TeamJSON.php",
    dataType: "json",
    success: function(data)
    {
        let result = [];
        let i = 0;

        $.each(data, function (key, val) {
            result[i++] = {
                name: val.name,
                number: val.number,
                club: val.lastclub,
                id: val.id
            };
        });
        new Vue({
            el:'#app',
            data () {
                return {
                    result: result,
                    listPlayers: false,
                    addMode: false,
                    index: true,
                }
            },
            methods: {
                functionList: function () {
                    this.listPlayers = !this.listPlayers;
                    this.addMode = false;
                    this.index = !this.listPlayers;
                },
                functionAdd: function () {
                    this.addMode = !this.addMode;
                    this.listPlayers = false;
                    this.index = !this.addMode;
                }
            }
        });
    }
});



