<!DOCTYPE html>	
<html>
<head>
	<title>key events</title>
<style type="text/css" fontcolor="color">
   textbook;

</style>
</head>
	<body>
	<h3> key event</h3>
	<p>Press a key on the keyboard in the input field.</p>

<input type="text" id="textbox" size="40" onkeyup="myFunction(event)" />
<p id="demo1"></p>

<script>
function myFunction(event) {
  var x = event.key;
  var text = "";
  // document.getElementById("demo").innerHTML=  document.getElementById("textbox").value ;
   document.getElementById("demo1").style.fontWeight="1000";
  var colors = ["red","blue","green","pink","black","orange"];
  
  function getRandomcolors(max){
  	return Math.floor(Math.random()*Math.floor(max));
  }
       m=getRandomcolors(6);
       console.log(m);
   var a = document.getElementById("textbox").value;
   // for(i=0; i<a.length; i++){
    	text += '<span style="color: '+colors[m]+';">'+a+'</span>';
    	document.getElementById('demo1').innerHTML = text;
   //}			
}



   
</script>
</body>
</html>