<h1 class="center-align">Ma Team</h1>
<form
    v-for="player in result"
    v-bind:key="player.id"
    method="post"
    class="row"
>
    <label for="name" class="col s3">
        <input name="name" id="name" type="text" class="validate" v-bind:value="player.name">
    </label>
    <label for="number" class="col s2">
        <input name="number" id="number" type="number" class="validate" v-bind:value="player.number">
    </label>
    <label for="club" class="col s3">
        <input name="club" id="club" type="text" class="validate" v-bind:value="player.club">
    </label>
    <input type="hidden" name="idPlayer" v-bind:value="player.id">
    <div id="submitDiv" class="col s4 center-align">
        <button type="submit" name="submitEdit" class="btn blue">
            <i class="material-icons">edit</i>
        </button>
        <button type="submit" name="submitDel" class="btn red">
            <i class="material-icons">delete</i>
        </button>
    </div>
</form>
