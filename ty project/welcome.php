<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
	<link rel="stylesheet" href="navstyle.css">
	<link rel="stylesheet" href="posters.css">
	<link rel="stylesheet" href="propertylist.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/55733442d5.js" crossorigin="anonymous"></script>
	<style>
		#head{
			font-size:xx-large;
			text-align:center;
		}
        
		nav{
			background-color:black;
		}

		nav ul li a:hover{
			color:rgb(53, 253, 53);
		}

		nav ul li .active{
			color:rgb(53, 253, 53);
		}
		
		.map {
            width: 300px;
            height: 300px;
            overflow: hidden;
            margin: 0 auto;
        }
      
        .map img {
            width: 100%;
            transition: 0.5s all ease-in-out;
        }
      
        .map:hover img {
            transform: scale(1.5);
        }

		.vl {
  			border-left: 2px solid white;
 			 height: 300px;
			  
			}
		
	</style>
      
   
</head>
<body>
	<!--NAVIGATION BAR  -->
<nav>
		<div class="logo">
			<p>REAL ESTATE PORTAL</p>
		</div>
		<ul>
			<li><a href="" class="active">home</a></li>
			<li><a href="#Aboutus">about us</a></li>
			<li><a href="guide.php">property guide</a></li>
			<li><a href="index1.php">Admin</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
</nav>
<!--NAVIGATION BAR ENDS -->
<!-- POSTER -->
<div class="image">
	<img class="image__img" src="images/img1.jpg" style="width:100%;" alt="this is poster">
	<div class="image__overlay image__overlay--blur">
		<div class="image__title">REAL ESTATE PORTAL</div>
			<p class="image__description">
				Here We Provide You the Best Property Deals With Reasonable Price Just By Sitting At Home  
			</p>
		</div>		
	</div>
</div>
<div class="container">
	<div class="col-md-12">
		<h1 class="text-center"><bold id="head">Our Projects</bold></h1>
	</div>
	<div class="container1 py-3">
		<div class="row mt-4">
			<?php
			   require 'config.php';
			   $query = "SELECT * FROM propertylist";
			   $query_run = mysqli_query($conn, $query);
			   $check_faculty = mysqli_num_rows($query_run) > 0;
			   if($check_faculty)
			   {
				   while($row = mysqli_fetch_array($query_run))
				   {
					   ?>
					   <div class="col-md-3">
							<div class="card" style="width: 18rem;">
  								<img src="images/<?php echo $row['image']; ?>" width="260px" height="200px" class="card-img-top" alt="Property Image">
  								<div class="card-body">
    								<h3 class="card-title"><?php echo $row['name']; ?></h3>
									<h4 class="card-title"><?php echo $row['location']; ?></h4>
    								<p class="card-text">Rs.<?php echo $row['price']; ?> | <?php echo $row['room']; ?> BHK</p>
    								<a href="<?php echo $row['name'];?>.php" class="btn btn-success">View Details</a>
  								</div>
							</div>
				       </div>
	                   <?php
					   
				   }
			   }
			   else{
				   echo "No Property Found";
			   }
	            ?>
		</div>
	</div>				
</div>
<div class="foot">
<a name="Aboutus">
	<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 bg-dark">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook"></i>
      </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Give Us Feedback:</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
		 
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        This is REAL ESTATE PORTAL website.The main objective of this project is bring out the real estate industry online and enabling to benefit user. So here user can buy property at his/her own comfort, Site provide  you to make wise and profitable decisions realated to buying your favourite property.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="mt-5">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact us Here:</h5>
		  <div class="map">
		  <img src="images/map.png" width="200px">
		  </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 my-5 ">
           <b>Location</b>: Vasai,India.<br>
		   <b>State</b>: Maharashtra.<br>
		   <b>Address</b>: Shastri Nagar, Vishal Nagar, Vasai West, Vasai-Virar, Maharashtra 401202.<br>
		   <b>Contact No.</b>: +91 91XXXXXX89.<br>
		   <b>Email</b>: example12@gmail.com.
        </div>
        <!--Grid column-->
		 <!--Grid column-->
		<div class="col-lg-3 col-md-6 mb-4 mb-md-0 my-1">
		
	    	<h5 class="text-uppercase">Follow Our Newsletter Here:</h5>
			<div class="form-outline form-white mb-4 mt-4">
				Give your Email
              <input type="text" id="form5Example21" class="form-control" placeholder="email"/>
              <label class="form-label" for="form5Example21"></label>
			  <button type="submit" name="send" class="btn btn-outline-light mt-2">
              Subscribe
             </button>
            </div>
        </div>
		 <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
		<div class="vl">
		<h5 class="text-uppercase">Navigations</h5>
			<br>
		<ul class="list-unstyled mb-0">
			<li>
				<a href="#!" class="text-white">Home</a>
			</li>
			<br>
			<li>
				<a href="#!" class="text-white">About us</a>
			</li>
			<br>
			<li>
				<a href="#!" class="text-white">Property guide</a>
			</li>
			<br>
			<li>
				<a href="index1.php" class="text-white">Admin</a>
			</li>
			<br>
			<li>
				<a href="logout.php" class="text-white">Logout</a>
			</li>
		</ul>
		</div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">REAL ESTATE PORTAL</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="1sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">
    </script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
    </script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous">
    </script>
</body>

</html>