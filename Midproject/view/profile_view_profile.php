<?php
session_start();


/*if(!isset($_SESSION['active']))
{
    header('location: public.html');
}*/
//include_once('userloginheader.php');
$img = "";
	IF(isset($_SESSION['img'])){
		$img = $_SESSION['img'];
	}
?>



<!DOCTYPE html>
<html >
<head>
   
    <title>Dashboard</title>
</head>
<body>
    <table align="center" width='50%' border="1">
        <tr>
            <td>
                <h3>Account</h3>
                <hr>
                <ul>
                    <li><a href="createStore.php">Create Store</a></li>
                    <li><a href="viewstore.php">View Store</a></li>
                    <li><a href="chat.php">Chat</a></li>
                   
					<li><a href="notification.php">Notification</a></li>
					 <li><a href="payment.php">Payout</a></li>
                    <li><a href="profile_view_profile.php">View Profile</a></li>
                    <li><a href="profile_edit_profile.php">Edit Profile</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                   <!-- <li><a href="profile_change_pic.php">Change Profile Picture</a></li>-->
                   <!-- <li><a href="profile_change_pas.php">Change Password</a></li>-->
                    <li><a href="logout.php">Log Out</a></li>
                </ul>                
            </td>
            <td>
                Name :  <?php echo $_SESSION['name']; ?> <br>
                Email : <?php echo $_SESSION['email']; ?>  <br>
                Gender : <?php echo $_SESSION['gen']; ?>   <br>
               

                <a href="profile_edit_profile.php">Edit Profile</a>
            </td>
            <td>
			<img src="../assets/<?=$img?>" width="100px" height="100px"/>
                <form method="post" action="../php/imgCheck.php" enctype="multipart/form-data">
		<input type="file" name="mypic">
		<input type="submit" name="submit" value="upload">
	</form>
            </td>
        </tr>
    </table>
</body>
</html>

