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
<p id="demo"></p>
<p id="demo1"></p>

<script>
function myFunction(event) {
  var x = event.key;
  // document.getElementById("demo").innerHTML=  document.getElementById("textbox").value ;
   document.getElementById("demo1").style.fontWeight="1000";
  var colors =["red","blue","green","pink","black","orange"];
  // var y = document.getElementById("demo1")
  function getRandomcolors(max){
  	return Math.floor(Math.random()*Math.floor(max))
  }

  //console.log(getRandomcolors(6));
  // document.getElementById("demo1").style.color="getRandomcolors(6)";
  // y.innerHTML = Math.floor((Math.random() * colors[0]));
  // // console.log( y.innerHTML);
  //  var text = "";
  
   var a = document.getElementById("textbox").value;
   a.getRandomcolors(6)='["red","blue","green","pink","black","orange"]';
   console.log(a.getRandomcolors(6));
  
  //  var c = 0;	 
   
 
  //  for(i=0; i<a.length; i++){

  //  text += '<span style="color: '+colors[c]+';">'+a[i]+'</span>';
  //  c++;

  //  document.getElementById('demo1').innerHTML = text;
  //  }			
}


   
</script>
</body>
</html>