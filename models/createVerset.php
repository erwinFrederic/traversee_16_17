<?php

include_once (dirname(__FILE__) . '/../controllers/database.php');

function chargerClasse($classe) {
    require_once('class/' . $classe . '.php');
}

function createVerset(PDO $db, $verset) {
    if( !empty($verset) ) {

        var_dump($db);

        $request = $db->prepare('
            INSERT INTO verset (vreference, content)
            VALUES (:vreference, :content)
        ');

        $request->bindValue(
            ':vreference', $verset->vreference, PDO::PARAM_STR
        );

        $request->bindValue(
            ':content', $verset->content, PDO::PARAM_STR
        );
    }

    $exec = $request->execute();

    $toReturn = 'No OK';
    if( !empty($exec) ) {
        $toReturn = $exec;
    }

    return $toReturn;
}


spl_autoload_register('chargerClasse');