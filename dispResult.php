<!DOCTYPE html>
<head>
</head>
<body background="election01.jpg">
	<div style="float: center; height: 200px; width: 900px; margin-top: 200px;">
		<form style="background-color: grey; height: 100px; width: 700px; margin-left: 350px; border-radius: 4px; border: 2px solid red"> <div style="margin-top: 35px; height: 60px; width: 500px; padding-left: 250px;">
			 <?php 
			#=================================== BIHAR/ARRAH ===========================================================# 
				   if(isset($_POST['ar'])) {
				    $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/rajkumarsingh');
				    $match1 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file1, $title1);
				  
				    $i1 = 0;
				    $stVal1 = array();
				    foreach ($title1[1] as $t1) {
				        $i1++;
				        $stVal1[$i1] = $t1;
				        if($i1 == 1)
				            break;

				    }

		//		       echo $stVal[1];
				     $string_file2 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/meenasingh');
				    $match2 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file2, $title2);
				  
				    $i2 = 0;
				    $stVal2 = array();
				    foreach ($title2[1] as $t2) {
				        $i2++;
				        $stVal2[$i2] = $t2;
				        if($i2 == 1)
				            break;

				    }
				    $string_file3 = file_get_contents('http://www.prsindia.org/mptrack/rajivprataprudyrs');
				    $match3 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file3, $title3);
				  
				    $i3 = 0;
				    $stVal3 = array();
				    foreach ($title3[1] as $t3) {
				        $i3++;
				        $stVal3[$i3] = $t3;
				        if($i3 == 1)
				            break;

				    }
				    $string_file = file_get_contents('http://www.prsindia.org/mptrack/rajivprataprudyrs');
				    $match3 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file3, $title3);
				  
				    $i3 = 0;
				    $stVal4 = array();
				    foreach ($title3[1] as $t3) {
				        $i3++;
				        $stVal4[$i3] = $t3;
				        if($i3 == 1)
				            break;

				    }
			    	$res = array();
			    	$res1[1] = $stVal1[1];
			    	$res1[2] = $stVal2[1];
			    	$res1[3] = $stVal3[1];
			    	$res1[4] = $stVal4[1];
			    	$max = -5;
			    	for($i = 1; $i <= 4; $i++) {
			    		if($res1[$i] >= $max)
			    			$max = $res1[$i];
			    	}
			   // 	echo $max;
			    	$con1 = mysqli_connect('localhost', 'root', '', 'election');
			    	$sql1 = mysqli_query($con1, "SELECT * FROM candidate WHERE Attendance='$max' AND address='Arrah'");
			    	$rows = mysqli_fetch_assoc($sql1);
			    //	$att1 = $rows['Attendance'];
			    	echo "<strong>" . $rows["candidate_name"] . "</strong>" . "<br>" . "is the ideal candidate with" . "<br>" . "<strong>". $rows["Attendance"] . "</strong>" . "% attendance in Lok Sabha sessions";

			  //  	if($rows["candidate_name"] != "Raj Kumar Singh") && $rows["age"] != "65" && $rows["address"] != "Arrah")
				//		echo "The name, age and address of the candidate are not correct";
			    }

	 #===========================================BIHAR/BUXAR=========================================#
			    else if(isset($_POST['bx'])) {

			    	$string_file4 = file_get_contents('http://www.prsindia.org/mptrack/ashwinikumarchoubey');
				    $match4 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file4, $title4);
				  
				    $i4 = 0;
				    $stVal4 = array();
				    foreach ($title4[1] as $t4) {
				        $i4++;
				        $stVal4[$i4] = $t4;
				        if($i4 == 1)
				            break;

				    }

		//		       echo $stVal[1];
				    $string_file5 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/jagadanandsingh');
				    $match5 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file5, $title5);
				  
				    $i5 = 0;
				    $stVal5 = array();
				    foreach ($title5[1] as $t5) {
				        $i5++;
				        $stVal5[$i5] = $t5;
				        if($i5 == 1)
				            break;

				    }
				    $string_file6 = file_get_contents('http://www.prsindia.org/mptrack/ramkripalyadavrs');
				    $match6 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file6, $title6);
				  
				    $i6 = 0;
				    $stVal6 = array();
				    foreach ($title6[1] as $t6) {
				        $i6++;
				        $stVal6[$i6] = $t6;
				        if($i6 == 1)
				            break;

				    }
				    $string_file6 = file_get_contents('http://www.prsindia.org/mptrack/cpthakur');
				    $match6 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file6, $title6);
				  
				    $i6 = 0;
				    $stVal7 = array();
				    foreach ($title7[1] as $t6) {
				        $i6++;
				        $stVal7[$i6] = $t6;
				        if($i6 == 1)
				            break;

				    }
			    	$res = array();
				    	$res2[1] = $stVal4[1];
				    	$res2[2] = $stVal5[1];
				    	$res2[3] = $stVal6[1];
				    	$res2[4] = $stVal7[1];
				    	$max = -5;
				    	for($i = 1; $i <= 4; $i++) {
				    		if($res2[$i] >= $max)
				    			$max = $res2[$i];
				    	}
				   // 	echo $max;
				    	$con1 = mysqli_connect('localhost', 'root', '', 'election');
				    	$sql1 = mysqli_query($con1, "SELECT * FROM candidate WHERE Attendance='$max' AND address='Buxar' ");
				    	$rows = mysqli_fetch_assoc($sql1);
				    //	$att1 = $rows['Attendance'];
				    	echo "<strong>" . $rows["candidate_name"] . "</strong>" . "<br>" . "is the ideal candidate with" . "<br>" . "<strong>". $rows["Attendance"] . "</strong>" . "% attendance in Lok Sabha sessions";
			    }

		#=============================BIHAR/JAMUI====================================================#
		      
		      else if(isset($_POST['jm'])) {

			    	 $string_file7 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/bhudeochoudhary');
				    $match7 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file7, $title7);
				  
				    $i7 = 0;
				    $stVal7 = array();
				    foreach ($title7[1] as $t7) {
				        $i7++;
				        $stVal7[$i7] = $t7;
				        if($i7 == 1)
				            break;

				    }

		//		       echo $stVal[1];
				     $string_file8 = file_get_contents('http://www.prsindia.org/mptrack/chiragkumarpaswan');
				    $match8 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file8, $title8);
				  
				    $i8 = 0;
				    $stVal8 = array();
				    foreach ($title8[1] as $t8) {
				        $i8++;
				        $stVal8[$i8] = $t8;
				        if($i8 == 1)
				            break;

				    }
				    $string_file9 = file_get_contents('http://www.prsindia.org/mptrack/ramvilaspaswanrs');
				    $match9 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file9, $title9);
				  
				    $i9 = 0;
				    $stVal9 = array();
				    foreach ($title9[1] as $t9) {
				        $i9++;
				        $stVal9[$i9] = $t9;
				        if($i9 == 1)
				            break;

				    }
				    $string_file9 = file_get_contents('http://www.prsindia.org/mptrack/harivansh');
				    $match9 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file9, $title9);
				  
				    $i9 = 0;
				    $stVal10 = array();
				    foreach ($title9[1] as $t9) {
				        $i9++;
				        $stVal9[$i9] = $t9;
				        if($i9 == 1)
				            break;

				    }

			    	$res3 = array();
				    	$res3[1] = $stVal7[1];
				    	$res3[2] = $stVal8[1];
				    	$res3[3] = $stVal9[1];
				    	$res3[4] = $stVal10[1];
				    	$max1 = -5;
				    	for($i = 1; $i <= 4; $i++) {
				    		if($res3[$i] >= $max1)
				    			$max1 = $res3[$i];
				    	}
				   // 	echo $max;
				    	$con1 = mysqli_connect('localhost', 'root', '', 'election');
				    	$sql1 = mysqli_query($con1, "SELECT * FROM candidate WHERE Attendance='$max1' AND address='Jamui' ");
				    	$rows = mysqli_fetch_assoc($sql1);
				    //	$att1 = $rows['Attendance'];
				    	echo "<strong>" . $rows["candidate_name"] . "</strong>" . "<br>" . "is the ideal candidate with" . "<br>" . "<strong>". $rows["Attendance"] . "</strong>" . "% attendance in Lok Sabha sessions";
			    }

		#=================================RAJASTHAN/JAIPUR=========================================#

				else if(isset($_POST['jp'])) {

			    	 $string_file7 = file_get_contents('http://www.prsindia.org/mptrack/ramcharanbohara');
				    $match7 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file7, $title7);
				  
				    $i7 = 0;
				    $stVal7 = array();
				    foreach ($title7[1] as $t7) {
				        $i7++;
				        $stVal7[$i7] = $t7;
				        if($i7 == 1)
				            break;

				    }

		//		       echo $stVal[1];
				     $string_file8 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/maheshjoshi');
				    $match8 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file8, $title8);
				  
				    $i8 = 0;
				    $stVal8 = array();
				    foreach ($title8[1] as $t8) {
				        $i8++;
				        $stVal8[$i8] = $t8;
				        if($i8 == 1)
				            break;

				    }
				    $string_file9 = file_get_contents('http://www.prsindia.org/mptrack/bhupenderyadav');
				    $match9 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file9, $title9);
				  
				    $i9 = 0;
				    $stVal9 = array();
				    foreach ($title9[1] as $t9) {
				        $i9++;
				        $stVal9[$i9] = $t9;
				        if($i9 == 1)
				            break;

				    }
				    $string_file9 = file_get_contents('http://www.prsindia.org/mptrack/ramnaraindudi');
				    $match9 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file9, $title9);
				  
				    $i9 = 0;
				    $stVal10 = array();
				    foreach ($title9[1] as $t9) {
				        $i9++;
				        $stVal10[$i9] = $t9;
				        if($i9 == 1)
				            break;

				    }
			    	$res3 = array();
				    	$res3[1] = $stVal7[1];
				    	$res3[2] = $stVal8[1];
				    	$res3[3] = $stVal9[1];
				    	$res3[4] = $stVal10[1];
				    	$max1 = -5;
				    	for($i = 1; $i <= 4; $i++) {
				    		if($res3[$i] >= $max1)
				    			$max1 = $res3[$i];
				    	}
				   // 	echo $max;
				    	$con1 = mysqli_connect('localhost', 'root', '', 'election');
				    	$sql1 = mysqli_query($con1, "SELECT * FROM candidate WHERE Attendance='$max1' AND address='Jaipur' ");
				    	$rows = mysqli_fetch_assoc($sql1);
				    //	$att1 = $rows['Attendance'];
				    	echo "<strong>" . $rows["candidate_name"] . "</strong>" . "<br>" . "is the ideal candidate with" . "<br>" . "<strong>". $rows["Attendance"] . "</strong>" . "% attendance in Lok Sabha sessions";
			    }	

	     #========================================RAJASTHAN/UDAIPUR========================================#


	     		else if(isset($_POST['udp'])) {

			    	 $string_file7 = file_get_contents('http://www.prsindia.org/mptrack/arjunlalmeena');
				    $match7 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file7, $title7);
				  
				    $i7 = 0;
				    $stVal7 = array();
				    foreach ($title7[1] as $t7) {
				        $i7++;
				        $stVal7[$i7] = $t7;
				        if($i7 == 1)
				            break;

				    }

		//		       echo $stVal[1];
				     $string_file8 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/raghuvirsinghmeena');
				    $match8 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file8, $title8);
				  
				    $i8 = 0;
				    $stVal8 = array();
				    foreach ($title8[1] as $t8) {
				        $i8++;
				        $stVal8[$i8] = $t8;
				        if($i8 == 1)
				            break;

				    }
				    $string_file9 = file_get_contents('http://www.prsindia.org/mptrack/narendrabudania');
				    $match9 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file9, $title9);
				  
				    $i9 = 0;
				    $stVal9 = array();
				    foreach ($title9[1] as $t9) {
				        $i9++;
				        $stVal9[$i9] = $t9;
				        if($i9 == 1)
				            break;

				    }
				    $string_file9 = file_get_contents('http://www.prsindia.org/mptrack/vpsinghbadnore');
				    $match9 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file9, $title9);
				  
				    $i9 = 0;
				    $stVal10 = array();
				    foreach ($title9[1] as $t9) {
				        $i9++;
				        $stVal10[$i9] = $t9;
				        if($i9 == 1)
				            break;

				    }
			    	$res3 = array();
				    	$res3[1] = $stVal7[1];
				    	$res3[2] = $stVal8[1];
				    	$res3[3] = $stVal9[1];
				    	$res3[4] = $stVal10[1];
				    	$max1 = -5;
				    	for($i = 1; $i <= 4; $i++) {
				    		if($res3[$i] >= $max1)
				    			$max1 = $res3[$i];
				    	}
				   // 	echo $max;
				    	$con1 = mysqli_connect('localhost', 'root', '', 'election');
				    	$sql1 = mysqli_query($con1, "SELECT * FROM candidate WHERE Attendance='$max1' AND address='Udaipur' ");
				    	$rows = mysqli_fetch_assoc($sql1);
				    //	$att1 = $rows['Attendance'];
				    	echo "<strong>" . $rows["candidate_name"] . "</strong>" . "<br>" . "is the ideal candidate with" . "<br>" . "<strong>". $rows["Attendance"] . "</strong>" . "% attendance in Lok Sabha sessions";
			    }	

		#====================================RAJASTHAN/ALWAR=======================================#

		    	else if(isset($_POST['al'])) {

			    	 $string_file7 = file_get_contents('http://www.prsindia.org/mptrack/chandnath');
				    $match7 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file7, $title7);
				  
				    $i7 = 0;
				    $stVal7 = array();
				    foreach ($title7[1] as $t7) {
				        $i7++;
				        $stVal7[$i7] = $t7;
				        if($i7 == 1)
				            break;

				    }

		//		       echo $stVal[1];
				     $string_file8 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/jitendrasingh');
				    $match8 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file8, $title8);
				  
				    $i8 = 0;
				    $stVal8 = array();
				    foreach ($title8[1] as $t8) {
				        $i8++;
				        $stVal8[$i8] = $t8;
				        if($i8 == 1)
				            break;

				    }
				    $string_file9 = file_get_contents('http://www.prsindia.org/mptrack/ashkalitak');
				    $match9 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file9, $title9);
				  
				    $i9 = 0;
				    $stVal9 = array();
				    foreach ($title9[1] as $t9) {
				        $i9++;
				        $stVal9[$i9] = $t9;
				        if($i9 == 1)
				            break;

				    }
				    $string_file9 = file_get_contents('http://www.prsindia.org/mptrack/vijaygoel');
				    $match9 = preg_match_all('/<td style="height: 15px; text-align: left" class="tdata">(.*)%<\/td>/', $string_file9, $title9);
				  
				    $i9 = 0;
				    $stVal10 = array();
				    foreach ($title9[1] as $t9) {
				        $i9++;
				        $stVal10[$i9] = $t9;
				        if($i9 == 1)
				            break;

				    }
			    	$res3 = array();
				    	$res3[1] = $stVal7[1];
				    	$res3[2] = $stVal8[1];
				    	$res3[3] = $stVal9[1];
				    	$res[3] = $stVal10[1];
				    	$max1 = -5;
				    	for($i = 1; $i <= 4; $i++) {
				    		if($res3[$i] >= $max1)
				    			$max1 = $res3[$i];
				    	}
				   // 	echo $max;
				    	$con1 = mysqli_connect('localhost', 'root', '', 'election');
				    	$sql1 = mysqli_query($con1, "SELECT * FROM candidate WHERE Attendance='$max1' AND address='Alwar' ");
				    	$rows = mysqli_fetch_assoc($sql1);
				    //	$att1 = $rows['Attendance'];
				    	echo "<strong>" . $rows["candidate_name"] . "</strong>" . "<br>" . "is the ideal candidate with" . "<br>" . "<strong>". $rows["Attendance"] . "</strong>" . "% attendance in Lok Sabha sessions";
			    }
    	?> </div>
		
		</form>
	</div>
   
</body>

						<!--------  THE END   ------------------- -->
</html>