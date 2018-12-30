<?php // var_dump($_SESSION) ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" >
        <title>Traversée 18 - 19 | Eglises Vases d'Honneur</title>

        <!-- jQuery -->
        <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Own CSS -->
        <link rel="stylesheet" href="css/style.css" />

    </head>
    <body>
        
        <div class="main-content container">
            <?php if( !empty($_SESSION['message']) ): ?>
                <div class="message <?php print $_SESSION['message']['status'] ?>">
                    <?php print $_SESSION['message']['content']; ?>
                    <?php print $_SESSION['message']= ''; ?>
                </div>
            <?php endif; ?>