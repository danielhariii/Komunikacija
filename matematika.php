<!DOCTYPE html>
<html>
<head>

<title>UČBENIK</title>
<link rel="stylesheet" href="stil.css">
<link rel="stylesheet" href="matematika.css">


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

<div class="glavni1">
<div class="div1"><img class="slika1"  src="matematika/matematika1.png" /></div>
<div class="div1"><img class="slika1"  src="matematika/matematika3.png" /></div>
<div class="div1"><img class="slika1"  src="matematika/matematika5.png" /></div>
<div class="div1"><img class="slika1"  src="matematika/matematika7.png" /></div>
<div class="div1"><img class="slika1"  src="matematika/matematika9.png" /></div>
</div>

<div class="glavni2">
<div class="div1"><img class="slika1"  src="matematika/matematika2.png" /></div>
<div class="div1"><img class="slika1"  src="matematika/matematika4.png" /></div>
<div class="div1"><img class="slika1"  src="matematika/matematika6.png" /></div>
<div class="div1"><img class="slika1"  src="matematika/matematika8.png" /></div>
<div class="div1"><img class="slika1"  src="matematika/matematika10.png" /></div>
</div>

<div class="glavni3">
<div class="div1">

<div class="slika1" ><div class="odmik">1. vrsta</div></div>
<div class="slika1" ><div class="odmik">2. vrsta</div></div>
<div class="slika1" ><div class="odmik">3. vrsta</div></div>
<div class="slika1" ><div class="odmik">4. vrsta</div></div>
<div class="slika1" ><div class="odmik">5. vrsta</div></div>



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
