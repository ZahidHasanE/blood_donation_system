<?php 
	include 'include/header.php';
 ?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>



		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">Search For Donar</h2>
			</div>
		     <div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red"></h3>
								<div class="w-25 m-auto">
									<form action=" " method="POST">
										<div class="form-group">
											<label>City Name</label>
												<select name="cityname" id="cityname" required class="form-control demo-default text-center margin 5px" >
														
														<option value="">City</option>
														<option value="Rajshahi">Rajshahi</option>
														<option value="Bogura">Bogura</option>
														<option value="Dhaka">Dhaka</option>
														<option value="Chittagong">Chittagong</option>
														<option value="Khulna">Khulna</option>
														<option value="Rangpur">Rangpur</option>
														<option value="Sylhet">Sylhet</option>
														<option value="Joypurhat">Joypurhat</option>
												</select>
										</div>
										<div class="form-group center-aligned">
											<label>Blood Group</label>
													<select name="bloodgroup" id="bloodgroup" required class="form-control demo-default text-center margin 5px" >
														<option value="">Blood Group</option>
														<option value="A+">A+</option>
														<option value="A-">A-</option>
														<option value="B+">B+</option>
														<option value="B-">B-</option>
														<option value="AB+">AB+</option>
														<option value="AB-">AB-</option>
														<option value="O+">O+</option>
														<option value="O-">O-</option>

													</select>
										</div>
										<button type="submit" class="btn btn-primary">Search</button>
									</form>
								</div>
						</div>
    				</div>
                </div>
            </div>
        </section>

       <div class="container" style="padding: 60px 0;">
       		<div class="row data">

       			     <?php 
       			     		//$safedate=$_SESSION['date_of_last_donation'];

				      		if ( (isset($_POST['cityname']) && !empty($_POST['cityname']))&&(isset($_POST['bloodgroup']) && !empty($_POST['bloodgroup'])) ) {

				      				$cityname=$_POST['cityname'];
				      				$bloodgroup=$_POST['bloodgroup'];
				      				$sql="SELECT * FROM donar WHERE present_address='$cityname' AND blood_group='$bloodgroup'";

							      		$result=mysqli_query($connection,$sql);

							      		if (mysqli_num_rows($result)>0) {

							      			while($row=mysqli_fetch_assoc($result)){

									      			if($row['date_of_last_donation']=='0'){
									      				echo '
									      				 <div class="col-md-3 col-sm-12 col-lg-3 donars_data">
									      				 <span class="name">'.$row['full_name'].'</span>
									      				 <span class="name">'.$row['present_address'].'</span>
									      				 <span class="name">'.$row['blood_group'].'</span>
									      				 <span class="name">'.$row['gender'].'</span>
									      				 <span class="name">'.$row['email'].'</span>
									      				 <span class="name">'.$row['contact_no'].'</span>
									      				 </div>
									      				';

									      			}
									      			elseif ($row['date_of_last_donation']!='0') {
									      				$start=date_create($row['date_of_last_donation']);
									      				$end=date_create();
									      				$diff=date_diff($start,$end);

									      				$diffmonth=$diff->m;
									      				if($diffmonth >='3'){
									      					echo '
									      				 <div class="col-md-3 col-sm-12 col-lg-3 donars_data">
									      				 <span class="name">'.$row['full_name'].'</span>
									      				 <span class="name">'.$row['present_address'].'</span>
									      				 <span class="name">'.$row['blood_group'].'</span>
									      				 <span class="name">'.$row['gender'].'</span>
									      				 <span class="name">'.$row['email'].'</span>
									      				 <span class="name">'.$row['contact_no'].'</span>
									      				 </div>
									      				';
									      				}
									      				else{
									      					echo '
									      				 <div class="col-md-3 col-sm-12 col-lg-3 donars_data">
									      				 <span class="name">'.$row['full_name'].'</span>
									      				 <span class="name">'.$row['present_address'].'</span>
									      				 <span class="name">'.$row['blood_group'].'</span>
									      				 <span class="name">'.$row['gender'].'</span>
									      				 <h4 class="name text-center">Donated</h4>
									      				 </div>
									      				';
									      				}

									      			}
									      			else{

									      				echo '
									      				 <div class="col-md-3 col-sm-12 col-lg-3 donars_data">
									      				 <span class="name">'.$row['full_name'].'</span>
									      				 <span class="name">'.$row['present_address'].'</span>
									      				 <span class="name">'.$row['blood_group'].'</span>
									      				 <span class="name">'.$row['gender'].'</span>
									      				 <h4 class="name text-center">Donated</h4>
									      				 </div>
									      				';

									      			}
							      		}
							      	}
							      		else{
							      			echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>No Donar Found</strong>
													<button type="button" class="close" data-dismiss="alert"aria-label="close">
													<span aria-hidden="true">&times;</span>
													</button>
													</div>';

							      		}
				      			
				      		}

      				 ?>       			
       		</div>
       	
       </div>
 




<?php 
	include 'include/footer.php';
 ?>