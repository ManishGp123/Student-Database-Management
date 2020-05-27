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


<table align="center">
<form action = "deletestudent.php" method = "post">

	<tr>
		<th>
			Enter RollNo
		</th>
	<td><input type="number" name ="rollno" placeholder="Enter RollNo"  required="required"/></td>
	<td colspan="2"> <input type="submit" name="submit" value="search" /></td>
</tr>
</form>
</table>

<table align="center" width="80%" border="1" style="margin-top: 10px;">
	<tr style="background-color: #000; color: #fff" >
		<th>ID</th>
		<th>Fname</th>
		<th>Mname</th>
		<th>Lname</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>City</th>
		<th>State</th>
		<th>Email</th>
		<th>PhoneNo</th>
		<th>Courses</th>
		<th>Edit</th>
		
	</tr>

<?php
	if(isset($_POST['submit']))
	{
		$rollno = $_POST['rollno'];
		include('../dbcon.php');
		$sql = "SELECT * FROM  `student` WHERE `id` = '$rollno'";
		$run = mysqli_query($con, $sql);
		if (mysqli_num_rows($run)<1)
		 {

			# code...
			echo "<tr><td colspan= '5'>No Records Found</td></tr>";
		}
		else
		{
			$count = 0;
			while ($data = mysqli_fetch_assoc($run)) 
			{
				$count++;
				?>
					
					<tr align="center">
						<td><?php echo $data['id'];?></td>
						<td><?php echo $data['f_name']; ?></td>
						<td><?php echo $data['m_name']; ?></td>
						<td><?php echo $data['l_name']; ?></td>
						<td><?php echo $data['DOB']; ?></td>
						<td><?php echo $data['Gender']; ?></td>
						<td><?php echo $data['City']; ?></td>
						<td><?php echo $data['State']; ?></td>
						<td><?php echo $data['Email_id']; ?></td>
						<td><?php echo $data['PhoneNo']; ?></td>
						<td><?php echo $data['Courses']; ?></td>
						<td><a href="deleteform.php?sid= <?php echo $data['id'];?>">Delete</a></td>
					</tr>
				</table>
				<?php
			}

		}
	}
?>
