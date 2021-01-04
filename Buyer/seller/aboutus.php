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
    

		<h3>E CommerceShop BD is the leading online marketplace in South 
				Asia connecting thousands of sellers with millions of customers in Pakistan, 
				Bangladesh, Sri Lanka, Nepal and Myanmar.
				</h3>
				<h4>E CommerceShop BD  is a mall, a marketplace and a community.
In 2019 we built the infrastructure to enable our functions.Donate to the daily wage earners and familes, they need you. 
Overseas Pakistani's can now also donate through their Visa or Mastercard Credit 
& Debit Cards to support Pakistan.
We have an extensive operations ecosystem and operate 9 warehouses across our five markets. We also have 9 sorting centers 
and 121 hubs where we facilitate our sellers with packaging and order fulfillment.
"Make it easy to do business anywhere in the era of digital economy”</h4>
		
	 
            <!-- User image -->
           
             

              
              
            
        
		
<?php include 'includes/profile_modal.php'; ?>
<?php $pdo->close(); ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
