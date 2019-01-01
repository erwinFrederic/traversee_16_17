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
	require_once '/libs/vendor/sendgrid-php/vendor/autoload.php';

	$email = new \SendGrid\Mail\Mail();
	$email->setFrom("info@vasesdhonneur.info", "Eglises Vases d'Honneur");
	$email->setSubject("Votre verset de l'année");
	$email->addTo("erwinsittie@gmail.com", "Erwin Sittie");
	$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
	$email->addContent(
		"text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
	);
	$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
	try {
		$response = $sendgrid->send($email);
		print $response->statusCode() . "\n";
		print_r($response->headers());
		print $response->body() . "\n";
	} catch (Exception $e) {
		echo 'Caught exception: '. $e->getMessage() ."\n";
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
                    <!-- <p class="download">
                        <a class="button btn-primary" href="img/versets/<?php print FormatString($_SESSION['verset'][0]['vreference']) ?>.jpg">Télécharger votre calendrier</a>
                    </p> -->
                    <?php sendUserMail(); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>