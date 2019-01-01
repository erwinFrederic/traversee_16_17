<?php // var_dump($_SESSION);
    function Unaccent($string)
    {
        if (strpos($string = htmlentities($string, ENT_QUOTES, 'UTF-8'), '&') !== false)
        {
            $string = html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|tilde|uml);~i', '$1', $string), ENT_QUOTES, 'UTF-8');
        }

        return $string;
    }

    function ReplaceDeuxPoints($string) {
        if ( !empty ($string) & is_string($string) ) {
            $string = str_replace(":","_", $string);
            $string = str_replace(" ","", $string);
        }

        return $string;
    }

    function FormatString ($string) {
        if ( !empty ($string) & is_string($string) ) {
            $string = strtolower($string);
            $string = Unaccent($string);
            $string = ReplaceDeuxPoints($string);
        }

        return $string;
    }

/**
 *  Sendmail
 */

function sendUserMail($userEmail = NULL, $verset = NULL) {
	require_once 'libs/vendor/autoload.php';
	// Create the Transport
	$transport = (new Swift_SmtpTransport('127.0.0.1', 25))
		->setUsername('traversee@vasesdhonneur.org')
		->setPassword('7C^cv75j')
	;
	// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);
	// Create a message
	$message = (new Swift_Message('Votre verset 2018 - 2019'))
		->setFrom(['traversee@vasesdhonneur.org' => 'Traversée Eglises Vases d\'Honneur'])
		->setTo([$userEmail => ''])
		->setBody('Veuillez trouver ci-dessous votre verset.')
		->addPart('<br/><img src="' . $verset .'" />', 'text/html')

	;
	// Send the message
	try {
		$result = $mailer->send($message);
	} catch (Exception $e) {
		print $e->getMessage();
	}
}

?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 add-verset-container">
        <div class="page-content">
            <div class="verset">
                <?php if (!empty($_SESSION['verset'])) : ?>

                    <p>
                        <img style="width:100%;" src="<?php print $_SESSION['verset'][0]['base64'] ?>" />
                    </p>


                    <?php sendUserMail($_SESSION['user_current']['mail'], $_SESSION['verset'][0]['base64']); ?>

                    <?php

					$filepath = 'http://vasesdhonneur.org/tirageverset/' . $_SESSION['verset'][0]['base64'];

                    ?>

                    <div><a class="btn btn-primary" href="<?php print $filepath; ?>" download="MonVerset18-19.png">Télécharger mon verset</a></div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>