<?php
include_once('header.html');
?>


<!DOCTYPE html>
<html >
<head>
    
    <title>Log-In</title>
</head>
<body>
    <form method='POST' action="logcheck.php">
        <fieldset>
            <legend>LOGIN</legend>
            <table align="center">
                <tr>
                    <td>User-Name:</td>
                    <td><input type="text" name="user_name" id=""></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                
                <tr>
                    <hr>
					 <td colspan="2">
					<input type="radio" name="gen" value="Admin"/>Admin
					<input type="radio" name="gen" value="Buyer"/>Buyer
					<input type="radio" name="gen" value="Seller"/>Seller
                    <input type="checkbox" name="logche" id=""> Remember me</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value='Submit'>
                        <a href="forgetpassword.php">Forget Password</a>

                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php
    if(isset($_GET['msg']))
    {
        if($_GET['msg'] == 'invalid_user')
        {
            echo '<h1>Invalid User<h1>';
        } 
    }
?>

