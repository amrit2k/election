<!DOCTYPE html>
<head>
	<script>
		function whenClick() {
    		window.open("bxCandidate.php");
    	//	opener.location.href = "http://www.codechef.com";
    //	window.location.replace("http://www.w3schools.com");
}
	</script>
</head>
<body>
	<div style="float:right">
		<form style="width:700px; height:670px; background-color: yellow; border: 2px solid red; action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"">
			<div style="width:600px;">
				<h2 style="margin-left:150px; font-family:Arial; color:red;">INDEPENDENT CANDIDATE'S INFO</h2>
			<div>	
			<div style="position: absolute; top: 200px; margin-left: 250px;">
				<input type="text" name="name" placeholder="NAME" style="width:200px; border-radius:2px;"></br></br></br>
				<input type="text" name="age" placeholder="AGE" style="width:200px; border-radius:2px;"></br></br></br>
				<input type="text" name="address" placeholder="ADDRESS" style="width:200px; border-radius:2px;"></br></br></br>
				<input type="text" name="attendance" placeholder="ATTENDANCE" style="width:200px; border-radius:2px;"></br></br></br>
				<input type="text" name="extra_info" placeholder="EXTRA INFO" style="width:200px; height: 100px; border-radius:2px;"></br></br>
				<input type="submit" name="SUBMIT" style="width:100px; border-radius:2px; margin-top: 0px;">
				<input type="submit" name="newcd" value="NEW CANDIDATE" style="width:170px; border-radius:2px; margin-left:100px;" onclick="whenClick();">
			</div>
		</form>
		<form style="float:right; height:670px; width: 700px; position:absolute; top:5px; left:0;">
		<embed src="http://www.prsindia.org/mptrack/kctyagi" style="height:670px; width: 700px; ">
		</form>
	</div>
	<?php
		if(strpos($_SERVER['HTTP_USER_AGENT'],'Mediapartners-Google') !== false) {
        exit();
		}
		$con = mysqli_connect('localhost', 'root', '', 'election');
		if(isset($_POST['SUBMIT'])) {
			if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['address']) && isset($_POST['attendance'])) {
				$cn = $_POST['name'];
				$age = $_POST['age'];
				$addr = $_POST['address'];
				$att = $_POST['attendance'];
				$exin = $_POST['extra_info'];
				$sql = mysqli_query($con, "INSERT INTO candidate(candidate_name, age, address, Attendance) VALUE ('$cn', '$age', '$addr', '$att')");
			//	$sql = mysqli_query($con, "UPDATE table_name SET name = NULL WHERE name is not null");
				$sql1 = mysqli_query($con, "INSERT INTO independent_candidate(name, extra_info) VALUE('$cn', '$exin')");

			}
				 
			mysqli_close($con);
		}
//		$sql = mysqli_query($con, "UPDATE independent_candidate SET name = NULL WHERE name is not null");
	//	mysqli_close($con);
//	if(isset($_POST['newcd']))
  //  window.location.replace("https://stackoverflow.com/");
	?>
</body>
</html>