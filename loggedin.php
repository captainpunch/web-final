<?php # Script 12.4 - loggedin.php
// The user is redirected here from login.php.



session_start(); // Start the session.
// If no cookie is present, redirect the user:
if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) )) {

	// Need the functions:
	require ('login_functions.inc.php');
	redirect_user();	

}

// Set the page title and include the HTML header:
$page_title = 'Logged In!';
include ('includes/header.html');

// Print a customized message:
echo '<h1>Logged In!</h1>';
echo '<p>You are now logged in ';

//check for cookie presence
if (isset($_SESSION['first_name'])) {
   echo $_SESSION['first_name'];
  }
echo  '!</p>';

echo '<p><a class="btn" href="logout.php">Logout</a></p>';
 

include ('includes/footer.html');
?>