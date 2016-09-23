<br>
<hr>
<br>
<br>
<br>
<div align="center">
<?php
	if(!empty($_GET)){
		//for get the city data
		$country = 'ina';
		$city = $_GET['city'];
		
	    //for get the city data


		// connecting to API fo sent  search value the city 
		$api_url = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&APPID=797adee60b4fb6626882b4ba41d61f4a";
		// APPID is API Key for my get after I  make acount in openweathermap.org
		$weather_data = file_get_contents($api_url);
		$json = json_decode($weather_data, TRUE);
		// connecting to API fo sent  search value the city 


		// Get Info weather from API with search request value the city 
		$conditions 	=	$json['weather'][0]['main'];// Weather Condition
		// Get Info weather from API with search request value the city 
		

		//displayed weather info in the main wen
		$date = date("d M Y");
		echo "The weather of ".$city." at ".$date." is ".$conditions."<br>";

		//displayed weather info in the main wen

	}

?>
</div>
<br>
<hr>
