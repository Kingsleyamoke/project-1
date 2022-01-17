<!DOCTYPE html>
<html lang="en-us">
 <head>
	<meta charset="UTF-8">
		<title>KINGSLEY CALCULATOR</title>
		<link rel="stylesheet" href="bootstrap.min.css">
 </head>
	<body>
		<center>
		<?php 
		include "header.php";
		include "footer.php";
		echo "<hr />";
		?>
		<p class="text" style="color: purple; font-size: 20px"><u>Welcome to KINGSLEY'S calculator, <?php echo "today is " .date("l F jS Y");  ?></u></p>
		
		<div class="wrap">
			<form name="mycalc" method="get">
				<input type="text" name="num1" placeholder="Number 1" style="border-radius: 10px">&nbsp;
				<input type="text" name="num2" placeholder="Number 2" style="border-radius: 10px">
					<select name="operator">
						<option style="border-radius: 10px">Select</option>
						<option>Add</option>
						<option>Subtract</option>
						<option>Multiply</option>
						<option>Divide</option>
					</select><br/><br/>
					<button type="submit" name="submit" value="submit" class="btn btn-info">Calculate</button>
			</form>
			</div>
			
		<?php
			
		if (isset($_GET['submit'])){
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator){
		case "Select":
		echo "<b style='color:red'>" . "Please select a Mathematical operator!" ."</b>";
		break;
		case "Add":
		echo  $result1 + $result2;
		break;
		case "Subtract":
		echo $result1 - $result2;
		break;
		case "Multiply":
		echo $result1 * $result2;
		break;
		case "Divide":
		echo $result1 / $result2;
		break;
		}
		}
		?>
		</div>
		</center>
	</body>
</html>