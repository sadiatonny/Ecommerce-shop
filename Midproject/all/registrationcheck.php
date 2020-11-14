<?php
    session_start();
    if(isset($_POST['submit']))
    {

        
        $name='';
        if(!empty($_POST['name']))
        {
            $name = $_POST['name'];
        }
        else{
            //header('location: registration.php?msg=null_name');
            $name='';
        }



if(!empty($_POST['email']))
	{
		$email = $_POST['email'];
		if(filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$email = $_POST['email'];
		}
		else{
			$email='';
		}
	}
		else
		{
			$email='';
		}
		

       

if(!empty($_POST['user_name'])&&strlen($_POST['user_name'])>=2)
    	{
    		  $user_name = $_POST['user_name'];
            if(!preg_match("/^[a-zA-Z][a-zA-Z.-]*$/", $user_name)){
    		     
                $user_name='';

            }
            else
            {
                $user_name = $_POST['user_name'];
            }
    	}
		else
    	{
            
    		$user_name='';
    	}


        $password='';
        if($_POST['password']==$_POST['con_pas'])
        {
            $password = $_POST['password'];
        }
        else
        {
            
            $password='';
        }



        if(isset($_POST['gen']))
        {
           $gen =  $_POST['gen'];
            
        }
        else
        {
            $gen ='';
        }



       
        
        if($name!="" && $email!=''  && $user_name!='' && $password!='' && $gen!='')
        {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['user_name'] = $user_name;
            $_SESSION['password'] = $password;
            $_SESSION['gen'] = $gen;
			
           $file = 'reg.txt';
            /*$current = file_get_contents($file);
            //$add = $name.' '.$email.' '.$user_name.' '.$password' '.$gen.'\n';
			 $add = $name.' '.$email.' '.$user_name.' '.$password.' '.$gen.'\n';
            $current .= $add;
            file_put_contents($file, $current);
            echo 'done';

			*/
			 $current = fopen("reg.txt","a"); 
  $add = $name.' '.$email.' '.$user_name.' '.$password.' '.$gen;
               // $add = $name.' '.$email.' '.$un.' '.$password.' '.$gen.' '.$dobb.' '.$user;
                fwrite($current, $add. " \r\n");
            
                fclose($current);
            header('location: login.php');
        }
        else
        {
            header('location: registration.php?msg=wrong_data');
        }

    }

    else
    {
        header('location: registration.php');
    }



?>
