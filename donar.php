<?php 
	include 'include/header.php';

	if(isset($_POST['update'])){
		$username=$_POST['username'];
		$date_of_donation=$_POST['ldod'];
		$sql="UPDATE donar SET date_of_last_donation='$date_of_donation' WHERE username='$username'";
		mysqli_query($connection,$sql);
		$daterepalce='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Successfully Donation Date Updated</strong>
		<button type="button" class="close" data-dismiss="alert"aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
	}
	if(isset($_POST['delete'])){
		$username=$_POST['username'];
		$reason=$_POST['reason'];
		$sql="UPDATE donar SET blood_group='0' WHERE username='$username'";
		mysqli_query($connection,$sql);
		$sql1="INSERT INTO erase_donar (username,reason)VALUES('$username','$reason')";
		mysqli_query($connection,$sql1);
		$deletecomplete='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Successfully Delete your Account</strong>
		<button type="button" class="close" data-dismiss="alert"aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
	}

 ?>
		
		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">Update / Delete</h2>
			</div>
		     <div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Update Profile</h3>
     						<?php if (isset($daterepalce)) echo $daterepalce;
     						  ?>
								<div class="w-25 m-auto">
									<form action=" " method="POST">
										<div class="form-group">
											<label>Username:</label>
											<input type="text" name="username" required class="form-control" autocomplete="off">
										</div>
										<div class="form-group">
											<label>Date Of Donation:</label>
											<input type="Date" name="ldod" required class="form-control">
										</div>
										<button type="submit" name="update" class="btn btn-primary">Update</button>
									</form>
								</div>
						</div>
    				</div>

    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Delete Profile</h3>
      						<?php if (isset($deletecomplete)) echo $deletecomplete;
     						  ?>
      							<div class="w-25 m-auto">
      								<form action=" " method="POST">
      									<div class="form-group">
      										<label>Username:</label>
      										<input type="text" name="username" required="" class="form-control">
      									</div>
      									<div class="form-group">
      										<label>Reason of Delete:</label>
      										<input type="text" name="reason" required="" class="form-control">
      									</div>
      									<button type="submit" name="delete" class="btn btn-danger"> Delete</button>
      								</form>
      								
      							</div>
								
					</div>
    		 </div>
		</section>

<?php 
	include 'include/footer.php';
 ?>