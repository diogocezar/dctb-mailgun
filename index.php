<?php
	require 'vendor/autoload.php';
	use Mailgun\Mailgun;

	$mgClient = new Mailgun('<key>');
	$domain = "mg.diogocezar.com.br";

	try{
		$result = $mgClient->sendMessage($domain, array(
		    'from'    => 'Diogo Cezar <diogo@diogocezar.com>',
		    'to'      => 'Diogo Cezar <diogo@diogocezar.com>',
		    'subject' => 'Hello',
		    'text'    => 'Testing some Mailgun awesomness!'
		));
	}
	catch(Exception $e){
		echo $e;
	}
?>