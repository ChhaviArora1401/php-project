<?php 
include_once 'config/Database.php';
include_once 'class/Customer.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);

include('inc/header.php');
?>
<title>Food Ordering System</title>
</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="./index.php" class="navbar-brand">food web</a>
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
        <div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#5bc0de;color:white;">
				<div class="panel-title">title page</div>                        
			</div> 
		                   
		</div>  
	</div>       
    </div>        
		
<?php include('inc/footer.php');?>
