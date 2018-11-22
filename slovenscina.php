<!DOCTYPE html>
<html>
<head>

<title>UČBENIK</title>
<link rel="stylesheet" href="stil.css">
<link rel="stylesheet" href="slovenscina.css">


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

<div id="glavni1">
<div id="div1"><img id="slika1"  src="slovenscina/slo1.png" /></div>
<div id="div1"><img id="slika1"  src="slovenscina/slo3.png" /></div>
<div id="div1"><img id="slika1"  src="slovenscina/slo5.png" /></div>
<div id="div1"><img id="slika1"  src="slovenscina/slo7.png" /></div>
<div id="div1"><img id="slika1"  src="slovenscina/slo9.png" /></div>
</div>

<div id="glavni2">
<div id="div1"><img id="slika1"  src="slovenscina/slo2.png" /></div>
<div id="div1"><img id="slika1"  src="slovenscina/slo4.png" /></div>
<div id="div1"><img id="slika1"  src="slovenscina/slo6.png" /></div>
<div id="div1"><img id="slika1"  src="slovenscina/slo8.png" /></div>
<div id="div1"><img id="slika1"  src="slovenscina/slo10.png" /></div>
</div>

<div id="glavni3">
<div id="div1">

<div id="slika1" ><div id="odmik">1. vrsta</div></div>
<div id="slika1" ><div id="odmik">2. vrsta</div></div>
<div id="slika1" ><div id="odmik">3. vrsta</div></div>
<div id="slika1" ><div id="odmik">4. vrsta</div></div>
<div id="slika1" ><div id="odmik">5. vrsta</div></div>



</div>

</div>

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
