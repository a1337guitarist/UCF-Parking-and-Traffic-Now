<?
	require("db_connect.php");
	
	$today = date("G:i");

	if ($_GET['parking'] != NULL) {
        $parking_result = $mysqli->query("SELECT * FROM `parking` WHERE Parking_Garage = '{$_GET['parking']}'");
    } else if ($_GET['traffic'] != NULL) {
        $traffic_result = $mysqli->query("SELECT * FROM `traffic` WHERE Traffic_Intersection = '{$_GET['traffic']}'");
    } else {
    	header("location: home.php"); 	
    }
?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title>
			<?
				if ($_GET['parking'] != NULL) {
			    	print $_GET['parking'];
    			} else if ($_GET['traffic'] != NULL) {
        			print $_GET['traffic'];
   				}
   			?>
   		</title> 
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
				<h1 class="headerTitleFont" data-role ="header" data-theme="a"><img src = "pegasus2.gif" alt = "icon"/>UCF Parking and Traffic Now</h1>
			</div>
			<div class="parkingMainNavigation" data-role="controlgroup"  data-type="horizontal" data-theme="a">
				<ul>
					<li><a href="home.php" data-role="button">Parking</a></li>
					<li><a href="traffic.php" data-role="button">Traffic</a></li>
				</ul>
			</div>
			<div class="mainContentContainer" data-theme="a">	
				<div class="individualContainer" data-theme="a">
					<h2 class="individualTitle" data-theme="a">
						<?
							if ($_GET['parking'] != NULL) {
						    	print $_GET['parking'];
			    			} else if ($_GET['traffic'] != NULL) {
			        			print $_GET['traffic'];
			   				}
			   			?>
					</h2>
					<?
						if ($_GET['parking'] != NULL) {
							while ($row = $parking_result->fetch_object()) {
								print "<img src=\"img/".$row->Map_Image."\" alt=\"Map Image\" class=\"mapImage\" />";
									if ($row->Parking_Garage == "Parking Garage A") {
										if ($today < "10:00") {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today >= "10:00") && ($today <= "11:00")) {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today > "11:00") && ($today < "14:00")) {
											print "<div class=\"individualRed\"></div>";
										} elseif (($today >= "14:00") && ($today < "15:00")) {
											print "<div class=\"individualGreen\"></div>";
										} elseif ($today >= "15:00" ) { 
											print "<div class=\"individualGreen\"></div>";
										}
									} elseif ($row->Parking_Garage == "Parking Garage B") {
										if ($today < "09:00") {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today >= "09:00") && ($today <= "11:00")) {
											print "<div class=\"individualYellow\"></div>";
										} elseif (($today > "11:00") && ($today < "14:00")) {
											print "<div class=\"individualRed\"></div>";
										} elseif (($today >= "14:00") && ($today < "15:00")) {
											print "<div class=\"individualYellow\"></div>";
										} elseif ($today >= "15:00" ) { 
											print "<div class=\"individualGreen\"></div>";
										}
									} elseif ($row->Parking_Garage == "Parking Garage C") {
										if ($today < "09:00") {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today >= "09:00") && ($today <= "11:00")) {
											print "<div class=\"individualYellow\"></div>";
										} elseif (($today > "11:00") && ($today < "14:00")) {
											print "<div class=\"individualRed\"></div>";
										} elseif (($today >= "14:00") && ($today < "15:00")) {
											print "<div class=\"individualYellow\"></div>";
										} elseif ($today >= "15:00" ) { 
											print "<div class=\"individualGreen\"></div>";
										}
									} elseif ($row->Parking_Garage == "Parking Garage D") {
										if ($today < "09:00") {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today >= "09:00") && ($today <= "11:00")) {
											print "<div class=\"individualYellow\"></div>";
										} elseif (($today > "11:00") && ($today < "14:00")) {
											print "<div class=\"individualRed\"></div>";
										} elseif (($today >= "14:00") && ($today < "15:00")) {
											print "<div class=\"individualYellow\"></div>";
										} elseif ($today >= "15:00" ) { 
											print "<div class=\"individualGreen\"></div>";
										}
									} elseif ($row->Parking_Garage == "Parking Garage F") {
										if ($today < "09:00") {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today >= "09:00") && ($today <= "11:00")) {
											print "<div class=\"individualYellow\"></div>";
										} elseif (($today > "11:00") && ($today < "14:00")) {
											print "<div class=\"individualRed\"></div>";
										} elseif (($today >= "14:00") && ($today < "15:00")) {
											print "<div class=\"individualGreen\"></div>";
										} elseif ($today >= "15:00" ) { 
											print "<div class=\"individualGreen\"></div>";
										}
									} elseif ($row->Parking_Garage == "Parking Garage H") {
										if ($today < "09:00") {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today >= "09:00") && ($today <= "11:00")) {
											print "<div class=\"individualRed\"></div>";
										} elseif (($today > "11:00") && ($today < "14:00")) {
											print "<div class=\"individualRed\"></div>";
										} elseif (($today >= "14:00") && ($today < "15:00")) {
											print "<div class=\"individualYellow\"></div>";
										} elseif ($today >= "15:00" ) { 
											print "<div class=\"individualGreen\"></div>";
										}
									} elseif ($row->Parking_Garage == "Parking Garage I") {
										if ($today < "10:00") {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today >= "10:00") && ($today <= "11:00")) {
											print "<div class=\"individualGreen\"></div>";
										} elseif (($today > "11:00") && ($today < "14:00")) {
											print "<div class=\"individualRed\"></div>";
										} elseif (($today >= "14:00") && ($today < "15:00")) {
											print "<div class=\"individualGreen\"></div>";
										} elseif ($today >= "15:00" ) { 
											print "<div class=\"individualGreen\"></div>";
										}
									}
							}
						} elseif ($_GET['traffic'] != NULL) {
							while ($row = $traffic_result->fetch_object()) {
								print "<img src=\"img/".$row->Map_Image."\" alt=\"Map Image\" class=\"mapImage\" />";
								if ($row->Traffic_Intersection == "University and Alafaya") {
									if ($today < "06:00") {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "06:00") && ($today <= "07:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today > "07:00") && ($today < "08:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today >= "08:00") && ($today <= "09:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today > "09:00") && ($today < "12:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "12:00") && ($today <= "13:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today > "13:00") && ($today < "17:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "17:00") && ($today <= "19:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif ($today > "19:00" ) { 
										print "<div class=\"individualGreen\"></div>";
									}
								} elseif ($row->Traffic_Intersection == "Gemini and Alafaya") {
									if ($today < "06:00") {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "06:00") && ($today <= "07:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today > "07:00") && ($today < "08:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today >= "08:00") && ($today <= "09:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today > "09:00") && ($today < "12:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "12:00") && ($today <= "13:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today > "13:00") && ($today < "17:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "17:00") && ($today <= "19:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif ($today > "19:00" ) { 
										print "<div class=\"individualGreen\"></div>";
									}
								} elseif ($row->Traffic_Intersection == "Central Florida and Alafaya") {
									if ($today < "06:00") {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "06:00") && ($today <= "07:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today > "07:00") && ($today < "08:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today >= "08:00") && ($today <= "09:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today > "09:00") && ($today < "12:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "12:00") && ($today <= "13:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today > "13:00") && ($today < "17:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "17:00") && ($today <= "19:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif ($today > "19:00" ) { 
										print "<div class=\"individualGreen\"></div>";
									}
								} elseif ($row->Traffic_Intersection == "Centaurus and Alafaya") {
									if ($today < "06:00") {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "06:00") && ($today <= "07:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today > "07:00") && ($today < "08:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today >= "08:00") && ($today <= "09:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today > "09:00") && ($today < "12:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "12:00") && ($today <= "13:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today > "13:00") && ($today < "17:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "17:00") && ($today <= "19:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif ($today > "19:00" ) { 
										print "<div class=\"individualGreen\"></div>";
									}
								} elseif ($row->Traffic_Intersection == "Research Pkwy and Alafaya") {
									if ($today < "06:00") {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "06:00") && ($today <= "07:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today > "07:00") && ($today < "08:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today >= "08:00") && ($today <= "09:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today > "09:00") && ($today < "12:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "12:00") && ($today <= "13:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif (($today > "13:00") && ($today < "17:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "17:00") && ($today <= "19:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif ($today > "19:00" ) { 
										print "<div class=\"individualGreen\"></div>";
									}
								} elseif ($row->Traffic_Intersection == "Libra Dr and Gemini") {
									if ($today < "06:00") {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "06:00") && ($today <= "07:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today > "07:00") && ($today < "08:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "08:00") && ($today <= "09:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today > "09:00") && ($today < "12:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "12:00") && ($today <= "13:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today > "13:00") && ($today < "17:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "17:00") && ($today <= "19:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif ($today > "19:00" ) { 
										print "<div class=\"individualGreen\"></div>";
									}
								} elseif ($row->Traffic_Intersection == "McCulloch Rd and Orion Blvd") {
									if ($today < "06:00") {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "06:00") && ($today <= "07:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today > "07:00") && ($today < "08:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "08:00") && ($today <= "09:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today > "09:00") && ($today < "12:00")) {
										print "<div class=\"individualYellow\"></div>";
									} elseif (($today >= "12:00") && ($today <= "13:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today > "13:00") && ($today < "17:00")) {
										print "<div class=\"individualGreen\"></div>";
									} elseif (($today >= "17:00") && ($today <= "19:00")) {
										print "<div class=\"individualRed\"></div>";
									} elseif ($today > "19:00" ) { 
										print "<div class=\"individualGreen\"></div>";
									}
								}
							}
						}
					?>
					<a class="backButton" href="home.php" data-role="button" data-transition="slide">Back</a>
				</div>
			</div>
		</div>
	</body>
</html>
