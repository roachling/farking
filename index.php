<?php 
	require_once('inc/global_vars.php');
	require_once('inc/header.php');
	// page content
	if(file_exists('pages/'.$page.'/display.php')) {
		require 'pages/'.$page.'/display.php';
	} else {
		require 'pages/home/display.php';
	}
	// footer
	require 'inc/footer.php';
	$conn->close();
?>