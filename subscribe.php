<?php

define("ADDRESS", "127.0.0.1");
define("USER", "werit");
define("PASSWORD", "kqc14xawe");
define("DATABASE", "werit_clover");
define("TABEL", "subscribers");
define("TABEL2", "messages");



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
	$connection = mysqli_connect(ADDRESS, USER, PASSWORD, DATABASE);
	$insert = $connection->prepare("INSERT INTO " . TABEL2 . " (name, email, message) VALUES (?, ?, ?)");
	$insert->bind_param('sss', $_POST['name'], $_POST['email'], $_POST['content']);
	$insert->execute();
	$insert->close();

	echo $_POST['name'];

}

?>