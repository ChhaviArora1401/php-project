<?php 
session_start();
$name = "";
include("inc/header.php");
include_once("inc/db_connect.php");
if(!isset($_SESSION["user"])){
 header("location:index.php");
}

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$sql="SELECT * FROM `lists` WHERE name= '$name'";
	$res=mysqli_query($connect,$sql);		
	}
?>

<?php include('inc/container.php');?>
<div class="container">	
	<di v class="col-md-12">   
	<h2 class="text-center">Welcome Back, Boss</h2>	
	</div>
	<div class="col-md-6 text-center mid ">   
		<div>
			<img src="img/pic.jpg" height="500px" width="700px" />
		</div>                 
		<br>
	<p class="text-center"> A lot has changed since your last visit.</p>	
	<br>
	<div>	
		<form action="welcome.php" method="POST">
	<label>Enter: </label> <input id="name" type="text" name="name"> 
	<input id="submit" type="submit" value="Search" name="submit">
	<br>
	
	<table id="table1">
	<thead>
							<tr>
							   <th><b>ID&nbsp;</b></th> 
							   <th><b>Name&nbsp;</b></th> 
							   <th><b>Age&nbsp;</b></th> 
							   <th><b>Wants</b></th> 					   
							</tr>
						 </thead>
	<?php
	if(isset($_POST['submit'])){
		if ($result = $connect -> query("SELECT * FROM `lists` WHERE name= '$name'")) {
		$res = $result -> fetch_assoc();		
		 echo "<tr><td>".$res["id"]."</td><td>".$res["name"]."</td><td>".$res["age"]."</td><td>".$res["wants"]."</td></tr>";	
	}
	else {
	?>
	
						 <tbody>
							<tr>
							   <td></td> &nbsp;
							   <td></td> &nbsp;
							   <td></td> &nbsp;
							   <td></td>					   
							   </tr>
							<?php } ?>
						 </tbody>
					  </table>
					  <?php
					  }
					  else {
						  ?>
						  <tbody>							
							<tr>
							   <td></td> &nbsp;
							   <td>h</td> &nbsp;
							   <td></td> &nbsp;
							   <td></td> &nbsp;						   
							   </tr>
							   <tr>
							   <td></td> &nbsp;
							   <td>U</td> &nbsp;
							   <td></td> &nbsp;
							   <td></td> &nbsp;						   
							   </tr>
							   <tr>
							   <td></td> &nbsp;
							   <td>n</td> &nbsp;
							   <td></td> &nbsp;
							   <td></td> &nbsp;						   
							   </tr>
							   <tr>
							   <td></td> &nbsp;
							   <td>j</td> &nbsp;
							   <td></td> &nbsp;
							   <td></td> &nbsp;						   
							   </tr>							
						 </tbody>
						 </table>
					<?php
					  }
					  ?>
	</div>
	<br />	
	</div> 	
</div>	
<p><a href="logout.php">Logout</a></p>	 
<?php include('inc/footer.php');?>