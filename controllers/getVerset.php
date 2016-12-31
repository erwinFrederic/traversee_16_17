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

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    if (!empty($_POST['nomprenoms_field']) && !empty($_POST['email_field']) && !empty($_POST['country_field'] )) {
        /**
         * Invoke createVerset Model
         */
        include_once ('../models/getVerset.php');

        $versetG = new VersetManager($db);

        $rtn = $versetG->get();

        foreach ($rtn as $value) {
            $all_id[] = $value['vid'];
        }

        $rand_keys = array_rand($rtn, 1);

        $_SESSION['verset'] = $versetG->getById($all_id[$rand_keys]);

        /**
         * Creating a User
         */
        $tUserE = new UserEntity();
        $tUserE->setUemail($_POST['email_field']);
        $tUserE->setUnomprenoms($_POST['nomprenoms_field']);
        $tUserE->setUpaysorigine($_POST['country_field']);
        $tUserE->setVid($all_id[$rand_keys]);

        $tUserM = new UserManager($db);
        $createUser = $tUserM->create($tUserE);

        if( empty($createUser) || !$createUser ) {
            $_SESSION['message'] = array(
                'content' => 'Erreur lors de la tentative de sélection. Veuillez réessayer.',
                'status' => 'error'
            );

            header('Location: ../index.php');
        }

        header('Location: ../?page=getVerset');
    }


} else {

    include_once ('views/getVerset.php');

}