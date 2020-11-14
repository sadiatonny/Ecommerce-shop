<?php
include_once('header.html');
?>


<!DOCTYPE html>
<html >
<head>
    
    <title>Log-In</title>
</head>
<body>
    <form method='POST' action="logincheck.php">
        <fieldset>
            <legend>LOGIN</legend>
            <table align="center">
                <tr>
                    <td>User-Name:</td>
                    <td><input type="text" name="logun" id=""></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="logp" id=""></td>
                </tr>
                
                <tr>
                    <hr>
					 <td colspan="2">
					<input type="radio" name="gen1" value="Admin"/>Admin
					<input type="radio" name="gen1" value="Buyer"/>Buyer
					<input type="radio" name="gen1" value="Seller"/>Seller
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

