<?php

include_once (dirname(__FILE__) . '/../controllers/database.php');

function getVersetById(PDO $db, $id) {
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
}