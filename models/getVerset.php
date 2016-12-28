<?php

include_once (dirname(__FILE__) . '/../controllers/database.php');

/* function getVersetById(PDO $db, $id) {
    if( empty($id) )
        $id = 1;

    $request = $db->prepare('
        SELECT *
        FROM verset
        WHERE vid == :vid
    ');
    $request->bindValue(
        ':vid', $id, PDO::PARAM_INT
    );

    $request->execute();

    $toReturn = FALSE;
    if( !empty($request) ) {
        $toReturn = $request;
    }

    return $toReturn;
} */

function chargerClasse($classe) {
    require_once('class/' . $classe . '.php');
}

spl_autoload_register('chargerClasse');

$versetG = new VersetManager($db);
$rtn = $versetG->getById(1);

var_dump($rtn);