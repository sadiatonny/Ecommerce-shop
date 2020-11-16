<?php
session_start();

if(!isset($_SESSION['active']))
{
    header('location: public.html');
}
/*
include_once('userloginheader.php');*/
?>



<!DOCTYPE html>
<html >
<head>
    
    <title>Dashboard</title>
</head>
<body>
    <form method="POST" action="profile_edit_check.php">
        <table align="center" width='50%' border="1">
            <tr>
                <td>
                    <h3>Account</h3>
                    <hr>
                    <ul>
                         <li><a href="createStore.php">Create Store</a></li>
                    <li><a href="viewstore.php">View Store</a></li>
					<li><a href="vieworder.php">View Order</a></li>
                    <li><a href="chat.php">Chat</a></li>
                    <li><a href="notification.php">Notification</a></li>
					
					 <li><a href="payment.php">Payout</a></li>
                    <li><a href="profile_view_profile.php">View Profile</a></li>
                    <li><a href="profile_edit_profile.php">Edit Profile</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                   <!-- <li><a href="profile_change_pic.php">Change Profile Picture</a></li>-->
                   <!-- <li><a href="profile_change_pas.php">Change Password</a></li>-->
                    <li><a href="../all/logout.php">Log Out</a></li>
                    </ul>                
                </td>
                <td>
                    Name : <input type="text" name="pname" id="">  <hr>
                    Email : <input type="text" name="pemail">  <hr>
                    
                    
					 
                   

                    <input type="submit" name="submit" id="">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

    if(isset($_GET['msg']))
    {
        if($_GET['msg'] == 'wrong_data')
        {
            echo '<h1>Please fill up all the form </h1>';
        }
    }

?>

