<!DOCTYPE html>
<head>
	<link rel="stylesheet"  type="text/css" href="predict.css">
</head>
<body background="election.jpg">
	<form id="fm" style="background-color:yellow; border:2px solid red; border-radius:6px">
		<h2 id="check" style="color:blue; text-align:center">Click to check results</h2>
	</form>
	<div style="float:left; margin-top: 50px;">
		<form style="height:500px; width: 450px; background-color:yellow; border: 2px solid red; border-radius: 4px;"
		      action="dispResult.php" method="post">
			<div style="width:450px; height:50px;">
				<h2 style="text-align:center">BIHAR<h2>
			</div>
			<div style="margin-left:70px; margin-top:40px; height: 300px; width: 100px">	
				<ul>
					<li><input type="submit" name="ar" value="Arrah" style="height:50px; width: 200px"></li></br></br>
					<li><input type="submit" name="bx" value="Buxar" style="height:50px; width: 200px"></li></br></br>
					<li><input type="submit" name="jm" value="Jamui" style="height:50px; width: 200px"></li>
				</ul>
			</div>	
		</form>
	</div>
	<div style="float:right; margin-top: 50px">
		<form style="height:500px; width: 450px; background-color:yellow; border: 2px solid red; border-radius: 4px;" action="dispResult.php" method="post">
			<div style="width:450px; height:50px;">
				<h2 style="text-align:center">RAJASTHAN<h2>
			</div>
			<div style="margin-left:70px; margin-top:40px; height: 300px; width: 100px">	
				<ul>
					<li><input type="submit" name="jp" value="Jaipur" style="height:50px; width: 200px"></li></br></br>
					<li><input type="submit" name="udp" value="Udaipur" style="height:50px; width: 200px"></li></br></br>
					<li><input type="submit" name="al" value="Alwar" style="height:50px; width: 200px"></li>
				</ul>
			</div>
		</form>
	</div>
	
</body>
</html>