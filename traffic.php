<!DOCTYPE html> 
<html> 
	<head> 
		<title>Traffic</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

       	<link rel="stylesheet" href="themes/project3_css.min.css" />
       	<link rel="stylesheet" href="themes/styles.css" />
	</head> 
	<body> 
		<div data-role="page" data-theme="a">
			<div class="parkingHeader" data-theme="a">
				<h1 class="headerTitleFont" data-role="header" data-theme="a"><img src = "pegasus2.gif" alt="icon"/>UCF Parking and Traffic Now</h1>
			</div>
			<div class="parkingMainNavigation" data-role="controlgroup"  data-type="horizontal" data-theme="a">
				<ul>
					<li><a href="home.php" data-role="button">Parking</a></li>
					<li><a href="traffic.php" data-role="button">Traffic</a></li>
				</ul>
			</div>
			<br />
            <br />
            <div class="mainContentContainer" data-theme="a">	
				<div class="individualButtonInfoContainer" data-theme="a">
					<a href="individualInfo.php" data-role="button" data-transition="slide">Alafaya and University</a>
				</div>
			</div>
		</div>
	</body>
</html>
