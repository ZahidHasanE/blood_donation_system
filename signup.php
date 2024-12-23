<?php 
	include 'include/header.php';

	if(isset($_POST['submit']))
	{
		if (!empty(($_POST['name']))) {
			$name=$_POST['name'];
		}
		else
		{
		$nameError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Insert Name Please</strong>
		<button type="button" class="close" data-dismiss="alert"aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
		}
		if (!empty(($_POST['email']))) {
			$check_email=$_POST['email'];
			$sql="SELECT email FROM donar WHERE email='$check_email' ";
			$result=mysqli_query($connection,$sql);
			if(mysqli_num_rows($result)>0){
				$emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> This Email is already exist</strong>
						<button type="button" class="close" data-dismiss="alert"aria-label="close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
				}
				else
				{
					$email=$_POST['email'];
				}
			}

		if (!empty(($_POST['username']))) {
			$check_username=$_POST['username'];
			$sql="SELECT username FROM donar WHERE username='$check_username' ";
			$result=mysqli_query($connection,$sql);
			if(mysqli_num_rows($result)>0){
				$usernameError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> This Username is already exist</strong>
						<button type="button" class="close" data-dismiss="alert"aria-label="close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
			}
			else
			{
				$username=$_POST['username'];
			}
		}

		if($_POST['password'] === $_POST['confirmpassword'])
		{
				$password = $_POST['password'];
		}
		else
		{
		$termError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Password do not match</strong>
		<button type="button" class="close" data-dismiss="alert"aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
		}
			

		if($_POST['weight']>=50)
		{
				$weight = $_POST['weight'];
		}
		else
		{
		$weightError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Weight should at least 50</strong>
		<button type="button" class="close" data-dismiss="alert"aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>';
		}

		if (!empty(($_POST['dold'])))
			 {
			 	$dold=$_POST['dold'];
			}
			else
			{
				$dold=0;
			}
		

		$gender=$_POST['gender'];
		$date=$_POST['date'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$blood_group=$_POST['blood_group'];
		//$dold=$_POST['dold'];
		$present_address=$_POST['presentaddress'];
		$parmanent_address=$_POST['parmanentaddress'];
		$contact_no=$_POST['contactnumber'];
		$any_disease=$_POST['anydisease'];
		$password=md5($password);

		if(isset($name) && isset($username) && isset($email) && isset($password))
		{
			$date_of_birth=$year."-".$month."-".$date;
			$sql1=("INSERT INTO donar (full_name,username,email,gender,blood_group,date_of_last_donation,present_address,parmanent_address,contact_no,weight,any_disease,password,date_of_birth)VALUES('$name','$username','$email','$gender','$blood_group','$dold','$present_address','$parmanent_address','$contact_no','$weight','$any_disease','$password','$date_of_birth')");

			if(mysqli_query($connection,$sql1))
			{
					$submitsuccess='<div class="alert alert-success alert-dismissible fade show" role="alert"><strong> Sign Up Successfully</strong>
						<button type="button" class="close" data-dismiss="alert"aria-label="close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';

			}
			else
			{
				$submitError='<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Sign Up wrong</strong>
					<button type="button" class="close" data-dismiss="alert"aria-label="close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>';

			}
		}
	
	}
		
 ?>

		<section class="my-5">
			<div class="py-2">
				<h2 class="text-center">Sign Up</h2>	
			</div>

			<div class="w-25 m-auto">
				<?php if(isset($termError)) echo $termError;
					  if(isset($submitsuccess)) echo $submitsuccess; 
					  if(isset($submitError)) echo $submitError; 
				 ?>
				<form action=" " method="POST">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="name" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space"class="form-control" autocomplete="off">
						<?php if(isset($nameError)) echo $nameError; ?>
					</div>
					<div class="form-group">
						<?php if(isset($usernameError)) echo $usernameError; ?>
						<label>Username</label>
						<input type="text" name="username" placeholder="Username" required class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" name="email" placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"required class="form-control" autocomplete="off">
						<?php if(isset($emailError)) echo $emailError; ?>
					</div>
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
				    </div>
					<div class="form-inline">
		              <label for="name">Date of Birth</label><br>
		              <select class="form-control demo-default" id="date" name="date" style="margin-bottom:8px;" required>
		                <option value="">---Date---</option>
		                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
		              </select>
		              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:8px;" required>
		                <option value="">---Month---</option>
		                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
		              </select>
		              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:8px;" required>
		                <option value="">---Year---</option>
		                <option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option>
		                <option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option><option value="2001" >2001</option><option value="2002" >2002</option><option value="2003" >2003</option><option value="2004" >2004</option><option value="2005" >2005</option>
		              </select>
           			  </div>
					<div class="form-group center-aligned">
						<label>Blood Group</label>
								<select name="blood_group" id="blood_group" required class="form-control demo-default text-center margin 5px" >
									<option value=" ">Blood Group</option>
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
					<div class="form-group">
						<label>Date of Last Donation</label>
						<input type="Date" name="dold" class="form-control" autocomplete="off">
						<p>If not, let it be</p>
					</div>
					<div class="form-group">
						<label>Present Address(City)</label>
							<select name="presentaddress" id="presentaddress" required class="form-control demo-default text-center margin 5px" >
									
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
					<div class="form-group">
						<label>Parmanent Address(City)</label>
							<select name="parmanentaddress" id="parmanentaddress" required class="form-control demo-default text-center margin 5px" >
									
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
					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" name="contactnumber" placeholder="01*********" required pattern="^\d{11}$" title="11 numeric characters only" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Password" required pattern=".{6,}" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Confirm password</label>
						<input type="password" name="confirmpassword" placeholder="Confirm Password" required pattern=".{6,}" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<?php if(isset($weightError)) echo $weightError; ?>
						<label>Weight</label>
						<input type="number" name="weight" required class="form-control" autocomplete="off">
						<p>Weight must be greater than 50 kg</p>
					</div>
					<div class="form-group">
						<label>Any Disease</label>
						<textarea name="anydisease" class="form-control"></textarea>
					</div>


					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</section>
<?php 
	include 'include/footer.php';
 ?>