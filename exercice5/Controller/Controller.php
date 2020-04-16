<?php
    if(isset($_POST['submitDel']) && !empty($_POST['idPlayer'])) {
        $id = filter_input(INPUT_POST, 'idPlayer', FILTER_VALIDATE_INT);

        $request = 'DELETE FROM team WHERE id = :id';
        $result = $db->prepare($request);
        $result->bindParam(':id', $id);
        $result->execute();
    }
    if(isset($_POST['submitEdit']) && !empty($_POST['idPlayer'])){
        $array_player = [
            ':name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
            ':number' => filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT),
            ':club' => filter_input(INPUT_POST, 'club', FILTER_SANITIZE_STRING),
            ':id' => filter_input(INPUT_POST, 'idPlayer', FILTER_VALIDATE_INT)
        ];

        $request = 'UPDATE team SET name = :name, number = :number, lastclub = :club WHERE id = :id';
        $result = $db->prepare($request);
        $result->execute($array_player);
    }
    if (isset($_POST['submitAdd']) && !empty($_POST['name']))
    {
        $array_player = [
            ':name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
            ':number' => filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT),
            ':club' => filter_input(INPUT_POST, 'club', FILTER_SANITIZE_STRING),
        ];

        $request = 'INSERT INTO team(name, number, lastclub) VALUE (:name, :number, :club)';
        $result = $db->prepare($request);
        $result->execute($array_player);
    }


