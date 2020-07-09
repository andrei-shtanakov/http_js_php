<?php
	$op_x = !empty($_REQUEST['op_x']) ? $_REQUEST['op_x'] : 0;
	$op_y = !empty($_REQUEST['op_y']) ? $_REQUEST['op_y'] : 0;
	$operator = !empty($_REQUEST['operator']) ? $_REQUEST['operator'] : "";
	$result = 0;
	// $op_x = $_REQUEST["op_x"];
	// $op_y = $_REQUEST["op_y"];
	if ($operator == 'plus') {
		$result = $op_x + $op_y;
		// echo($op_x." + ".$op_y." = ".$result);
	}
	elseif ($operator == 'minus') {
		$result = $op_x - $op_y;
		// echo($op_x." - ".$op_y." = ".$result);
	}
	elseif ($operator == 'multiply') {
		$result = $op_x * $op_y;
		// echo($op_x." * ".$op_y." = ".$result);
	}
	elseif ($operator == 'divide') {
		$result = $op_x / $op_y;
		// echo($op_x." / ".$op_y." = ".$result);
	}
	else {
		echo("Bad operator");
	}


	$connection = new mysqli("localhost", "root", "", "calc");
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	$sql = "INSERT INTO operations(op_x, op_y, operator,  result)
	        VALUES($op_x, $op_y, '$operator', $result) "; 
	$connection->query($sql);




//	echo $op_x;
	echo $result
//	echo "<document.getElementById("result").value = result;>"


?>