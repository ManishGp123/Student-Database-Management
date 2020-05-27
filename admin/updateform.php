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
	include('../dbcon.php');
	$sid = $_GET['sid'];
	$sql = "SELECT * FROM student WHERE id ='$sid'";
	$run = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($run);
	
?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 70%; margin-top: 40px;" >
		<tr>
			<th>Roll No</th>
			<td> <input type="number"  name="id"value =<?php echo $data['id'];?> required></td>
		</tr>
		<tr>
			<th>First Name</th>
			<td> <input type="text"  name="f_name" value =<?php echo $data['f_name'];?> required></td>
		</tr>
		<tr>
			<th>Middle Name</th>
			<td> <input type="text"  name="m_name" value =<?php echo $data['m_name'];?> required></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td> <input type="text"  name="l_name" value =<?php echo $data['l_name'];?> required></td>
		</tr>
		<tr>
			<th>Birth Date</th>
			<td> <input type="Date"  name="DOB" value =<?php echo $data['DOB'];?> required></td>
		</tr>
		<tr>
			<th>Gender</th>
			<td> Male <input type="radio" name="Gender" value="male" checked="checked"/>
      	Female <input type="radio" name="Gender" value="female"/>
      	Other <input type="radio" name="Gender" value="Other"/></td>
		</tr>
		<tr>
			<th>City</th>
			<td> <input type="text"  name="City" value =<?php echo $data['City'];?> required></td>
		</tr>
		<tr>
			<th>State Name</th>
			<td> <input type="text"  name="State" value =<?php echo $data['State'];?> required></td>
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
			<td> <input type="text"  name="Email_id" value =<?php echo $data['Email_id'];?> required></td>
		</tr>
		<tr>
			<th>Project Id</th>
			<td> <input type="number"  name="P_id" value =<?php echo $data['P_id'];?> required></td>
		</tr>
		<tr>
			<th>Phone Number</th>
			<td> <input type="text"  name="PhoneNo" value =<?php echo $data['PhoneNo'];?> required></td>
		</tr>
		<tr>
			<th>Registerd course</th>
			<td> <input type="text"  name="Courses" value =<?php echo $data['Courses'];?> required></td>
		</tr>
		<tr>
			
			<td colspan = "2" align="center">
				<input type="hidden" name = "sid" value="<?php echo $data['id']?>">
				<input type =submit name = "submit" value = "Submit"></td>
		</tr>

	</table>
</form>