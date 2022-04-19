<?php
  include 'config.php';
  $insert=false;
 if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $propertyname=$_POST['propertyname'];
   $date=$_POST['date'];
   $time=$_POST['time'];
   $query1=mysqli_query($conn,"SELECT * FROM `bookslot` WHERE `email`='$email'");
   if(mysqli_num_rows($query1)>0)
   {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Failed!</strong> Select another Slot or Complete Your pre-Booked Slot!!!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    <span area-hidden='true'>&times;</span>
    </button>
    </div>";
   }
   else{
   $query="INSERT INTO `bookslot`(`name`, `email`, `propertyname`, `date`, `time`) VALUES ('$name','$email','$propertyname','$date','$time')";
   $run=mysqli_query($conn,$query);
   if($run)
   {
     $insert=true;
   }
   else{
     echo "failed!!!";
   }
  }
 }
//  else{
//   echo "Form failed to submit";
// }
  ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book slot</title>
    <link rel="stylesheet" href="navstyle.css">
	<!-- <link rel="stylesheet" href="posters.css"> -->
	<!-- <link rel="stylesheet" href="propertylist.css"> -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/55733442d5.js" crossorigin="anonymous"></script>
    <style>
    body{
        font-family:'open-sans', sans-serif;
        background-color:#EAF0E2;
    }    
    .slot{
        background-color:#ffffff;
        padding:42px;
        margin:20px;
        width:431px;
        height:700px;
        margin-left:500px;
        border-radius:10px;
    }

    input{
        width:100%;
        padding:8px;
        /* margin-top:20px; */
        border-radius: 20px;
        border-color: #a29bfe;
    }

    label{
      margin-top:20px;
      margin-bottom:5px;
    }

    input[type="submit"]{
        background-color: #a442f5;
        margin-top:20px;
        color:white;
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
      h6{
      margin-top:20px;
        font-size:18px;
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
<br><br><br>
<?php
   if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your record has been inserted succesfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    <span area-hidden='true'>&times;</span>
    </button>
    </div>";
  }
  ?>
<div class="slot">
    <form action="bookslot.php" method="POST">
        <h2 style="color:black">Book Your Slot Now...!</h2>
        <label>Name:</label><input type="text" name="name" id="name" placeholder="Enter Your Name" required>
        <label>Email:</label><input type="email" name="email" id="email" placeholder="Enter Your Email" required>
        <label>Property name:</label><input type="text"  name="propertyname" id="propertyname" placeholder="Enter property U want to visit" value="" required> 
        <label>Select a Date:</label><input type="date" name="date" id="date" placeholder="Select a Date" required>
        <label>Select time slot:</label><input type="time" name="time" id="time" placeholder="Select a Time" required>
        <input type="submit" class="bg-primary" style="border-radius:20px;" name="submit" id="submit"  value="Book Your Slot">
        <h6>Want to Cancel Slot? Contact Broker.</h6>
    </form>
    <br><br>
</div>
<!-- <img src="images/slot.jpg"> -->
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
</body>
</html>