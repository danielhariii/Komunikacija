<!DOCTYPE html>
<html>
<head>

<title>UČBENIK</title>
<link rel="stylesheet" href="stil.css">
<link rel="stylesheet" href="stil2.css">


</head>
<body>


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   
	<a href="<?php echo 'index.php'; ?>">Novosti</a>
	<a href="<?php echo 'matematika.php'; ?>">Matematika </a>
    <a href="<?php echo 'slovenscina.php'; ?>">slovenščina</a>
    <a href="<?php echo 'fizika.php'; ?>">fizika</a>
    <a href="<?php echo 'glasba.php'; ?>">glasba</a>
	
	
  </div>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<div id="primer1" ></br>spremljajte naš spletni učbenik</br></br></br> “Don’t only practice your art, </br>but force your way into its secrets, </br>for it and knowledge can raise men to the divine.”</br></br>― Ludwig van Beethoven</br></br></div>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
function drek() {
$(document).ready(function(){
    $("sign_up").click(function(){
        alert("The paragraph was clicked.");
    });
});}
</script>
     
</body>
</html>
