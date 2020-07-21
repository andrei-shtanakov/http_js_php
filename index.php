<!DOCTYPE html>
<html>
<head>
	<title>Calculate</title>
	<style>
		.pressed {
			background-color: pink;
		}
	</style>
</head>
<body>

	<h1>Calculate on server</h1>
	<input type="text" id="x"/> <br />
	<input type="text" id="y"/> <br />
	<input type="submit" value="+" id="plusButton" onclick="plus()"; class = "pressed"/>
	<input type="submit" value="-" id="minusButton" onclick="minus()"; /> 
	<input type="submit" value="*" id="multiplyButton" onclick="multiply()"; />
	<input type="submit" value="/" id="divideButton" onclick="divide()"; /> <br />
	<input type="text" id="result"/>
	<div id="history"></div>

	<!-- <script src="calc.js" type="text/javascript"></script> -->
</body>
	<script src="calc.js" type="text/javascript"></script>
</html>
