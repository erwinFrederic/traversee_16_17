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

if( !empty($_POST['get-verset']) ) {
    /**
     * Invoke createVerset Model
     */
    include_once ('../models/getVerset.php');

    

} else {

    // include_once ('views/getVerset.php');

}