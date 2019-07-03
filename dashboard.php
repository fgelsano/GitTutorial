<?php 

	include "dbconnect.php";

	$sql = "SELECT * FROM users";
	$result = mysqli_query($con, $sql);
?>


<html>
	<head></head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<body>
		<div class="content">
			<div class="container">
				<div class="row">
				  <div class="jumbotron">
				    <h2>Welcome (User's Name)!</h2> 
				    <p>How are you today?</p> 
				  	<a href="index.php">Click Here to Log Out</a>
				  </div>
			  	</div>
			</div>
		</div>
		<div class="container">
		  <div class="" id="users">
		  	<div class="row">
		  		<div class="col-xs-8 col-sm-8 col-md-8">
		  			<h2>List of Users</h2>	
		  		</div>
		  		<div class="col-xs-4 col-sm-4 col-md-4 text-center" style="padding: 10px;">
		  			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addUser">Add User</button>
		  		</div>
		  	</div>
		  	<hr>
		  	<!-- Modal -->
			<div id="addUser" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Add New User</h4>
			      </div>
			      <div class="modal-body">
			        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-offset-1">
						<form class="form-horizontal" role="form" action="addUser.php" method="POST">
						  <div class="form-group">
						    <div class="">
						      <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" name="fname">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="">
						      <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" name="lname">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="">
						      <input type="text" class="form-control" id="middleName" placeholder="Enter Middle Name" name="mname">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="">
						      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class=""> 
						      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="">
						      <select name="role" id="" class="form-control">
						      	<option value="0">Admin</option>
						      	<option value="1">User</option>
						      </select>
						    </div>
						  </div>						
					</div>
			      </div>
			      <div class="modal-footer" style="border-top: 0;">
			        <div class="form-group"> 
					   	<button type="submit" class="btn btn-success col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">Submit</button>
					</div>
			        </form>
			      </div>
			    </div>

			  </div>
			</div>
		  	<div class="table-responsive">
		  		<table class="table table-striped table-hover table-bordered">
		  			<thead>
		  				<th>Last Name</th>
		  				<th>First Name</th>
		  				<th>Middle Name</th>
		  				<th>Email Address</th>
		  				<th>Role</th>
		  			</thead>
		  			<?php while ($user = $result->fetch_assoc()) { ?>
		  				<tr>
		  				<td><?php echo $user['lastname']; ?></td>
		  				<td><?php echo $user['firstname']; ?></td>
		  				<td><?php echo $user['middlename']; ?></td>
		  				<td><?php echo $user['email']; ?></td>
		  				<td>
			  				<?php 
			  					if($user['role'] == "0"){
			  						echo "Admin";
			  					} else {
			  						echo "User";
			  					}
			  				 ?>
		  				 </td>
		  				</tr>
		  			<?php } ?>
		  			
		  		</table>
		  	</div>
		  </div>
		  <div class="" id="portfolio">
		  	<div class="row">
		  		<div class="col-xs-8 col-sm-8 col-md-8">
		  			<h2>Portfolios</h2>	
		  		</div>
		  		<div class="col-xs-4 col-sm-4 col-md-4 text-center" style="padding: 10px;">
		  			<a href="" class="btn btn-info">Add Portfolio</a>
		  		</div>
		  	</div>
		  	<hr>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image" style="background-image: url('resources/images/bg/windows-bg.png'); background-size: cover; height: 150px;"></div>
		  		<div class="portfolio-caption text-center">
		  			<p>This is a portfolio caption.</p>
		  		</div>
		  	</div>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image" style="background-image: url('resources/images/bg/windows-bg.png'); background-size: cover; height: 150px;"></div>
		  		<div class="portfolio-caption text-center">
		  			<p>This is a portfolio caption.</p>
		  		</div>
		  	</div>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image" style="background-image: url('resources/images/bg/windows-bg.png'); background-size: cover; height: 150px;"></div>
		  		<div class="portfolio-caption text-center">
		  			<p>This is a portfolio caption.</p>
		  		</div>
		  	</div>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image" style="background-image: url('resources/images/bg/windows-bg.png'); background-size: cover; height: 150px;"></div>
		  		<div class="portfolio-caption text-center">
		  			<p>This is a portfolio caption.</p>
		  		</div>
		  	</div>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image" style="background-image: url('resources/images/bg/windows-bg.png'); background-size: cover; height: 150px;"></div>
		  		<div class="portfolio-caption text-center">
		  			<p>This is a portfolio caption.</p>
		  		</div>
		  	</div>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image" style="background-image: url('resources/images/bg/windows-bg.png'); background-size: cover; height: 150px;"></div>
		  		<div class="portfolio-caption text-center">
		  			<p>This is a portfolio caption.</p>
		  		</div>
		  	</div>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image" style="background-image: url('resources/images/bg/windows-bg.png'); background-size: cover; height: 150px;"></div>
		  		<div class="portfolio-caption text-center">
		  			<p>This is a portfolio caption.</p>
		  		</div>
		  	</div>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image" style="background-image: url('resources/images/bg/windows-bg.png'); background-size: cover; height: 150px;"></div>
		  		<div class="portfolio-caption text-center">
		  			<p>This is a portfolio caption.</p>
		  		</div>
		  	</div>
		  	<div class="col-xs-12 col-sm-4 col-md-2 portfolio-item">
		  		<div class="portfolio-image text-center" style="background-color: #ccc; background-image: url(''); background-size: cover; height: 150px; display: flex; flex-flow: column; justify-content: center">
		  			<h3 style="margin: 0; color: grey">Coming Soon</h3>
		  		</div>
		  	</div>
		  </div>
		</div>
		<footer>
			<div class="row text-center">
				<small><h4>This is the footer.</h4></small>
				<small><p>All rights reserved 2019.</p></small>
			</div>
		 </footer>
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>