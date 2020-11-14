<?php

    session_start();
    if(isset($_POST['submit']))
    {

        $logun = $_POST['logun'];
        $logpas = $_POST['logp'];
		$n = $_POST['gen1'];
		/*if(!empty($_POST['logun']) &&  !empty($_POST['logpas']) &&  !empty($_POST['gen1']))
		{
			$myfile = fopen('reg.txt', 'r');
		while($data = fgets($myfile)){
                $test = explode(" ",$data);
               	
		
		if($_POST['logun'] == $test[0] && $_POST['logpas'] == $test[1] && $_POST['gen1'] == $test[2] )
               {
                $_SESSION['logun'] = $test[0];
                $_SESSION['logpas'] = $test[1];
                $_SESSION['gen1'] = $test[2];
               
		 if($_SESSION['gen1']=="Admin")
                {
                     $_SESSION['active'] = 'true';
			header('location: ../view/profile_dash.php');}
                }
				
				
				 else if($_SESSION['gen1']=="Seller")
                {
                     $_SESSION['active'] = 'true';
			header('location:  ../view/seller_dash.php');
                }
		 else
                {
                     $_SESSION['active'] = 'true';
		header('location:  ../view/buyer_dash.php');
                }
				
				 }
               
            }
        }
		else
    {
       header('location: login.php');
    }
	*/
		
        if(isset($_SESSION['user_name']) && isset($_SESSION['password']))
        {
            if($logun == $_SESSION['user_name'] && $logpas== $_SESSION['password'] && $n == 'Admin')
            {
				
                $_SESSION['active'] = 'true';
			header('location: ../view/profile_dash.php');}
				
				else if($logun == $_SESSION['user_name'] && $logpas== $_SESSION['password'] && $n == 'Seller')
				{$_SESSION['active'] = 'true';
					header('location:  ../view/seller_dash.php');
				}
					
				
				
				else 
				{$_SESSION['active'] = 'true';
					header('location:  ../view/buyer_dash.php');
		}
		}
		
		 else
        {
            header('location: login.php?msg=invalid_user');
        }
		
		
		}
		else
    {
       header('location: login.php');
    }
	
	
	
		
		
		?>
		
		
		
		