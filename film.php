<?php

require_once 'header.php';
require_once 'menu.php';

?>

<button type="button" onclick="myFunctionFr()" class="btn film" data-toggle="collapse" data-target="#demo_fr">FRANÇAIS</button>
<button  type="button" onclick="myFunctionEn()" class="btn film" data-toggle="collapse" data-target="#demo_en">ENGLISH</button>
<button type="button" onclick="myFunctionGr()" class="btn film" data-toggle="collapse" data-target="#demo_gr">GREEK</button>

<div id="demo_fr" class="embed-responsive embed-responsive-16by9 collapse">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/IAhZbFxXq6M" frameborder="0" allowfullscreen></iframe>
</div>

<div id="demo_en" class="embed-responsive embed-responsive-16by9 collapse" style="display: none;">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/POO2F-guOhg" frameborder="0" allowfullscreen></iframe>
</div>

<div id="demo_gr" class="embed-responsive embed-responsive-16by9 collapse" style="display: none;">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/tbb7B0W6D3A" frameborder="0" allowfullscreen></iframe>
</div>

<script>
	function myFunctionEn() {
	document.getElementById("demo_en").style.display = "block";
	document.getElementById("demo_gr").style.display = "none";
	document.getElementById("demo_fr").style.display = "none";
	}
	function myFunctionFr() {
	document.getElementById("demo_en").style.display = "none";
	document.getElementById("demo_gr").style.display = "none";
	document.getElementById("demo_fr").style.display = "block";
	}
	function myFunctionGr() {
	document.getElementById("demo_en").style.display = "none";
	document.getElementById("demo_gr").style.display = "block";
	document.getElementById("demo_fr").style.display = "none";
	}
</script>




<?php

require_once 'footer.php';

?>