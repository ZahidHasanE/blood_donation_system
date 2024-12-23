	<! Navbar>
		<nav class="navbar navbar fixed-top navbar-default navbar-expand-lg navbar-dark bg-danger">
		  <a class="navbar-brand" href="main.php">Donate Blood</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="donar.php">Donar</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="needblood.php">Need Blood</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="adout us.php">About Us</a>
		      </li>
		      <!--<li class="nav-item">
		        <a class="nav-link" href="register.php">Login</a>
		      </li>-->
		            <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		         <?php
					if(isset($_SESSION['username'])) echo $_SESSION['username']; 
				  ?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

		          <a class="dropdown-item" href="logout.php">
		          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>

		Logout</a>
		          </div>
		      </li>
		    </ul>
		  </div>
		</nav>

		<?php 
			include'connection.php';
		 ?>