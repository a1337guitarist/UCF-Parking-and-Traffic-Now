<?
	$mysqli = new mysqli(localhost, ja033522, escarcha, ja033522);
	if($mysqli->error) {
		print "Error connecting! Message:".$mysqli->error;
	}
?>