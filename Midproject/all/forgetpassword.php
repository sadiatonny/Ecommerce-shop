<?php
session_start();
include_once('header.html');
?>

<!DOCTYPE html>
<html >
<head>
   
    <title>Forget Password</title>
</head>
<body >
    <form method="POST" action="">
        <table align="center" >
            <tr>
                <td>Enter Email</td>
                <td><input type="text" name="fgemail"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                    <input type="submit" name='submit'> 
                </td>
            </tr>
        </table>
        
    </form>
    
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        if(isset($_SESSION['email']))
        {
            if($_SESSION['email'] == $_POST['fgemail'])
            {
                echo "<h1>Email sent.</h1>";
            }
            else
            {
                echo "<h1>Wrong Email.</h1>";
            }
        }
        else
        {
            echo "<h1>Register in the system first.</h1>";
        }
    }

?>


