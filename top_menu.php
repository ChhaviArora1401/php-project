<?php
if (isset($_SESSION["name"])) {
  ?>
   <ul class="nav navbar-nav navbar-right">
	<li class="z"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION["name"]; ?></li>
	<li class="active z"><a href="welcome.php"><span class="glyphicon glyphicon-cutlery"></span> Food List </a></li>
	<li class="z"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart  (<?php
	  if(isset($_SESSION["cart"])){
	  $count = count($_SESSION["cart"]); 
	  echo "$count"; 
		}
	  else
		echo "0";
	  ?>) </a></li>
	<li class="z"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
  </ul>
<?php        
}
?>