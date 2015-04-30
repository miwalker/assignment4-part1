<?php


if (count($_POST) == 1 && $_POST['username'] == "") {
	echo '<p>A username must be entered. Click <a href="http://web.engr.oregonstate.edu/~walkermi/login.php">here</a> to return to the login screen.</p>';
}
else {
	session_start();

	if(isset($_GET['action']) && $_GET['action'] == 'end'){
		$_SESSION = array();
		session_destroy();
		header("Location: http://web.engr.oregonstate.edu/~walkermi/login.php", true);
		die();
	}

	elseif(session_status() == PHP_SESSION_ACTIVE){

		if (count($_POST) == 0 && !isset($_SESSION['username'])) {
		echo '<p>You must login first. Click <a href="http://web.engr.oregonstate.edu/~walkermi/login.php">here</a> to access the login screen.</p>';
		}
		else {
			if(!isset($_SESSION['username'])){
				$_SESSION['username'] = $_POST['username'];
			}
			if(!isset($_SESSION['visits'])){
				$_SESSION['visits'] = 0;
			}
			echo "Hello $_SESSION[username] you have visited this page $_SESSION[visits] times before.";
			echo '<br>This link will take you to <a href="http://web.engr.oregonstate.edu/~walkermi/content2.php?action=loggedin">content2</a>';
			echo '<br>Click <a href="http://web.engr.oregonstate.edu/~walkermi/content1.php?action=end">here</a> to logout';
			$_SESSION['visits']++;
		}
	}
}

?>