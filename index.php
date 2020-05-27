
<!DOCTYPE HTML>
<html lang = "en_US">
<head>
	<style >
		body{
			background-image: url("img5");
			background-repeat:no-repeat;
       background-size:;
		}
	</style>
	<meta charset="UTF-8">
	<title >Student Management System</title>
</head>
<body body style="background-color:#7B68EE">
<h3 align = "right" style = "margin-right: 20px;"><a href = "login.php">Admin Login</a></h3>
<h1 align ="center" style="color: #800000";">Welcome to the Student Management System</h1>
<form method="post" action = "index.php">
<table style = "width: 50%" align="center" border="1">
<tr>
	<td colspan="2" align="center" style="background-color: #000; color: #fff">Student Information</td>
</tr>
<tr>
	<td align "right">Department</td>
	<td>
		<select name = "DID" required>
			<option value="D0001"> D0001</option>
			<option value="D0002"> D0002 </option>
			<option value="D0003"> D0003</option>
			<option value="D0004"> D0004</option>
			<option value="D0005"> D0005 </option>
			<option value="D0006">  D0006</option>
		</select>
	</td>
</tr>
<tr>
	<td>
		Enter RollNo.
	</td>
	<td>
		<input type="number" name="rollno" required>
	</td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value = "Show Info">
	</td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$DID = $_POST['DID'];
	$rollno = $_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($DID, $rollno);

}
?>

