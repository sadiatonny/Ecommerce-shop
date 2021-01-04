<?php 
  include 'includes/session.php';
  include 'includes/format.php'; 
?>
<?php 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }

  $conn = $pdo->open();
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      
</h1>
    

		
	  

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        
	        		
				
			
	        		<?php include '../includes/side.php'; ?>
	        	
				
	     
	      </section>
	     
	    </div>
	
  
  	

	 
            <!-- User image -->
           
             

              
              
            
        
		
<?php include 'includes/profile_modal.php'; ?>
<?php $pdo->close(); ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
