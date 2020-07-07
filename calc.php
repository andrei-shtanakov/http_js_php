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
//	echo $op_x;
	echo $result
//	echo "<document.getElementById("result").value = result;>"


?>