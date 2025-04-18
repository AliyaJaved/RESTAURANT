<!DOCTYPE html>
<html lang="en">
<head>
	<title>Taste Fusion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">tastefusion</a>@email.com</a></p>
				</div>
				<div class="col-12 col-md d-flex justify-content-md-end">
					<p class="mb-0">Mon - Fri / 9:00-21:00, Sat - Sun / 10:00-20:00</p>
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Taste.<span>fusion</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="chef.php" class="nav-link">Chef</a></li>
					<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
					<li class="nav-item active"><a href="reservation.php" class="nav-link">Reservation</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="index1.php" class="nav-link">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center mb-5">
					<h1 class="mb-2 bread">Book A Table Now</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Reservation <i class="fa fa-chevron-right"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
				<form action="booked.php" class="appointment-form" id="bookingForm" onsubmit="return handleSubmit(event)"> 						
    <h3 class="mb-3">Book your Table</h3> 						
    <div class="row"> 							
        <div class="col-md-12"> 								
            <div class="form-group"> 									
                <input type="text" name="name" class="form-control" placeholder="Name" required minlength="2"> 								
            </div> 							
        </div> 							
        <div class="col-md-12"> 								
            <div class="form-group"> 									
                <input type="email" name="email" class="form-control" placeholder="Email" required> 								
            </div> 							
        </div> 							
        <div class="col-md-12"> 								
            <div class="form-group"> 									
                <input type="tel" name="phone" class="form-control" placeholder="Phone" required pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number"> 								
            </div> 							
        </div> 							
        <div class="col-md-12"> 								
            <div class="form-group"> 									
                <div class="input-wrap"> 										
                    <div class="icon"><span class="fa fa-calendar"></span></div> 										
                    <input type="date" id="date" name="Reservation Date" placeholder="Select your date" required>              									
                </div> 								
            </div> 							
        </div>
		<div class="col-md-12"> 								
            <div class="form-group"> 									
                <div class="input-wrap"> 										
                    <div class="icon"><span class="fa fa-clock-o"></span></div> 										
                    <select name="time" class="form-control" required>
                        <option value="" style="color: black" disabled selected>Select Time</option>
                        <option value="11:00" style="color: black">11:00 AM</option>
                        <option value="11:30" style="color: black">11:30 AM</option>
                        <option value="12:00" style="color: black">12:00 PM</option>
                        <option value="12:30" style="color: black">12:30 PM</option>
                        <option value="13:00" style="color: black">1:00 PM</option>
                        <option value="13:30" style="color: black">1:30 PM</option>
                        <option value="14:00" style="color: black">2:00 PM</option>
                        <option value="14:30" style="color: black">2:30 PM</option>
                        <option value="18:00" style="color: black">6:00 PM</option>
                        <option value="18:30" style="color: black">6:30 PM</option>
                        <option value="19:00" style="color: black">7:00 PM</option>
                        <option value="19:30" style="color: black">7:30 PM</option>
                        <option value="20:00" style="color: black">8:00 PM</option>
                        <option value="20:30" style="color: black">8:30 PM</option>
                        <option value="21:00" style="color: black">9:00 PM</option>
                    </select>             									
                </div> 								
            </div> 							
        </div> 	 							
        						
        <div class="col-md-12"> 								
            <div class="form-group"> 									
                <div class="form-field"> 										
                    <div class="select-wrap"> 											
                        <div class="icon"><span class="fa fa-chevron-down"></span></div> 											
                        <select name="guests" class="form-control"> 												
                            <option value="" style="color: black" disabled selected>Guest</option> 												
                            <option value="1" style="color: black">1</option> 												
                            <option value="2" style="color: black">2</option> 												
                            <option value="3" style="color: black">3</option> 												
                            <option value="4" style="color: black">4</option> 												
                            <option value="5" style="color: black">5</option> 											
                        </select> 										
                    </div> 									
                </div> 								
            </div> 							
        </div> 							
        <div class="col-md-12"> 								
            <div class="form-group"> 									
                <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4"> 								
            </div> 							
        </div> 						
    </div> 					
</form>

<script>
function handleSubmit(event) {
    event.preventDefault(); // Prevent the form from submitting immediately
    
    alert("Your table is booked!"); // Show the alert message
    
    return false; // Prevent default form submission
}
</script>
					
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image: url(images/bg_6.jpg);"></div>
					<div class="img img-2 w-100 ml-md-2" style="background-image: url(images/bg_4.jpg);"></div>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">When spices start speaking</span>
						<h2 class="mb-4">Taste Fusion</h2>
						<p>Welcome to Taste Fusion, where passion meets flavor! Our restaurant is dedicated to bringing you a memorable dining experience with a menu crafted from the freshest ingredients and inspired by culinary traditions from around the world. Whether you're here for a casual meal with friends, a romantic dinner, or a special celebration, our friendly staff and inviting atmosphere will make you feel right at home. At Taste Fusion, we believe that great food is meant to be shared and enjoyed. Join us and discover why we are a local favorite!
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-no-pb ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Taste.fusion</h2>
						<p>Discover the vibrant flavors of Taste Fusion, where contemporary cuisine meets a chic, urban ambiance. Our innovative menu features fresh, seasonal ingredients and bold flavors, crafted to excite your palate and redefine your dining experience. Join us for a stylish meal and experience the cutting-edge of culinary trends.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Open Hours</h2>
						<ul class="list-unstyled open-hours">
							<li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
							<li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
							<li class="d-flex"><span>Sunday</span><span> Closed</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Instagram</h2>
						<div class="thumb d-sm-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
							</a>
						</div>
						<div class="thumb d-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Newsletter</h2>
						<p>"Stay Updated with Our Latest News!"</p>
						<form action="#" class="subscribe-form">
							<div class="form-group">
								<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="form-control submit px-3">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0 bg-primary py-3">
			<div class="row no-gutters">
				<div class="col-md-12 text-center">

					<p class="mb-0">Thanks for visiting our website<i class="fa fa-heart" aria-hidden="true"></i></p>
					</div>
				</div>
			</div>
		</footer>
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		
</body>
</html>