<?php
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
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

if( !empty($_POST['get-verset']) && !empty($_POST['nomprenoms_field']) && !empty($_POST['email_field']) && !empty($_POST['country_field'] )) {

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

    if( $tUserM->getByEmail($tUserE->getUemail()) ) {
        $_SESSION['message'] = array(
            'content' => 'Toutes nos excuses, mais vous avez déjà généré un verset qui vous a été transmis par email.',
            'status' => 'error'
        );

        header('Location: ../index.php');
        return True;
    }

    $createUser = $tUserM->create($tUserE);

    if( empty($createUser) || !$createUser ) {
        $_SESSION['message'] = array(
            'content' => 'Erreur lors de la tentative de sélection. Veuillez réessayer.',
            'status' => 'error'
        );

        header('Location: ../index.php');
    }

    header('Location: ../?page=getVerset');


} else {

    if(!file_exists('views/getVerset.php')) {
        $_SESSION['message'] = array(
            'content' => 'Veuillez remplir le formulaire afin d\'obtenir un verset biblique.',
            'status' => 'error'
        );
        header('Location: ../index.php');
    }

    include_once ('views/getVerset.php');


}