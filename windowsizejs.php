<!DOCTYPE html>
<html>
<head>
	<title>window size</title>
</head>

<form>
	<input type="button" name="button" id="windowsize" />
</form>
<p id="width"></p>
<p id="height"></p>
<p id="size"></p>
<body>
	<h2> mouse over the screen</h2>
	<p>
		X:<span id="x-value"></span>
	</p>
	<p>
		Y:<span id="y-value"></span>
	</p>		
	<script type="text/javascript">
		document.getElementById("width").innerHTML="<h3>window width is</h3> "+window.innerWidth + "<br>";
		document.getElementById("height").innerHTML="<h3>window height is</h3> "+window.innerHeight+"<br>";
		document.getElementById("size").innerHTML="<h3>window size is</h3> "+window.innerWidth * window.innerHeight +"<br>";

   window.addEventListener('mousemove', function (e) {
   	document.getElementById("x-value").textContent = e.x;
   	document.getElementById("y-value").textContent = e.y;
   })    
   


	</script>

</body>
</html>