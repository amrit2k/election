

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V6</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>EmanuelBlagonic.com &raquo; Playground &raquo; Creating menus</title>
<link rel="stylesheet"  type="text/css" href="build1.css">
<link href="drop-down-menu.css" type="text/css" rel="stylesheet" />
<script src="menu.js" type="text/javascript"></script>
<style type="text/css">
body {
	padding:20px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:62.5%;
	background:url(../art/bg-x-light-blue.gif) repeat-x top left;
}
#container {
	margin:50px auto;
	width:500px;
}
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="22.5867296" data-map-y="88.4170988" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<div id="container">

<!-- NAVIGATION -->
<form action="connectdb.php" method="post">
<ul id="menu">

	<li><a href="#">States</a>
		<ul>
			<li><a href="#">Bihar</a>
				<ul>
					<li><a href="#">Arrah</a>
					<ul>
						<input type="submit" value="Raj Kumar Singh" name="btn01" id="b01"><!--<li><a href="#" title="2003 projects">Ram Lal</a></li> -->
						<input type="submit" value="Meena Singh" name="btn02" id="b02"><!--<li><a href="#" title="2004 projects">Babu Gupta</a></li> -->
						<input type="submit" value="Rajiv Pratap Rudy" name="btn03" id="b03"><!--<li><a href="#" title="2005 projects">Raja Saheb</a></li>-->
					</ul>
				</li>
					<li><a href="#" >Buxar</a>
					<ul>
					<input type="submit" value="Ashwini Kumar Choubey" name="btn04" id="b04"><!--<a href="#" title="2003 projects">Mukesh</a></li> -->
					<input type="submit" value="Jagada Nand Singh" name="btn05" id="b05"><!--<a href="#" title="2004 projects">Mayank</a></li>-->
					<input type="submit" value="Ram Kripal Yadav" name="btn06" id="b06"><!--<a href="#" title="2005 projects">Babu Rao</a></li> -->
				</ul></li>
					<li><a href="#">Jamui</a>
					<ul>
					<input type="submit" value="Bhudeo Choudhary" name="btn07" id="b07"><!--<a href="#" title="2003 projects">Pawan Kumar</a></li> -->
					<input type="submit" value="Chirag Kumar Paswan" name="btn08" id="b08"><!--<a href="#" title="2004 projects">Aman Mehra</a></li> -->
					<input type="submit" value="Ram Vilas Paswan" name="btn09" id="b09"><!--<a href="#" title="2005 projects">Lal Govinda</a></li> -->
				</ul></li>
				</ul>
			</li>
			<li><a href="#">Rajsthan</a>
				<ul>
					<li><a href="#">Jaipur</a>
					<ul>
					<input type="submit" value="Ramcharan Bohara" name="btn1" id="b1"><!--<li><a href="#" title="2003 projects">Mukul Banerjee</a></li>-->
					<input type="submit" value="Mahesh Joshi" name="btn2" id="b2"><!--<li><a href="#" title="2004 projects">Debjit Das</a></li></button>-->
					<input type="submit" value="Bhupender Yadav" name="btn3" id="b3"><!--<li><a href="#" title="2005 projects">Joy Mukherjee</a></li></button> -->
				</ul></li>  
					<li><a href="#">Udaipur</a>
					<ul>
					<input type="submit" value="Arjunlal Meena" name="btn4" id="b4"><!--<li><a href="#" title="2003 projects">Rajiv Dutta</a></li>-->
					<input type="submit" value="Raghuvir Singh Meena" name="btn5" id="b5"><!--<li><a href="#" title="2004 projects">Aman Roy</a></li></button>-->
					<input type="submit" value="Narendra Budania" name="btn6" id="b6"><!--<li><a href="#" title="2005 projects">Indraneel</a></li></button>-->
				</ul></li>
					<li><a href="#">Alwar</a>
					<ul>
					<input type="submit" value="Chand Nath" name="btn7" id="b7"><!--<li><a href="#" title="2003 projects">Rayan</a></li></button> -->
					<input type="submit" value="Jitendra Singh" name="btn8" id="b8"><!--<li><a href="#" title="2004 projects">Das</a></li></button>-->
					<input type="submit" value="Ashk Ali Tak" name="btn9" id="b9"><!--<li><a href="#" title="2005 projects">Tapan</a></li></button> -->
				</ul></li>
				</ul>
			</li>
		</ul>
	</li>
	
</ul>
</form>
<!-- /NAVIGATION -->	

</div>

			
		</div>



	</div>




	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/build_main.js"></script>

 
</body>
</html>




