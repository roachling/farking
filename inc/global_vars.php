<?php


date_default_timezone_set('Europe/London');

// set page
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

// language select
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
	$_SESSION['lang'] = $lang;
} else {
	if (isset($_SESSION['lang'])) {
		$lang = $_SESSION['lang'];
	} else {
		$lang = 'en';
	}
}


$servername = "localhost";
$username = "root";
$password = "zunk";
$dbname = "farking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 