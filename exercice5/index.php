<?php include 'Views/header.php'?>

<main id="app">

<!--    NAVBAR    -->
    <?php include_once 'Views/navbar.php'?>

<!--    DEFAULT INDEX   -->
    <div v-if="index">
        <h1 class="center-align red-text">Ma petite équipe</h1>
        <h2 class="center-align">Bienvenue</h2>
    </div>

<!--    LIST ET EDIT    -->
    <div v-if="listPlayers">
        <?php include 'Views/listPlayers.php'?>
    </div>

<!--    ADD MODE    -->
    <div v-if="addMode" class="container">
        <?php include 'Views/addMode.php'?>
    </div>
</main>

<?php include 'Views/footer.php'?>
