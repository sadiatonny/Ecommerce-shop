<?php
session_start();

if(!isset($_SESSION['active']))
{
    header('location: public.html');
}
/*include_once('userloginheader.php');
*/
?>

<!DOCTYPE html>
<html >
<head>
   
    <title>home</title>
</head>
<body>
    <table align="center" width='50%' border="1"  cellpadding="0" cellspacing="0"  >
        <tr>
            <td>
                <h3 align="center">Home</h3>
                <hr>
                <ul>
                    <li><a href="createStore.php">Create Store</a></li>
                    <li><a href="viewstore.php">View Store</a></li>
                    <li><a href="chat.php">Chat</a></li>
                    <li><a href="notfication.php">Notification</a></li>
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
                <h1 align="center">Welcome <?php echo $_SESSION['name']; ?> to our <br/>
							E commerce Shop
							
							</h1>
            </td>
        </tr>
    </table>
</body>
</html>

