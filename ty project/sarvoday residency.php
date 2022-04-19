<?php
  require 'config.php';
  $sql = "SELECT * FROM `propertylist` WHERE name='shanti vihar'";
  $query_run = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
	
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="gallery.css">
  <link rel="stylesheet" href="navstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <script>
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
		
		.map{
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
  </script>

  
</head>
<body>
<nav>
		<div class="logo">
			<p>REAL ESTATE PORTAL</p>
		</div>
		<ul>
			<li><a href="welcome.php" >home</a></li>
			<li><a href="#Aboutus">about us</a></li>
			<li><a href="">property guide</a></li>
			<li><a href="index1.php">Admin</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
</nav>
<br><br>
<div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "images/img1.jpg" alt = "property image">
              <img src = "images/img2.jpg" alt = "property image">
              <img src = "images/img3.jpg" alt = "property image">
              <img src = "images/img4.jpg" alt = "property image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "images/img1.jpg" alt = "property image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "images/img2.jpg" alt = "property image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "images/img3.jpg" alt = "property image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "images/img4.jpg" alt = "property image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Sarvodaya Residency</h2>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>3.5(8)</span>
          </div>
          <div class = "product-detail">
            <h2>about this Property: </h2>
            <p>This is an exotic property of virar. It presents almost all fascilities with new technology. This contain modern feature like Clubhouse, Swimingpool, Gym, Meditation room and even Banquet. Besides that the Balcony view is superb. For more detailed information about property and Buying details Contact to our Broker/Owner from below Contact no.:</p>
            <!-- <p><h6>CONTACT US NOW...!!!</h6></p> -->
            <ul>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.959 17l-4.5-4.319 1.395-1.435 3.08 2.937 7.021-7.183 1.422 1.409-8.418 8.591z"/></svg> Price: <span>50.00Lk</span></li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.959 17l-4.5-4.319 1.395-1.435 3.08 2.937 7.021-7.183 1.422 1.409-8.418 8.591z"/></svg> Rooms: <span>1 BHK</span></li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.959 17l-4.5-4.319 1.395-1.435 3.08 2.937 7.021-7.183 1.422 1.409-8.418 8.591z"/></svg> size: <span>2000 X 2000 sq. m.</span></li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.959 17l-4.5-4.319 1.395-1.435 3.08 2.937 7.021-7.183 1.422 1.409-8.418 8.591z"/></svg> Furnishing: <span>semi furnished</span></li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.959 17l-4.5-4.319 1.395-1.435 3.08 2.937 7.021-7.183 1.422 1.409-8.418 8.591z"/></svg> Other Features: <span>Clubhouse, Swimingpool, AC rooms, Library, Playground</span></li>
            </ul>
          </div>
          <button type = "button" class = "btn btn-primary" style="border-radius:20px;">
              <a href="bookslot.php" style="color:white; text-decoration:none;"><i class="fa fa-solid fa-calendar-check"></i> Book Your Slot </a>
            </button>
          <div class = "purchase-info">
              <h6><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3.59 1.322l2.844-1.322 4.041 7.89-2.725 1.341c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-7.861 3.591-19.101-18.258-11.384-22.281zm1.93 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.971-.474-2.271-4.383-1.026.5c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.497-2.251-4.398zm7.832 7.649l2.917.87c.223-.747.16-1.579-.24-2.317-.399-.739-1.062-1.247-1.808-1.469l-.869 2.916zm1.804-6.059c1.551.462 2.926 1.516 3.756 3.051.831 1.536.96 3.263.498 4.813l-1.795-.535c.325-1.091.233-2.306-.352-3.387-.583-1.081-1.551-1.822-2.643-2.146l.536-1.796zm.95-3.186c2.365.705 4.463 2.312 5.729 4.656 1.269 2.343 1.466 4.978.761 7.344l-1.84-.548c.564-1.895.406-4.006-.608-5.882-1.016-1.877-2.696-3.165-4.591-3.729l.549-1.841z"/></svg> Contact us:+91 772XXXXX36</h6>
          </div>    
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

    
    <script src="script.js"></script>


</body>
</html>