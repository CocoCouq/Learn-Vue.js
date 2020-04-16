<h1 class="center-align">Ajouter un Joueur</h1>
<form method="post">
    <div class="row">
        <div class="input-field col s6">
            <input name="name" placeholder="Joueur" id="name" type="text" class="validate">
            <label for="name">Nom</label>
        </div>
        <div class="input-field col s6">
            <input name="club" placeholder="Dernier club" id="club" type="text" class="validate">
            <label for="club">Club</label>
        </div>
        <div class="input-field col s4 offset-s4">
            <input name="number" placeholder="Numéro sur le maillot" id="number" type="number" class="validate">
            <label for="number">Numéro</label>
        </div>
        <div class="col s12 center-align">
            <button class="btn waves-effect waves-light" type="submit" name="submitAdd">Ajouter
                <i class="material-icons right">add</i>
            </button>
        </div>
    </div>
</form>
