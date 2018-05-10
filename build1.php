

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
						<?php
							//if(strpos($_SERVER['HTTP_USER_AGENT'],'Mediapartners-Google') !== false) {
       						//	 exit();
							//}
							 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/rajkumarsingh');
							 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
							 $i1 = 0;
				   			 $stVal1 = array();
				    		 foreach ($title1[1] as $t1) {
				        		 $i1++;
				        	 	$stVal1[$i1] = $t1; 
				        		if($i1 == 1)
				            	break;
				        	}
				        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
							 $i2 = 0;
				   			 $stVal2 = array();
				    		 foreach ($title2[1] as $t2) {
				        		 $i2++;
				        	 	$stVal2[$i2] = $t2; 
				        		if($i2 == 8)
				            	break;
				        	}
							
				       // 	 $con = mysqli_connect('localhost', 'root', '', 'election');
				        //	 $sql = mysqli_query($con, "INSERT INTO candidate(candidate_name, age, address, Attendance) VALUES('$stVal1[1]','$stVal2[8]', '$stVal2[1]', '97')");
				        //	 mysqli_close($con);
				       //		$sql = mysqli_query($con, "UPDATE candidates SET candidate_name = NULL WHERE candidate_name is not null");
				       	//	$sql = mysqli_query($con, "UPDATE candidates SET age = NULL WHERE age is not null");
				       	//	$sql = mysqli_query($con, "UPDATE candidates SET address = NULL WHERE address is not null");
				       	//	$sql = mysqli_query($con, "UPDATE candidates SET Attendance = NULL WHERE Attendance is not null");
						//    mysqli_close($con);
						?>

						<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn01" id="b01"><!--<li><a href="#" title="2003 projects">Ram Lal</a></li> -->
						<?php
							if(strpos($_SERVER['HTTP_USER_AGENT'],'Mediapartners-Google') !== false) {
       							 exit();
							}
							 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/meenasingh');
							 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
							 $i1 = 0;
				   			 $stVal1 = array();
				    		 foreach ($title1[1] as $t1) {
				        		 $i1++;
				        	 	$stVal1[$i1] = $t1; 
				        		if($i1 == 1)
				            	break;
				        	}
				//        	echo $stVal1[1];
				        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
							 $i2 = 0;
				   			 $stVal2 = array();
				    		 foreach ($title2[1] as $t2) {
				        		 $i2++;
				        	 	$stVal2[$i2] = $t2; 
				        		if($i2 == 6)
				            	break;
				        	}
				        //	 $con = mysqli_connect('localhost', 'root', '', 'election');
				        //	 $sql = mysqli_query($con, "INSERT INTO candidate(name, age, address, Attendance) VALUE('$stVal1[1]','$stVal2[6]', '$stVal2[1]', '87')");
				       // 	$sql = mysqli_query($con, "UPDATE candidates SET candidate_name = NULL WHERE candidate_name is not null");
				       	//	$sql = mysqli_query($con, "UPDATE candidates SET age = NULL WHERE age is not null");
				       	//	$sql = mysqli_query($con, "UPDATE candidates SET address = NULL WHERE address is not null");
				       	//	$sql = mysqli_query($con, "UPDATE candidates SET Attendance = NULL WHERE Attendance is not null");
				        //	 mysqli_close($con);
						?>
						<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn02" id="b02"><!--<li><a href="#" title="2004 projects">Babu Gupta</a></li> -->
						<?php
							 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/rajivprataprudyrs');
							 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
							 $i1 = 0;
				   			 $stVal1 = array();
				    		 foreach ($title1[1] as $t1) {
				        		 $i1++;
				        	 	$stVal1[$i1] = $t1; 
				        		if($i1 == 1)
				            	break;
				        	}
				//        	echo $stVal1[1];
				        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
							 $i2 = 0;
				   			 $stVal2 = array();
				    		 foreach ($title2[1] as $t2) {
				        		 $i2++;
				        	 	$stVal2[$i2] = $t2; 
				        		if($i2 == 7)
				            	break;
				        	}
				       // 	$con = mysqli_connect('localhost', 'root', '', 'election');
				        //	 $sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[7]', 'Arrah', '56')");
				        //	 mysqli_close($con);
						?>
						<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn03" id="b03"><!--<li><a href="#" title="2005 projects">Raja Saheb</a></li>-->
					</ul>
				</li>
					<li><a href="#" >Buxar</a>
					<ul>
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/ashwinikumarchoubey');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
							 $i2 = 0;
				   			 $stVal2 = array();
				    		 foreach ($title2[1] as $t2) {
				        		 $i2++;
				        	 	$stVal2[$i2] = $t2; 
				        		if($i2 == 8)
				            	break;
				        	}
				      //  	$con = mysqli_connect('localhost', 'root', '', 'election');
				        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[8]', '$stVal2[1]', '93')");
				        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn04" id="b04"><!--<a href="#" title="2003 projects">Mukesh</a></li> -->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/jagadanandsingh');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 6)
			            	break;
			        	}
			        //	$con = mysqli_connect('localhost', 'root', '', 'election');
			        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[6]', '$stVal2[1]', '95')");
			        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn05" id="b05"><!--<a href="#" title="2004 projects">Mayank</a></li>-->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/ramkripalyadavrs');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 7)
			            	break;
			        	}
			        //	$con = mysqli_connect('localhost', 'root', '', 'election');
			        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[7]', 'Buxar', '95')");
			        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn06" id="b06"><!--<a href="#" title="2005 projects">Babu Rao</a></li> -->
				</ul></li>
					<li><a href="#">Jamui</a>
					<ul>
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/bhudeochoudhary');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 6)
			            	break;
			        	}
			        //	$con = mysqli_connect('localhost', 'root', '', 'election');
			        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[6]', '$stVal2[1]', '86')");
			        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn07" id="b07"><!--<a href="#" title="2003 projects">Pawan Kumar</a></li> -->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/chiragkumarpaswan');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 8)
			            	break;
			        	}
			        //	$con = mysqli_connect('localhost', 'root', '', 'election');
			        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[8]', '$stVal2[1]', '93')");
			        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn08" id="b08"><!--<a href="#" title="2004 projects">Aman Mehra</a></li> -->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/ramvilaspaswanrs');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 7)
			            	break;
			        	}
			        //	$con = mysqli_connect('localhost', 'root', '', 'election');
			        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[7]', 'Jamui', '76')");
			        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn09" id="b09"><!--<a href="#" title="2005 projects">Lal Govinda</a></li> -->
				</ul></li>
				</ul>
			</li>
			<li><a href="#">Rajsthan</a>
				<ul>
					<li><a href="#">Jaipur</a>
					<ul>
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/ramcharanbohara');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 8)
			            	break;
			        	}
			        //	$con = mysqli_connect('localhost', 'root', '', 'election');
			        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[8]', '$stVal2[1]', '88')");
			        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn1" id="b1"><!--<li><a href="#" title="2003 projects">Mukul Banerjee</a></li>-->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/maheshjoshi');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 6)
			            	break;
			        	}
			        //	$con = mysqli_connect('localhost', 'root', '', 'election');
			        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[6]', '$stVal2[1]', '95')");
			        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn2" id="b2"><!--<li><a href="#" title="2004 projects">Debjit Das</a></li></button>-->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/bhupenderyadav');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 7)
			            	break;
			        	}
			        //	$con = mysqli_connect('localhost', 'root', '', 'election');
			        //	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[7]', 'Jaipur', '81')");
			        //	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn3" id="b3"><!--<li><a href="#" title="2005 projects">Joy Mukherjee</a></li></button> -->
				</ul></li>  
					<li><a href="#">Udaipur</a>
					<ul>
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/arjunlalmeena');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 8)
			            	break;
			        	}
			        	$con = mysqli_connect('localhost', 'root', '', 'election');
			        	$sql = mysqli_query($con, "INSERT INTO cinfo(name, age, address, attendance) VALUE('$stVal1[1]','$stVal2[8]', 'Jaipur', '81')");
			        	mysqli_close($con);
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn4" id="b4"><!--<li><a href="#" title="2003 projects">Rajiv Dutta</a></li>-->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/raghuvirsinghmeena');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 6)
			            	break;
			        	}
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn5" id="b5"><!--<li><a href="#" title="2004 projects">Aman Roy</a></li></button>-->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/narendrabudania');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 6)
			            	break;
			        	}
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn6" id="b6"><!--<li><a href="#" title="2005 projects">Indraneel</a></li></button>-->
				</ul></li>
					<li><a href="#">Alwar</a>
					<ul>
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/chandnath');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 6)
			            	break;
			        	}
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn7" id="b7"><!--<li><a href="#" title="2003 projects">Rayan</a></li></button> -->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/jitendrasingh');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 6)
			            	break;
			        	}
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>" name="btn8" id="b8"><!--<li><a href="#" title="2004 projects">Das</a></li></button>-->
					<?php
						 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/ashkalitak');
						 $match1 = preg_match_all('/<h4>(.*)<\/h4>/', $string_file1, $title1);
						 $i1 = 0;
			   			 $stVal1 = array();
			    		 foreach ($title1[1] as $t1) {
			        		 $i1++;
			        	 	$stVal1[$i1] = $t1; 
			        		if($i1 == 1)
			            	break;
			        	}
				//        	echo $stVal1[1];
			        	$match2 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title2);
						 $i2 = 0;
			   			 $stVal2 = array();
			    		 foreach ($title2[1] as $t2) {
			        		 $i2++;
			        	 	$stVal2[$i2] = $t2; 
			        		if($i2 == 6)
			            	break;
			        	}
					?>
					<input type="submit" value="<?php echo $stVal1[1] ?>k" name="btn9" id="b9"><!--<li><a href="#" title="2005 projects">Tapan</a></li></button> -->
				</ul></li>
				</ul>
			</li>
		</ul>
	</li>
	
</ul>
</form>
<div style="margin-left: 200px;">
	<form action="newCandidate.php" method="POST">
		<input type="submit" value="Independent Candidates" name="ic" style="background-color: yellow; border-radius: 2px; width: 250px;">
	</form>
</div>
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




