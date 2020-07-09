<?php


// function report_operation() {
	$connection = new mysqli("localhost", "root", "", "calc");
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
		$sql = "SELECT * FROM operations ";
		$result = $connection->query($sql);
		//var_dump($result);
		$calcs = $result->fetch_all();
		//var_dump($calcs);
		foreach ($calcs as $c) {
			//var_dump($c);
			//echo("<br />");
			if ($c[3] == "plus") 
				$znak = "+";
			elseif ($c[3] == "minus")
				$znak = "-";
			elseif ($c[3] == "multiply")
				$znak = "*";
			elseif ($c[3] == "divide")
				$znak = "/";
			echo($c[5]." : ".$c[1]." ".$znak." ".$c[2]." = ".$c[4]."<br />");
		}
	// }