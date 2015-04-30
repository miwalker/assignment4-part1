<?php

session_start();

if(!isset($_SESSION['username'])){
	echo '<p>You must login first. Click <a href="http://web.engr.oregonstate.edu/~walkermi/login.php">here</a> to access the login screen.</p>';
}
else {
	echo '<br>This link will take you to <a href="http://web.engr.oregonstate.edu/~walkermi/content1.php?action=loggedin">content1</a>';
}

?>