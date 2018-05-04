<!DOCTYPE html>
<head>
	<script>
		function openWin() {
    		window.open("result.php");
        }
        function openHome() {
    		window.open("build1.php");
        }
    </script>
</head>
<body>	
<form style="background-color: yellow; border: 2px solid red; height: 170px; position: absolute; width: 1250px; border-radius: 3px">	
<?php 
	
   // connection to the database server
   $con = mysqli_connect('localhost', 'root', '', 'election');
  
  //	mysqli_select_db($db, "election");


# ==============================WEST BENGAL STATE HERE=================================================#


//check if button is clicked
	
	if(isset($_POST['btn1'])) {

	//	echo "hello";
		 $sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Ramcharan Bohara' ");

		// $id, 'id';
		// $address, 'adr';
		

		 $rows = mysqli_fetch_assoc($sql);
		 $url = $rows["url"];
		 $pdf = $rows["pdf"];
		 if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
     } else {
			echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
//	 echo $rows["pdf"] . $rows["url"];
		}

		if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

	} else if(isset($_POST['btn2'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Mahesh Joshi' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
   } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
    }

    if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

	} else if(isset($_POST['btn3'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Bhupender Yadav' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
    } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
      }

} else if(isset($_POST['btn4'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Arjunlal Meena' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
   } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
   }

   if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn5'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Raghuvir Singh Meena' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
    } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
     }

     if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn6'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Narendra Budania' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
    } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
      }

     if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn7'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Chand Nath' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
   } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
     }

     if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn8'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Jitendra Singh' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
   } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $url . "'>" . $url . "</a></td>";
     }

     if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn9'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Ashk Ali Tak' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
    } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
      }

      if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} 


# =========================BIHAR STATE HERE====================================================#

if(isset($_POST['btn01'])) {

	//	echo "hello";
		 $sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Raj Kumar Singh' ");

		// $id, 'id';
		// $address, 'adr';
		

		 $rows = mysqli_fetch_assoc($sql);
		 $url = $rows["url"];
		 $pdf = $rows["pdf"];
		 if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
     } else {
			echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
//	 echo $rows["pdf"] . $rows["url"];
		}

		if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

	} else if(isset($_POST['btn02'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Meena Singh' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
   } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
    }

    if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

	} else if(isset($_POST['btn03'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Rajiv Pratap Rudy' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
    } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
      }

      if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn04'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Ashwini Kumar Choubey' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
   } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
   }

   if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn05'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Jagada Nand Singh' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
    } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
     }

     if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn06'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Ram Kripal Yadav' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
    } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
      }

} else if(isset($_POST['btn07'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Bhudeo Choudhary' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
   } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
     }

     if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn08'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Chirag Kumar Paswan' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) {
			echo "No records found!";
   } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $url . "'>" . $url . "</a></td>";
     }

     if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

} else if(isset($_POST['btn09'])) {
		$sql = mysqli_query($con, "SELECT * FROM candidate WHERE candidate_name = 'Ram Vilas Paswan' ");
		$rows = mysqli_fetch_assoc($sql);
		$url = $rows["url"];
		$pdf = $rows["pdf"];
		if(mysqli_num_rows($sql) == 0) 
{			echo "No records found!";
    } else {
		echo 'Candidate Name:' ." " . $rows["candidate_name"] . "<br>" . "<br>" .  'Age:' . " " . $rows["age"] . "<br>" . "<br>" . 'Address:' . " " . $rows["address"] . "<br>" . "<br>" .  'url:' . " " .  "<td><a href='" . $url . "'>" . $url . "</a></td>" . "<br>" . "<br>" .  'pdf:' . " " . "<td><a href='" . $pdf . "'>" . $pdf . "</a></td>";
      }

      if(isset($_POST['$pdf'])) {
			$file_pdf = "$pdf";
			header("Location: $file_pdf");
		}

		if(isset($_POST['$url'])) {
			$file_url = "$url";
			header("Location: $file_url");
		}

}
		
?>
<input type="submit" value="NEXT" name="predict" style="float:right; font-weight:bold;" onclick="openWin()">
<input type="submit" value="BACK" name="homescr" style="float:right; font-weight:bold; margin-right:50px" onclick="openHome()">

</form>
</body>
</html>


 