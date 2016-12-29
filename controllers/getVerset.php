<?php
// session_start();
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

if( !empty($_POST['get-verset']) ) {
    /**
     * Invoke createVerset Model
     */
    include_once ('../models/getVerset.php');

    header('Location: ../?page=getVerset');

    $versetG = new VersetManager($db);
    // $rtn = $versetG->getById(1);

    $rtn = $versetG->get();

    foreach ($rtn as $value) {
        $all_id = $value['vid'];
    }

    $rand_keys = array_rand($rtn, 1);

    $_SESSION['verset'] = $versetG->getById($rand_keys);


} else {

    include_once ('views/getVerset.php');

}