<?

	//Parking Garage A if statement
	if (row->Intersection_Name == "Parking Garage A") {
		if (time < "10:00am") {
			//show green box div;
		} elseif ((time >= "10:00am") && (time <= "11:00am")) {
			//show yellow box div;
		} elseif ((time > "11:00am") && (time < "2:00pm")) {
			//show red box div;
		} elseif ((time >= "2:00pm") && (time < "3:00pm")) {
			//show yellow box div;
		} elseif (time >= "3:00pm" ) { 
			//show green box div;
		}
	}

	//Parking Garage I if statement
	if (row->Intersection_Name == "Parking Garage I") {
		if (time < "9:00am") {
			//show green box div;
		} elseif ((time >= "9:00am") && (time < "10:00am")) {
			//show yellow box div;
		} elseif ((time >= "10:00am") && (time <= "2:00am")) {
			//show red box div;
		} elseif ((time > "2:00am") && (time 
	}
?>