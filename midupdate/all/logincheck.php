<?php

    session_start();
    if(isset($_POST['submit']))
    {

        $username = $_POST['user_name'];
        $pass = $_POST['password'];
		$gen1 = $_POST['gen1'];
		
       
    if(!$username == "" && !$pass == "" ){
             $myfile = fopen("data-save.txt","r");
       while($data = fgets($myfile)){
    	   $test = explode(" ",$data);
        
           if($username == $test[2] && $pass == $test[3]){
        	
           
		
            $_SESSION['name'] = $test[0];
            $_SESSION['email'] = $test[1];
            $_SESSION['user_name'] = $test[2];
            $_SESSION['password'] = $test[3];
            $_SESSION['gen'] = $test[4];
           
           if($_SESSION['gen'] == "Admin"){
          
		$_SESSION['active'] = 'true';
header('location: ../view/profile_dash.php');		  
           } 
           else if($_SESSION['gen'] == "Seller")
		   {
			 $_SESSION['active'] = 'true';
        	header('location:  ../view/seller_dash.php');
           }
		   
		   else{
				$_SESSION['active'] = 'true';
        	header('location:  ../view/buyer_dash.php');
           }
           	
           }
		
		
		 else
        {
            header('location: login.php?msg=invalid_user');
        }
		
		
		}
	}
		else
    {
       header('location: login.php');
    }
	
	
	}
	
		
		
		?>
		
		
		
		