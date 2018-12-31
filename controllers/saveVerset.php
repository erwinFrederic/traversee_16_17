<?php

/**
* Created by PhpStorm.
* User: erwinsittie
* Date: 08/08/2016
* Time: 13:43
*/

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

/**
 * Read directory content
 */
if ($handle = opendir('img/versets')) {

	while (false !== ($entry = readdir($handle))) {

		if ($entry != "." && $entry != "..") {

			echo "$entry\n";
			spl_autoload_register('chargerClasse');

			$verset = new VersetEntity();
			$verset->setBase64('img/versets/' . $entry);

			$versetSave = new VersetManager($db);
			$versetSave->create($verset);
		}
	}

	closedir($handle);
}