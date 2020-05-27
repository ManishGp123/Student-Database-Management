<?php

function showdetails($DID, $rollno)
	{
		include('dbcon.php');
		$sql = "SELECT * FROM `student` WHERE `id` = '$rollno' AND `D_id` = '$DID'";
		$run = mysqli_query($con, $sql);
		if (mysqli_num_rows($run) == true)
		{
			$data = mysqli_fetch_assoc($run);
			?>
			<table border="1" style="width: 80%; margin-top: 20px" align="center" >
				<tr style="background-color: #000; color: #fff">
					<th colspan="2"> Student Details</th>

				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>Roll No</th>
					<td><?php echo $data['id'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>FName</th>
					<td><?php echo $data['f_name'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>MName</th>
					<td><?php echo $data['m_name'];?></td>
				</tr">
				<tr style="background-color: #00FA9A; color: #000">
					<th>LName</th>
					<td><?php echo $data['l_name'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>Date of Birth</th>
					<td><?php echo $data['DOB'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>Gender</th>
					<td><?php echo $data['Gender'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>City</th>
					<td><?php echo $data['City'];?></td>
				</tr>

				<tr style="background-color: #00FA9A; color: #000">
					<th>State</th>
					<td><?php echo $data['State'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>Department ID</th>
					<td><?php echo $data['D_id'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>Department Name</th>
					<td><?php echo $data['D_name'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>Email id</th>
					<td><?php echo $data['Email_id'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>Project Id</th>
					<td><?php echo $data['P_id'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>PhoneNo</th>
					<td><?php echo $data['PhoneNo'];?></td>
				</tr>
				<tr style="background-color: #00FA9A; color: #000">
					<th>Course Registerd</th>
					<td><?php echo $data['Courses'];?></td>
				</tr>

			</table>
			<?php
		}
		else 
		{
				echo "<script>alert('No Student Found');</script>";
		}
	}

?>
