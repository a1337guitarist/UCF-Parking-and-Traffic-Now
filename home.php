<?
	require("db_connect.php");
	
	$today = date("G:i");

	$parking_result = $mysqli->query("SELECT * FROM `parking`");
?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title>Parking</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
		
       	<link rel="stylesheet" href="themes/project3_css.min.css" />
       	<link rel="stylesheet" href="themes/styles.css"/>
	</head> 
	<body onunload=""> 
		<div data-role="page" data-theme="a">
			<div class="parkingHeader" data-theme="a">
				<h1 class="headerTitleFont" data-role ="header" data-theme="a"><img src="pegasus2.gif" alt="icon" />UCF Parking and Traffic Now</h1>
			</div>
			<div class="parkingMainNavigation" data-role="controlgroup" data-type="horizontal" data-theme="a">
				<ul>
					<li><a href="home.php" data-role="button">Parking</a></li>
					<li><a href="traffic.php" data-role="button">Traffic</a></li>
				</ul>
			</div>
			<div class="mainContentContainer" data-theme="a">	
				<?
					while ($row = $parking_result->fetch_object()) {
						print "<div class=\"individualButtonInfoContainer\">";
							print "<a href=\"individualInfo.php?parking=".$row->Parking_Garage."\" class=\"individualButtonLink\"></a>";
							print "<p class=\"parkingGarageName\">".$row->Parking_Garage."</p>";
							print "<p class=\"status\">Status:</p>";
							if ($row->Parking_Garage == "Parking Garage A") {
								if ($today < "10:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "10:00") && ($today <= "11:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "11:00") && ($today < "14:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "14:00") && ($today < "15:00")) {
									print "<div class=\"green\"></div>";
								} elseif ($today >= "15:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Parking_Garage == "Parking Garage B") {
								if ($today < "09:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "09:00") && ($today <= "11:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "11:00") && ($today < "14:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "14:00") && ($today < "15:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif ($today >= "15:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Parking_Garage == "Parking Garage C") {
								if ($today < "09:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "09:00") && ($today <= "11:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "11:00") && ($today < "14:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "14:00") && ($today < "15:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif ($today >= "15:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Parking_Garage == "Parking Garage D") {
								if ($today < "09:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "09:00") && ($today <= "11:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "11:00") && ($today < "14:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "14:00") && ($today < "15:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif ($today >= "15:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Parking_Garage == "Parking Garage F") {
								if ($today < "09:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "09:00") && ($today <= "11:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "11:00") && ($today < "14:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "14:00") && ($today < "15:00")) {
									print "<div class=\"green\"></div>";
								} elseif ($today >= "15:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Parking_Garage == "Parking Garage H") {
								if ($today < "09:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "09:00") && ($today <= "11:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today > "11:00") && ($today < "14:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "14:00") && ($today < "15:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif ($today >= "15:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Parking_Garage == "Parking Garage I") {
								if ($today < "10:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "10:00") && ($today <= "11:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "11:00") && ($today < "14:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "14:00") && ($today < "15:00")) {
									print "<div class=\"green\"></div>";
								} elseif ($today >= "15:00" ) { 
									print "<div class=\"green\"></div>";
								}
							}
						print "</div>";
					}
				?>
			</div>
		</div>
	</body>
</html>
