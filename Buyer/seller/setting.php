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
   

  <!-- Logo -->
  
    <!-- mini logo for sidebar mini 50x50 pixels -->
   
    <!-- logo for regular state and mobile devices -->
    <!--<span class="logo-lg"><b>Ser</b>Bermz</span>-->
  
	 <!--<h4  style="color:white;"> E Commerce <a href="navbar.php" style="color:#FB4415;">Shop</a> BD</h4>-->
 
  <!-- Header Navbar: style can be found in header.less -->
 
	<!-- <ul class="">
           
            <li class="user-header">
              <img src="<?php echo (!empty($admin['photo'])) 
			  ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="" alt="User Image">

              <p>
			  <br>
                <?php echo $admin['firstname'].' '.$admin['lastname']; ?>
                <small>Member since <?php echo date('M. Y', strtotime($admin['created_on'])); ?></small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li> -->

		
		
	 
            <!-- User image -->
           
              <img src="<?php echo (!empty($admin['photo'])) 
			  ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="" alt="User Image" width="300px" height="200px">

              <h4>
			  <br>
                <?php echo $admin['firstname'].' '.$admin['lastname']; ?>
				<br>
                <small>Member since <?php echo date('M. Y', strtotime($admin['created_on'])); ?></small>
              </h4>
           
              
            
        
		
<?php include 'includes/profile_modal.php'; ?>
<?php $pdo->close(); ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
