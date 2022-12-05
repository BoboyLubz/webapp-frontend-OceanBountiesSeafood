@extends('layouts.app')

@section('content')


        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Ocean Bounties Seafood Market & Restaurant</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">ABOUT US</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">SERVICES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">ANNOUNCEMENT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">SIGN IN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
               
            </div> 
        </header>    
       
        <!-- About-->
        <section class="page-section bg-danger" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">script here!</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-card-checklist" style="font-size: 100px; color: red;"></i></div>
                            <h3 class="h4 mb-2">Catering</h3>
                            <p class="text-muted mb-0">script!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-truck" style="font-size: 100px; color: red;"></i></div>
                            <h3 class="h4 mb-2">Delivery</h3>
                            <p class="text-muted mb-0">script!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-cart4" style="font-size: 100px; color: red;"></i></div>
                            <h3 class="h4 mb-2">Market</h3>
                            <p class="text-muted mb-0">script!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-list-check" style="font-size: 100px; color: red;"></i></div>
                            <h3 class="h4 mb-2">Dine-in</h3>
                            <p class="text-muted mb-0">script!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        
        <!--Announcement Carousel -->
        
        <div id="portfolio">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                        <img src="assets/img/portfolio/thumbnails/menus.jpg" style="width:100%">
                    <div class="text"></div>
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                        <img src="assets/img/portfolio/thumbnails/order1.png" style="width:100%">
                    <div class="text"></div>
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                        <img src="assets/img/portfolio/thumbnails/order2.jpg" style="width:100%">
                    <div class="text"></div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div> 
        <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        <!--End of Announcement-->
        <!-- Call to action-->
        <!--
        <section class="page-section bg-dark text-white">
            
        </section> -->
        <!--
        <section class="slider">
	        <ul id="autoWidth" class="cs-hidden">
	            	
                <li class="item-a">
                    
	                <div class="box">
	                    
	                    <div class="slide-img">
	                        <img alt="1" src="assets/img/portfolio/thumbnails/tuna-poke.jpg">
	                            
	                        <div class="overlay">
	                            	
	                            <a href="#" class="buy-btn">Order Now</a>	
	                        </div>
	                    </div>
	                    
	                    <div class="detail-box">
	                        
	                        <div class="type">
	                            <a href="#">Rabbed Cardigan</a>
	                            <span>Noe Arrival</span>
	                        </div>
	                        
	                        <a href="#" class="price">$23</a>
		
	                    </div>
	
	                </div>		
                </li> -->
                <!--
                <li class="item-b">
                    
	                <div class="box">
	                    
	                    <div class="slide-img">
	                        <img alt="2" src="assets/img/portfolio/thumbnails/shrimp-tempura.jpg">
	                        
	                        <div class="overlay">
	                            
	                            <a href="#" class="buy-btn">Order Now</a>	
	                        </div>
	                    </div>
	                    
	                    <div class="detail-box">
	                        
	                        <div class="type">
	                            <a href="#">Rabbed Cardigan</a>
	                            <span>Noe Arrival</span>
	                        </div>
	                        
	                        <a href="#" class="price">$20</a>
		
	                    </div>
	
	                </div>		
                </li>
	            	
                <li class="item-c">
                    
	                <div class="box">
	                    
	                    <div class="slide-img">
	                        <img alt="3" src="assets/img/portfolio/thumbnails/seafood-paela.jpg">
	                        
	                        <div class="overlay">
	                            	
	                            <a href="#" class="buy-btn">Order Now</a>	
	                        </div>
	                    </div>
	                    
	                    <div class="detail-box">
	                        
	                        <div class="type">
	                            <a href="#">Rabbed Cardigan</a>
	                            <span>Noe Arrival</span>
	                        </div>
	                        
	                        <a href="#" class="price">$26</a>
		
	                    </div>
	
	                </div>		
                </li>
	            
                <li class="item-d">
                    
	                <div class="box">
	                    
	                    <div class="slide-img">
	                        <img alt="4" src="assets/img/portfolio/thumbnails/octupos-suite.jpg">
	                        
	                        <div class="overlay">
	                            	
	                            <a href="#" class="buy-btn">Order Now</a>	
	                        </div>
	                    </div>
	                    
	                    <div class="detail-box">
	                        
	                        <div class="type">
	                            <a href="#">Rabbed Cardigan</a>
	                            <span>Noe Arrival</span>
	                        </div>
	                        
	                        <a href="#" class="price">$27</a>
		
	                    </div>
	
	                </div>		
                </li>
                	
                <li class="item-d">
                    
	                <div class="box">
	                    
	                    <div class="slide-img">
	                        <img alt="5" src="assets/img/portfolio/thumbnails/lumi.jpg">
	                        
	                        <div class="overlay">
	                            	
	                            <a href="#" class="buy-btn">Order Now</a>	
	                        </div>
	                    </div>
	                    
	                    <div class="detail-box">
	                        
	                        <div class="type">
	                            <a href="#">Rabbed Cardigan</a>
	                            <span>Noe Arrival</span>
	                        </div>
	                        
	                        <a href="#" class="price">$27</a>
		
	                    </div>
	                </div>		
                </li>
                	
                <li class="item-d">
                    
	                <div class="box">
	                    
	                    <div class="slide-img">
	                        <img alt="6" src="assets/img/portfolio/thumbnails/lubster.jpg">
	                        
	                        <div class="overlay">
	                            	
	                            <a href="#" class="buy-btn">Order Now</a>	
	                        </div>
	                    </div>
	                    
	                    <div class="detail-box">
	                        
	                        <div class="type">
	                            <a href="#">Rabbed Cardigan</a>
	                            <span>Noe Arrival</span>
	                        </div>
	                        
	                        <a href="#" class="price">$27</a>
		
	                    </div>
	                </div>		
                </li>
                	
                <li class="item-d">
                    
	                <div class="box">
	                    
	                    <div class="slide-img">
	                        <img alt="7" src="assets/img/portfolio/thumbnails/fried-squid.jpg">
	                        
	                        <div class="overlay">
	                            	
	                            <a href="#" class="buy-btn">Order Now</a>	
	                        </div>
	                    </div>
	                    
	                    <div class="detail-box">
	                        
	                        <div class="type">
	                            <a href="#">Rabbed Cardigan</a>
	                            <span>Noe Arrival</span>
	                        </div>
	                        
	                        <a href="#" class="price">$27</a>
		
	                    </div>
	                </div>		
                </li>
                	
                <li class="item-d">
                    
	                <div class="box">
	                    
	                    <div class="slide-img">
	                        <img alt="8" src="assets/img/portfolio/thumbnails/baked-scallops.jpg">
	                        
	                        <div class="overlay">
	                            
	                            <a href="#" class="buy-btn">Order Now</a>	
	                        </div>
	                    </div>
	                    
	                    <div class="detail-box">
	                        
	                        <div class="type">
	                            <a href="#">Rabbed Cardigan</a>
	                            <span>Noe Arrival</span>
	                        </div>
	                        
	                        <a href="#" class="price">$27</a>
		
	                    </div>
	                </div>		
                </li> -->
            </ul>
        </section> -->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Order now!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">script here!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required"/>
                                <label for="name">Full Name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email Address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone Number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-success btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>mobile: (09633107002)</div>
                        <div>tel: (817 4630)</div>
                    </div>
                </div>
            </div>
        </section>
        

@endsection