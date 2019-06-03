<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>events</title>
</head>
<body >
	<p id="demo" ></p>
	<input id="elem" type="button" value="Click me"/>

<script>
elem.addEventListener("keyup", handler1);
function handler1() {
    alert('mouse moveover');
  }
elem.addEventListener("keyup", oncontextmenu);
  window.oncontextmenu = function () {
  alert('Right Click');
}  

// window.addEventListener("beforeunload", myfunction(event) { 
// function myfunction(event) {
// alert("are you sure to close");
//  })};

document.addEventListener("keydown", keyfunction);
function keyfunction(e) {
    alert(String.fromCharCode(e.keyCode));
  } 

      window.onbeforeunload = function() {
          return "Did you save your stuff?"
      }
    window.onbeforeunload = function (e) {
		e.preventDefault();
		e.returnValue = 'Test';
		return false;
	}


 //  var reallys = false;
 //  var allows = true;
 // function areYouSure() {
	// if (allows) {
	// 	if(!reallys && true){
	// 		reallys = true;
 //    var msg ="Are you sure to close this tab";	
	// return msg;
	// } 
	// } else {
	// 	allows = true;
	// }
	//  } 
	//  var allows = true;
	//  window.onbeforeunload = areYouSure;
</script>

</body>
</html>