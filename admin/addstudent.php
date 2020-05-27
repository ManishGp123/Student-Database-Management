<?php
session_start();
if(isset($_SESSION['uid']))

{
	# code...
	echo "";
}
else 
{
	header('location: ../login.php');
}
?>

<?php
	include('header.php');
	include('titlehead.php');

?>
<form method="post" action="addstudent.php">
	<table align="center" border="1" style="width: 70%; margin-top: 40px;" >
		<tr>
			<th>Roll No</th>
			<td> <input type="number"  name="id" placeholder= "Enter RollNo" required></td>
		</tr>
		<tr>
			<th>First Name</th>
			<td> <input type="text"  name="f_name" placeholder= "Enter First Name" required></td>
		</tr>
		<tr>
			<th>Middle Name</th>
			<td> <input type="text"  name="m_name" placeholder= "Enter Middle Name" required></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td> <input type="text"  name="l_name" placeholder= "Enter Last Name" required></td>
		</tr>
		<tr>
			<th>Birth Date</th>
			<td> <input type="Date"  name="DOB" placeholder= "Enter Date of Birth" required></td>
		</tr>
		<tr>
			<th>Gender</th>
			<td> Male <input type="radio" name="Gender" value="male" checked="checked"/>
      	Female <input type="radio" name="Gender" value="female"/>
      	Other <input type="radio" name="Gender" value="Other"/></td>
		</tr>
		<tr>
			<th>City</th>
			<td> <input type="text"  name="City" placeholder= "Enter city" required></td>
		</tr>
		<tr>
			<th>State Name</th>
			<td> <input type="text"  name="State" placeholder= "Enter state name" required></td>
		</tr>
		<tr>
			<th>Department Name</th>
			<td>
			<select name = "D_name" required>
				<option value="Civil"> Civil</option>
				<option value="Computer Science Engineering"> Computer Science Engineering </option>
				<option value="Eectrical & Communication"> Eectrical & Communication</option>
				<option value="Electrical Engineering"> Electrical Engineering</option>
				<option value="Energy"> Energy </option>
				<option value="Food Engineering"> Food Engineering </option>
				<option value="Mechanical"> Mechanical Engineering </option>
			</select>
			</td>
		</tr>
		<tr>
			<th>Department Id</th>
			<td>
			<select name = "D_id" required>
				<option value="D0001"> D0001</option>
				<option value="D0002"> D0002 </option>
				<option value="D0003"> D0003</option>
				<option value="D0004"> D0004</option>
				<option value="D0005"> D0005 </option>
				<option value="D0006">  D0006</option>
				<option value="D0007">  D0007</option>
			</select>
			</td>
		</tr>
		<tr>
			<th>Email Id</th>
			<td> <input type="text"  name="Email_id" placeholder= "Enter your valid Email" required></td>
		</tr>
		<tr>
			<th>Project Id</th>
			<td> <input type="number"  name="P_id" placeholder= "Enter all project id with comma" required></td>
		</tr>
		<tr>
			<th>Phone Number</th>
			<td> <input type="text"  name="PhoneNo" placeholder= "Enter Mobile Number" required></td>
		</tr>
		<tr>
			<th>Registerd course</th>
			<td> <input type="text"  name="Courses" placeholder= "Enter all courses with comma" required></td>
		</tr>
		<tr>
			
			<td colspan = "2" align="center"> <input type =submit name = "submit" value = "Submit"></td>
		</tr>

	</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$ID = $_POST['id'];
	$Fname = $_POST['f_name'];
	$Mname = $_POST['m_name'];
	$Lname = $_POST['l_name'];
	$Bdate =$_POST['DOB'];
	$G = $_POST['Gender'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$Did = $_POST['D_id'];
	$Email_id = $_POST['Email_id'];
	$pid = $_POST['P_id'];
	$Phone = $_POST['PhoneNo'];
	$Courses = $_POST['Courses'];
	$D_name = $_POST['D_name'];
	$qry ="INSERT INTO `student`(`id`, `f_name`, `m_name`, `l_name`, `DOB`, `Gender`, `City`, `State`, `D_id`, `Email_id`, `P_id`, `PhoneNo`, `Courses`, `D_name`) VALUES ('$ID', '$Fname', '$Mname', '$Lname','$Bdate','$G', '$City','$State', '$Did', '$Email_id', '$pid', '$Phone','$Courses','$D_name')";
	$run = mysqli_query($con, $qry);
	if($run == true)
	{
		?>
		<script>
			alert('Data inserted succesfully.');
		</script>
		<?php
	}
}
?>
