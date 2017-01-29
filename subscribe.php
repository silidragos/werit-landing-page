<?php

define("ADDRESS", "127.0.0.1");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "clover");
define("TABEL", "subscribers");


if(isset($_POST['subscribe']))
{
	// subscribing
	$connection = mysqli_connect(ADDRESS, USER, PASSWORD, DATABASE);

	if(!$connection)
	{
		echo ("There was a problem with your subscription!");

	}
	else
	{
		$email = $_POST['email'];
		$insert = $connection->prepare("INSERT INTO " . TABEL . " (email) VALUES (?)");
		$insert->bind_param('s', $email);
		$insert->execute();
		$insert->close();

		echo "Great job!";
	}
}
else
{
	// contact
	$to      = 'contact@clover.com';
	$subject = $_POST['name'] . ' contacted us';
	$message = $_POST['content'];
	$headers = 'From: ' . $_POST['email'] . "\r\n" .
    'Reply-To: '. $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	// if(mail($to, $subject, $message, $headers))
	// 	echo "Great job!";
	// else
	// 	echo "There was a problem!";
}

?>