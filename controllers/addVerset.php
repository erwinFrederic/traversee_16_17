<?php
/**
 * Created by PhpStorm.
 * User: erwinsittie
 * Date: 08/08/2016
 * Time: 13:43
 */


/**
 * Invoke Home View
 */

// var_dump($_POST);

if( !empty($_POST['reference-field']) && !empty($_POST['content-field']) ) {
    /**
     * Invoke createVerset Model
     */
    include_once ('../models/createVerset.php');

    /**
     * Creating Verset
     */
    $verset = new VersetEntity();
    $verset->setVreference($_POST['reference-field']);
    $verset->setContent($_POST['content-field']);

    // creating
    $createM = new VersetManager($db);
    $createM->create($verset);

    var_dump($createM);

    if( !empty($createM) ) {
        $_SESSION['message'] = array(
            'content' => 'Votre verset a bien été ajouté',
            'status' => 'status'
        );
        header('Location: ../?page=addVerset');
    }
} else {

    include_once ('views/addVerset.php');

}