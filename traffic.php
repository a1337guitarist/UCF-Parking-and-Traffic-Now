<?
	require("db_connect.php");
	
	$today = date("G:i");

	$traffic_result = $mysqli->query("SELECT * FROM `traffic`");
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
					while ($row = $traffic_result->fetch_object()) {
						print "<div class=\"individualButtonInfoContainerTraffic\">";
							print "<a href=\"individualInfo.php?traffic=".$row->Traffic_Intersection."\" class=\"individualButtonLinkTraffic\"></a>";
							print "<p class=\"trafficIntersectionName\">".$row->Traffic_Intersection."</p>";
							print "<p class=\"status\">Status:</p>";
							if ($row->Traffic_Intersection == "University and Alafaya") {
								if ($today < "06:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "06:00") && ($today <= "07:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "07:00") && ($today < "08:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "08:00") && ($today <= "09:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "09:00") && ($today < "12:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "12:00") && ($today <= "13:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today > "13:00") && ($today < "17:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "17:00") && ($today <= "19:00")) {
									print "<div class=\"red\"></div>";
								} elseif ($today > "19:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Traffic_Intersection == "Gemini and Alafaya") {
								if ($today < "06:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "06:00") && ($today <= "07:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "07:00") && ($today < "08:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "08:00") && ($today <= "09:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "09:00") && ($today < "12:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "12:00") && ($today <= "13:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today > "13:00") && ($today < "17:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "17:00") && ($today <= "19:00")) {
									print "<div class=\"red\"></div>";
								} elseif ($today > "19:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Traffic_Intersection == "Central Florida and Alafaya") {
								if ($today < "06:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "06:00") && ($today <= "07:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "07:00") && ($today < "08:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "08:00") && ($today <= "09:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "09:00") && ($today < "12:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "12:00") && ($today <= "13:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today > "13:00") && ($today < "17:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "17:00") && ($today <= "19:00")) {
									print "<div class=\"red\"></div>";
								} elseif ($today > "19:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Traffic_Intersection == "Centaurus and Alafaya") {
								if ($today < "06:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "06:00") && ($today <= "07:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "07:00") && ($today < "08:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "08:00") && ($today <= "09:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "09:00") && ($today < "12:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "12:00") && ($today <= "13:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today > "13:00") && ($today < "17:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "17:00") && ($today <= "19:00")) {
									print "<div class=\"red\"></div>";
								} elseif ($today > "19:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Traffic_Intersection == "Research Pkwy and Alafaya") {
								if ($today < "06:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "06:00") && ($today <= "07:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "07:00") && ($today < "08:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today >= "08:00") && ($today <= "09:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "09:00") && ($today < "12:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "12:00") && ($today <= "13:00")) {
									print "<div class=\"red\"></div>";
								} elseif (($today > "13:00") && ($today < "17:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "17:00") && ($today <= "19:00")) {
									print "<div class=\"red\"></div>";
								} elseif ($today > "19:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Traffic_Intersection == "Libra Dr and Gemini") {
								if ($today < "06:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "06:00") && ($today <= "07:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "07:00") && ($today < "08:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "08:00") && ($today <= "09:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "09:00") && ($today < "12:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "12:00") && ($today <= "13:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "13:00") && ($today < "17:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "17:00") && ($today <= "19:00")) {
									print "<div class=\"red\"></div>";
								} elseif ($today > "19:00" ) { 
									print "<div class=\"green\"></div>";
								}
							} elseif ($row->Traffic_Intersection == "McCulloch Rd and Orion Blvd") {
								if ($today < "06:00") {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "06:00") && ($today <= "07:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today > "07:00") && ($today < "08:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "08:00") && ($today <= "09:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "09:00") && ($today < "12:00")) {
									print "<div class=\"yellow\"></div>";
								} elseif (($today >= "12:00") && ($today <= "13:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today > "13:00") && ($today < "17:00")) {
									print "<div class=\"green\"></div>";
								} elseif (($today >= "17:00") && ($today <= "19:00")) {
									print "<div class=\"red\"></div>";
								} elseif ($today > "19:00" ) { 
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
