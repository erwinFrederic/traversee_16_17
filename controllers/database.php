<?php
/**
 * Constants
 */

define ('HOST', 'localhost');
define ('DB', 'traversee');
define ('DBCARSET', 'utf8');
define ('DBUSER', 'root');
define ('DBPASSWORD', '');

/**
 * DBCONNEXION
 */
try {
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';charset=' . DBCARSET . '', DBUSER, DBPASSWORD);
} catch (Exception $e) {
    print_r('Erreur signalée: ' . $e->getMessage());
}