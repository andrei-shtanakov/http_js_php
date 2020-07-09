		function post_request(x,y,o,it) {

			let op_x = x;
			let op_y = y;
			let operator = o;
			let result = '0';


			const request = new XMLHttpRequest();

			const url = "calc.php?op_x=" + op_x + "&op_y=" + op_y + "&operator=" + operator + "&result=" + result;

			request.open('GET', url);
			request.setRequestHeader("Content-Type", "application/x-www-form-url");

			request.addEventListener("readystatechange", () => {
				if (request.readyState === 4 && request.status === 200) {
					let obj = request.response;
					document.getElementById("result").value = obj;
					// document.getElementById("history").innerHTML = 
					// 	document.getElementById("history").innerHTML + "<br />" + it + obj;

					console.log(obj);
				}
			} )


			request.send();
			request.responseText;

			history_request(10);


		}
//*********************************************************

		function history_request(max_count) {


			const request = new XMLHttpRequest();

			const url = "work_db.php?max_count=" + max_count;

			request.open('GET', url);
			request.setRequestHeader("Content-Type", "application/x-www-form-url");

			request.addEventListener("readystatechange", () => {
				if (request.readyState === 4 && request.status === 200) {
					let obj = request.response;
					document.getElementById("history").innerHTML = obj;
					// document.getElementById("history").innerHTML = 
					// 	document.getElementById("history").innerHTML + "<br />" + it + obj;

					console.log(obj);
				}
			} )


			request.send();
			request.responseText;



		}
//*********************************************************


		function plus() {
			var x;
			x = document.getElementById("x").value;
			var y = document.getElementById("y").value;
			// var z = parseFloat(x) + parseFloat(y);
			var item = x + "+" + y + "=";
			post_request(x,y,'plus',item);
			document.getElementById("plusButton").className = "pressed";			
			document.getElementById("minusButton").className = "";
			document.getElementById("multiplyButton").className = "";
			document.getElementById("divideButton").className = "";	
		}
		function minus() {
			var x;
			x = document.getElementById("x").value;
			var y = document.getElementById("y").value;
//			var z = parseFloat(x) - parseFloat(y);
			var item = x + "-" + y + "=" ;
			post_request(x,y,'minus',item);
			document.getElementById("plusButton").className = "";			
			document.getElementById("minusButton").className = "pressed";			
			document.getElementById("multiplyButton").className = "";
			document.getElementById("divideButton").className = "";	
		}
		function multiply() {
			var x;
			x = document.getElementById("x").value;
			var y = document.getElementById("y").value;
//			var z = parseFloat(x) - parseFloat(y);
			var item = x + "*" + y + "=" ;
			post_request(x,y,'multiply',item);
			document.getElementById("plusButton").className = "";			
			document.getElementById("minusButton").className = "";
			document.getElementById("multiplyButton").className = "pressed";	
			document.getElementById("divideButton").className = "";	
		}
		function divide() {
			var x;
			x = document.getElementById("x").value;
			var y = document.getElementById("y").value;
//			var z = parseFloat(x) - parseFloat(y);
			var item = x + "/" + y + "=" ;
			post_request(x,y,'divide',item);
			document.getElementById("plusButton").className = "";			
			document.getElementById("minusButton").className = "";
			document.getElementById("multiplyButton").className = "";
			document.getElementById("divideButton").className = "pressed";	
		}