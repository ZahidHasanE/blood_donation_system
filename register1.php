<!DOCTYPE html>
<html>
<head>
	<title>Donate Blood</title>
	<meta charset="utf-8">
  
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<link rel="stylesheet" type="text/css" href="CSS/style.css">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
</head>
<body>
		<! Navbar>
		<nav class="navbar navbar fixed-top navbar-default navbar-expand-lg navbar-dark bg-danger">
		  <a class="navbar-brand" href="index.php">Donate Blood</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="register.php">Login</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<?php 
			include'include/connection.php';
				if (isset($_POST['login'])) {
		if (!empty(($_POST['email']))) {
			$email=$_POST['email'];
		}
		else
		{
		$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Insert Email Address Please</strong>
		<button type="button" class="close" data-dismiss="alert"aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
		}

		if (!empty(($_POST['password']))) {
			$password=$_POST['password'];
			$password=md5($password);
		}
		else
		{
		$passwordError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Insert Password Please</strong>
		<button type="button" class="close" data-dismiss="alert"aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
		}

		if (isset($email) && isset($password)) {
			$sql="SELECT * FROM donar WHERE email ='$email' AND password ='$password' ";
			$result=mysqli_query($connection,$sql);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){

						$_SESSION['username']=$row['username'];
						$_SESSION['full_name']=$row['full_name'];
						$_SESSION['email']=$row['email'];

						header('location: main.php');
				}
			}
			else{
			$submitError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Wrong Email or Password. Please Insert Valid Email or Password</strong>
				<button type="button" class="close" data-dismiss="alert"aria-label="close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
		}
			
		}
		
	}
?>
<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">Sign In / Up</h2>
			</div>
		     <div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Log In</h3>
								<div class="w-25 m-auto">
									<form action=" " method="POST">
										<div class="form-group">
											<?php
												if(isset($emailError)) echo $emailError; 
												if(isset($submitError)) echo $submitError; 
											 ?>
											<label>Email</label>
											<input type="text" name="email" class="form-control" autocomplete="off">
										</div>
										<div class="form-group">
											<?php
												if(isset($passwordError)) echo $passwordError; 
											 ?>
											<label>Password</label>
											<input type="password" name="password" class="form-control">
										</div>
										<div class="form-group form-check">
										    <label class="form-check-label">
										      <input class="form-check-input" type="checkbox"> Remember me
										    </label>
										 </div>
										<button type="submit" name="login" class="btn btn-primary">Log In</button>
										<p class="text-danger">Forgot password??</p>
									</form>
									<form action="signup1.php" method="POST">
										<p class="text-dark">Have not Register Yet??</p>
										<button type="submit" class="btn btn-info"> Create New</button>
										
									</form>
								</div>
						</div>
    				</div>
    		 </div>
		</section>

<?php 
	include 'include/footer.php';
 ?>