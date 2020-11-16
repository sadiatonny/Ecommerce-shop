<?php
session_start();

if(isset($_POST['submit'])){

	$n = $_POST['user_name'];
	$Pass = $_POST['password'];
    
    if(!$n == "" && !$Pass == ""){
             $myfile = fopen("loginInfo.txt","r");
       while($data = fgets($myfile)){
    	   $test = explode(" ",$data);
        
           if($n == $test[2] && $Pass == $test[3]){
        	
           $_SESSION['name'] = $test[0];    
           $_SESSION['email'] = $test[1];
           $_SESSION['user_name'] = $test[2];
           $_SESSION['password'] = $test[3];
           $_SESSION['gen'] = $test[4];
          
        
           
           if($_SESSION['gen'] == "Admin"){
			   $_SESSION['active'] = 'true';
           header('location: ../view/profile_dash.php');	
           } 
           else{
			   $_SESSION['active'] = 'true';
        	header('location: ../view/seller_dash.php'); 
           }
           	
           }
           else {
        	echo "try again please";
           }
        }
    } 
    else{
        echo "Empty";
    }
}
?>