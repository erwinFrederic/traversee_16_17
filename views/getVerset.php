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

function sendUserMail() {
	require_once 'libs/vendor/autoload.php';

	// Create the Transport
	$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465))
		->setUsername('erwin.sittie@vasesdhonneur.info')
        ->setPassword('dewind91!')
	;

	// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);

	// Create a message
	$message = (new Swift_Message('Wonderful Subject'))
		->setFrom(['erwinsittie@vasesdhonneur.info' => 'EVH'])
		->setTo(['erwinsittie@gmail.com' => 'Erwin Sittie'])
		->setBody('Here is the message itself')
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
    <div class="col-md-6 add-verset-container">
        <div class="page-content">
            <div class="verset">
                <?php if (!empty($_SESSION['verset'])) : ?>

                    <p>
                        <img style="width:100%;" src="<?php print $_SESSION['verset'][0]['base64'] ?>" />
                    </p>
                    <!-- <p class="download">
                        <a class="button btn-primary" href="img/versets/<?php print FormatString($_SESSION['verset'][0]['vreference']) ?>.jpg">Télécharger votre calendrier</a>
                    </p> -->
                    <?php sendUserMail(); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>