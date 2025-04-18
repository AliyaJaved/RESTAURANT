


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Taste Fusion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
					<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">tastefusion@email.com</a></p>
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
			<a class="navbar-brand" href="index1.php">Taste.<span>fusion</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="chef.php" class="nav-link">Chef</a></li>
					<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="reservation.php" class="nav-link">Reservation</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="index1.php" class="nav-link">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap">
		<div class="home-slider owl-carousel js-fullheight">
			<div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Taste.fusion Restaurant</h2></span>
								<h1>Cooking Since</h1>
								<span class="subheading-2">1958</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Taste.fusion Restaurant</h2></span>
								<h1>Best Quality</h1>
								<span class="subheading-2 sub">Food</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
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
				<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
					<div class="row pb-5 pb-md-0">
						<div class="col-md-12 col-lg-7">
							<div class="heading-section mt-5 mb-4">
								<div class="pl-lg-3 ml-md-5">
									<span class="subheading">About</span>
									<h2 class="mb-4">Welcome to Taste.fusion</h2>
								</div>
							</div>
							<div class="pl-lg-3 ml-md-5">
								<p>Step into Taste Fusion and enjoy a laid-back dining experience with a focus on great food and good times. Our casual atmosphere and approachable menu are designed for relaxed meals with friends and family. Whether you're stopping by for a quick bite or a leisurely dinner, we’re here to make your visit enjoyable and memorable.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span>Now Booking</span>
					<h2>Private Dinners &amp; Happy Hours</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Specialities</span>
					<h2 class="mb-4">Our Menu</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Breakfast</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/breakfast-1.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Bacon</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹150</span>
									</div>
								</div>
								<p><span>Enjoy the irresistible crunch and rich flavor of our perfectly cooked bacon.</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/breakfast-3.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Hash Browns</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹200</span>
									</div>
								</div>
								<p><span>Delight in our crispy, golden-brown hash browns, made from freshly shredded potatoes and cooked to perfection.</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Scrambled Eggs</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹100</span>
									</div>
								</div>
								<p><span>Savor the comfort of our fluffy scrambled eggs, cooked to perfection for a creamy and soft texture.</span></p>
							</div>
						</div>
						<span class="flat flaticon-bread" style="left: 0;"></span>
						<span class="flat flaticon-breakfast" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Lunch</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/lunch-1.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Dal Fry</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹110</span>
									</div>
								</div>
								<p><span>Savor the rich, comforting flavors of our Dal Fry, a traditional Indian dish made with tender lentils simmered in a fragrant blend of spices, tomatoes, and onions.</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/lunch-2.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Veg Biryani</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹90</span>
									</div>
								</div>
								<p><span> Veg Biryani, a vibrant and flavorful rice dish infused with a medley of fresh vegetables and a rich blend of spices.</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/lunch-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Hummus Sandwich</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹155</span>
									</div>
								</div>
								<p><span>Enjoy the wholesome goodness of our Hummus Sandwich, featuring a generous spread of creamy, flavorful hummus on freshly baked bread.</span></p>
							</div>
						</div>
						<span class="flat flaticon-pizza" style="left: 0;"></span>
						<span class="flat flaticon-chicken" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Dinner</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dinner-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Baked Chicken</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹250</span>
									</div>
								</div>
								<p><span>Savor the succulent taste of our Baked Chicken, seasoned with a blend of herbs and spices and cooked to perfection.</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dinner-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Chicken Tacos</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹60</span>
									</div>
								</div>
								<p><span>Enjoy the bold flavors of our Chicken Tacos, featuring tender, marinated chicken grilled to perfection and served in soft, warm tortillas.</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dinner-3.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Meatball Casserole</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹95</span>
									</div>
								</div>
								<p><span>Indulge in our hearty Meatball Casserole, a comforting dish featuring tender, flavorful meatballs nestled in a rich tomato sauce and baked with layers of melted cheese. </span></p>
							</div>
						</div>
						<span class="flat flaticon-omelette" style="left: 0;"></span>
						<span class="flat flaticon-burger" style="right: 0;"></span>
					</div>
				</div>

				<!--  -->
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Desserts</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-1.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Choco Lava Cake</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹125</span>
									</div>
								</div>
								<p><span>Experience pure indulgence with our Choco Lava Cake, a decadent dessert that features a rich, molten chocolate center encased in a delicate, soft cake. </span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-2.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Pineapple Cake</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹120</span>
									</div>
								</div>
								<p><span>Delight in the tropical flavors of our Pineapple Cake, a moist and fluffy cake infused with fresh pineapple and topped with a light, creamy frosting.</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-3.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Biscoff Cheese Cake</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹350</span>
									</div>
								</div>
								<p><span>Indulge in the creamy delight of our Biscoff Cheesecake, a decadent dessert featuring a rich, velvety cheesecake filling atop a buttery Biscoff cookie crust.</span></p>
							</div>
						</div>
						<span class="flat flaticon-cupcake" style="left: 0;"></span>
						<span class="flat flaticon-ice-cream" style="right: 0;"></span>
					</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Wine Card</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Rose Wine</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹300</span>
									</div>
								</div>
								<p><span>Its refreshing acidity and light, crisp finish make it a versatile choice for pairing with a variety of dishes, from light salads and seafood to charcuterie and grilled vegetables. </span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-2.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>White Wine</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹199</span>
									</div>
								</div>
								<p><span>With notes of citrus, green apple, and delicate floral undertones, this wine offers a clean and invigorating taste. </span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Red Wine</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹299</span>
									</div>
								</div>
								<p><span>With notes of ripe berries, dark chocolate, and subtle hints of oak, this wine offers a complex and satisfying taste.</span></p>
							</div>
						</div>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Drinks &amp; Tea</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-1.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Hot Chocolate</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹250</span>
									</div>
								</div>
								<p><span>Warm up with our indulgent Hot Chocolate, a rich and creamy treat made from velvety cocoa and smooth milk. </span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-2.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Iced Tea</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹120</span>
									</div>
								</div>
								<p><span>Refresh yourself with our crisp and invigorating Iced Tea, brewed to perfection and chilled for a cool, revitalizing experience. </span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-3.jpeg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Lemonade</h3>
									</div>
									<div class="one-forth">
										<span class="price">₹100</span>
									</div>
								</div>
								<p><span>Quench your thirst with our zesty and refreshing Lemonade, made from freshly squeezed lemons and perfectly balanced with just the right amount of sweetness.</span></p>
							</div>
						</div>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-3 pb-2">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4">Happy Customer</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-7">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">John Gustavo</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									
									<div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Nicole</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									
									<div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Lewis</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									
									<div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Luca</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Liam</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Chef</span>
					<h2 class="mb-4">Our Master Chef</h2>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-4.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>John Gustavo</h3>
							<span class="position mb-2">CEO, Co Founder</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-2.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Michelle Fraulen</h3>
							<span class="position mb-2">Head Chef</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-3.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Alfred Smith</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-1.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Antonio Santibanez</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
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
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Blog</span>
					<h2 class="mb-4">Recent Blog</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#"> Dessert Spotlight: Our Decadent </a></div>
								
							</div>
							<h3 class="heading"><a href="#">Indulge your sweet tooth with our decadent Biscoff Cheesecake. Made with the finest ingredients and a touch of love, this dessert is the perfect end to any meal. Come by and treat yourself to a slice of heaven.</a></h3>
							<p class="clearfix"></p>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
					
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">Chef’s Recipe</a></div>
							
							</div>
							<h3 class="heading"><a href="#">Missing your favorite dish from Taste Fusion? Chef shares the recipe for Meatball Casserole so you can recreate it at home. Follow our step-by-step guide and bring a taste of our kitchen to yours.</a></h3>
							<p class="clearfix">
								
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">Event Highlights</a></div>
							</div>
							<h3 class="heading"><a href="#">Our recent event, birthday bash, was a huge success! Guests enjoyed a night of delicious food, live music, and great company. Thank you to everyone who joined us and made it a night to remember. Stay tuned for more exciting events at Taste Fusion!</a></h3>
							<p class="clearfix">
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2>We Make Delicious &amp; Nutritious Food</h2>
					<a href="reservation.html" class="btn btn-white btn-outline-white">Book A Table Now</a>
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
						<p>At Taste Fusion, we believe in the freshest ingredients from local farms straight to your plate. Our menu features seasonal dishes crafted with care, reflecting our commitment to sustainability and quality. Enjoy a dining experience where every bite supports local agriculture and showcases the true taste of our community.
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

					<p class="mb-0">
						Thanks for visiting our website<i class="fa fa-heart" aria-hidden="true"></i> 
						</p>
					</div>
				</div>
			</div>
		</footer>
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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