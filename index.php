<?php 
include_once 'config/Database.php';
include_once 'class/Customer.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);

include('inc/header.php');
?>
<link rel="stylesheet" href="css\index.css">
<body>
  <div class="bg-in"></div>
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a href="./index.php" class="navbar-brand" style="padding-top:5px"><div class="logo"><img src="images/logo.jpg"/></div></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./login.php">login</a></li>            
          </ul>         
        </div><!--/.nav-collapse -->
      </div>
    </div>	
	<div class="container" style="min-height:500px;">
	
<div class="content"> 
	<div class="container-fluid">			
    <div class="col-lg-12 main">     
      <h1 class="main-heading"> THE SUNRISE CAFE </h1>                 
    </div>       
  </div>  
</div>      
		
<?php include('inc/footer.php');?>
