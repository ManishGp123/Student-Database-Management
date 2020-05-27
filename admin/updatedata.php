<?php
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
	$id = $_POST['sid'];
	$qry ="UPDATE `student` SET `id`='$ID', `f_name` = '$Fname',`m_name` = '$Mname' ,`l_name` = '$Lname',`DOB` = '$Bdate',
	`Gender` = '$G', `City` = '$City', `State` = '$State', `D_id` = '$Did', `Email_id` = '$Email_id', `P_id` = '$pid', `PhoneNo` = '$Phone', `Courses` = '$Courses', `D_name` = '$D_name' WHERE `id` = '$id' ";
	$run = mysqli_query($con, $qry);
	if($run == true)
	{
		?>
		<script>
			alert('Data Updated Succesfully.');
			window.open('updateform.php? sid= <?php echo $id;?>', '_self');
		</script>
		<?php
	}

?>