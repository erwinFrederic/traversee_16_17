<?php
/**
 * Created by PhpStorm.
 * User: erwinsittie
 * Date: 08/08/2016
 * Time: 13:43
 */

function uploadFile() {
    $target_dir = "../img/versets/";
    $target_file = $target_dir . basename($_FILES["img-field"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["img-field"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    // Check file size
        if ($_FILES["img-field"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["img-field"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["img-field"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
}

/**
 * Invoke Home View
 */

// var_dump($_POST);

if( !empty($_POST['reference-field']) && !empty($_POST['content-field']) ) {
    /**
     * Invoke createVerset Model
     */
    include_once ('../models/createVerset.php');

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    /**
     * Creating Verset
     */
    $verset = new VersetEntity();
    $verset->setVreference($_POST['reference-field']);
    $verset->setContent($_POST['content-field']);

    // creating
    $createM = new VersetManager($db);
    $createM->create($verset);
    
    // img 

    var_dump($createM);

    if( !empty($createM) ) {
        $_SESSION['message'] = array(
            'content' => 'Votre verset a bien été ajouté',
            'status' => 'status'
        );
        // header('Location: ../?page=addVerset');
    }
} else {

    include_once ('views/addVerset.php');

}