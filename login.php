
<?php
session_start();
if(isset($_SESSION['uid']))
{header('location: admin/admindash.php');}
?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<title>
		Admin Login
	</title>
	<style >
		body{

			background-image: url(img6);
			background-repeat:no-repeat;
       		background-size:;
		}
	</style>
</head>
<body body style="background-color:#90EE90;">
	<h1 align="center" style="color: red;">Admin Login</h1>
	<form action = "login.php" method="post">
		<table align="center">
			<tr>
				<td>Username</td><td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type = "submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>

</html>

<?php
	include('dbcon.php');
	if(isset($_POST['login']))
	{
		$username =$_POST['uname'];
		$password = $_POST['pass'];
		$qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password' ";
		$run = mysqli_query($con, $qry);
		$row = mysqli_num_rows($run);
		if ($row <1)
		{
			?>
			<script>
				alert('username or password not match');
				window.open('login.php','_self');
			</script>
			<?php
		}
		else
		{
			$data = mysqli_fetch_assoc($run);
			$id = $data['id'];
			session_start();
			$_SESSION['uid'] = $id;
			header('location:admin/admindash.php');
		}
	}
?>