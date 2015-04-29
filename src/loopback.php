<?php

// if request is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	// if no parameters provided
	if (count($_GET) == 0) {
		echo '{"Type":"GET", "parameters":null}';
	}
	// if parameters were provided
	else {
	echo '{"Type":"GET",';
	echo "\"parameters\":";
	echo json_encode($_GET);
	echo '}';
	}
// if request is POST
} else {
	// if no parameters provided
	if (count($_POST) == 0) {
		echo '{"Type":"POST", "parameters":null}';
	// if parameters were provided
	} else {
		echo '{"Type":"POST",';
		echo "\"parameters\":";
		echo json_encode($_POST);
		echo '}';
	}
}

?>