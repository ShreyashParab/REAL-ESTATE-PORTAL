<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mortage Calculator</title>
    
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="gallery.css">
  <link rel="stylesheet" href="navstyle.css">
  <link rel="stylesheet" href="sidebar.css">
  <link rel="stylesheet" href="guide.css">
  <link rel="stylesheet" href="cal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <style>
    .map {
            width: 250px;
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
			}  
  </style>
</head>
<body>

    
    <!-- Side navigation -->
<div class="sidenav" style="background-color:#333333;">
  <a href="guide.php">Graphical representation of Real Estate Industry</a>
  <br>
  <a href="tips.php">Tips and Tricks</a>
  <br>
  <a href="legal.php">Legal Advice</a>
  <br>
  <a href="calculator.php" style="color:rgb(53, 253, 53);">Mortage calculator</a>
  <br>
  <a href="news.php">Real Estate News</a>   
</div>

<nav>
		<div class="logo">
			<p>REAL ESTATE PORTAL</p>
		</div>
		<ul>
			<li><a href="welcome.php">home</a></li>
			<li><a href="#Aboutus">about us</a></li>
			<li><a href="#" class="active">property guide</a></li>
			<li><a href="index1.php">Admin</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
</nav>
<br>
    <br>
    <br>
<!-- Page content -->

<div class="main" style="text-align:justify;">
    <h3 class="center">Mortage calculator</h3><hr><br>
    <article>Mortgage calculators are automated tools that enable users to determine the financial implications of changes in one or more variables in a mortgage financing arrangement. Mortgage calculators are used by consumers to determine monthly repayments, and by mortgage providers to determine the financial suitability of a home loan applicant.</article>
    <article>For eg. If you take loan of <b>50 lakhs</b> and you have <b>1 year</b> to return by Interest <b>10%</b> thsn your Monthly EMI will be <b>₹ 45,833</b>.</article><br>
    <div class = "cont">
        <h2>Mortage Calculator</h2>
        <p>Loan amount: <br><input id = "amount" type = "number" value = "1" onchange = "calculateLoan()"> ₹</p>
        <p>Interest Rate:<br><input id = "interest" type = "number" value = "0.1" onchange = "calculateLoan()"> %</p>
        <p>Months to Pay: <br> <input id = "months" type = "number" value = "1" onchange = "calculateLoan()"></p>
        <h2 id = "payment"></h2>
    </div>
</div> 
     

<div class="foot" style="margin-left: 360px;">
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
      <div class="row" >
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact us Here:</h5>
		  <div class="map">
		  <img src="images/map.png" width="200px">
		  </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 my-5">
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
<script src = "app.js"></script>
</body>
</html>