
<?php

session_start();

/**
 * Autoloader
 */
function chargerClasse($classe) {
    require_once('models/class/' . $classe . '.php');
}

spl_autoload_register('chargerClasse');

/**
 * Initiate DB Connexion
 */
include_once ('controllers/database.php');

/**
 * Invoke Header
 */
include_once ('views/header.php');

/**
 * Routing code
 */
$to_include = 'controllers/home.php';

if( !empty($_GET['page']) && file_exists('./controllers/' . $_GET['page'] . '.php') ) {

    $to_include = 'controllers/' . $_GET['page'] . '.php';

}

include_once ($to_include);

/**
 * Invoke Footer
 */
include_once ('views/footer.php');

?>
