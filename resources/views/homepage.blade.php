@extends('homepage.layouts.app')

@section('title', 'Homepage')

@section('content')


        @include('homepage.includes.navbar')
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading" text-color="blue">Welcome To Our Shop!</div>
                <div class="masthead-heading text-uppercase">
                    Margie's
                    <h2> Cafe + Bakeshop</h2>
                </div>
                
                <a class="btn btn-warning btn-xl text-uppercase" href="#services">Learn More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section bg-slate" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Curbside pick-up</h4>
                        <p class="text-muted">Margie's Bakeshop + Cafe is a local business specializing in baked goods and delicious café drinks. 
                            We understand that other customers may not want to come inside the store to shop during these uncertain times, so we have introduced a convenient curbside pick-up service.
                            This service allows our customers to place their orders online or over the phone and pick up their purchases at the designated curbside pick-up location. 
                            This service is perfect for those who want a quick breakfast or lunch on the go or those who want to stock up on baked goods for the week. 
                            Our Bakeshop + Cafe is dedicated to providing our customers with the best possible service and experience, and this curbside pick-up service is just one way we are doing to satisfy their cravings.</p>
                    </div>
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Walk In Service</h4>
                        <p class="text-muted">We also offered a walk in service you can visit us Margie's Cafe at Jose C. Aquino Ave, Butuan City.</p>
                    </div>
        
                </div>
            </div>
        </section>
        <!-- Product Grid-->
        <section class="page-section bg-dark" id="Product">
            <div class="container">
                <div class="text-center text-white">
                    <h2 class="section-heading text-uppercase">Product</h2>
                    <h3 class="section-subheading text-muted"> SOME SNEAK PEAK OF OUR DELICIOUS PRODUCT</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Product item 1-->
                        <div class="Product-item">
                            <a class="Product-link" data-bs-toggle="modal" href="#ProductModal1">
                                <div class="Product-hover">
                                    <div class="Product-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/Product/chocolate-cake.png" alt="..." />
                            </a>
                            <div class="Product-caption">
                                <div class="Product-caption-heading">Chocolate Cake</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Product item 2-->
                        <div class="Product-item">
                            <a class="Product-link" data-bs-toggle="modal" href="#ProductModal2">
                                <div class="Product-hover">
                                    <div class="Product-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/Product/bread.png" alt="..." />
                            </a>
                            <div class="Product-caption">
                                <div class="Product-caption-heading">Bread</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Product item 3-->
                        <div class="Product-item">
                            <a class="Product-link" data-bs-toggle="modal" href="#ProductModal3">
                                <div class="Product-hover">
                                    <div class="Product-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/Product/cappuccino.jpg" alt="..." />
                            </a>
                            <div class="Product-caption">
                                <div class="Product-caption-heading">Cappuccino</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Product item 4-->
                        <div class="Product-item">
                            <a class="Product-link" data-bs-toggle="modal" href="#ProductModal4">
                                <div class="Product-hover">
                                    <div class="Product-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/Product/sans-rival.png" alt="..." />
                            </a>
                            <div class="Product-caption">
                                <div class="Product-caption-heading">Sans Rival</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Product item 5-->
                        <div class="Product-item">
                            <a class="Product-link" data-bs-toggle="modal" href="#ProductModal5">
                                <div class="Product-hover">
                                    <div class="Product-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/Product/wheat-bread.png" alt="..." />
                            </a>
                            <div class="Product-caption">
                                <div class="Product-caption-heading">Wheat Bread</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Product item 6-->
                        <div class="Product-item">
                            <a class="Product-link" data-bs-toggle="modal" href="#ProductModal6">
                                <div class="Product-hover">
                                    <div class="Product-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/Product/hot-choco.jpg" alt="..." />
                            </a>
                            <div class="Product-caption">
                                <div class="Product-caption-heading">Hot Choco</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section " id="about">
            <div class="container ">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/abouts.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Our shop</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> Margie's Bakeshop + Cafe is a delightful bakery and cafe that offers a wide range of delicious baked goods and café favorites. 
                                The shop is a locally owned and operated establishment in Butuan City, Philippines it was established in 2019.  </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/breads.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Delicious Food We Offered To Our Dear Customer</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Our bakeshop and cafe offer a portion of delicious food and beverages for our customers. 
                                Our menu includes a variety of cakes, pieces of bread, pastries, sandwiches, and coffee drinks. 
                                Our food is made with fresh, high-quality ingredients and is prepared with care by our skilled bakers and chefs. 
                                Whether you're looking for a sweet treat or a hearty meal, you'll find something to enjoy at Margie's Bakeshop + Cafe.</p></div>
                        </div>
                    </li>
                    <li>
                        
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
        
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="container">
                        <div class="contact-parent">
                           <div class="contact-child child1">
                              <p>
                                 <i class="fas fa-map-marker-alt"></i> Address <br />
                                 <span> Jose C. Aquino Ave
                                 <br />
                                 Butuan City, Agusan del Norte
                                 </span>
                              </p>
                              <p>
                                 <i class="fas fa-phone-alt"></i> Let's Talk <br />
                                 <span> 09338578260</span>
                              </p>
                              <p>
                                 <i class=" far fa-envelope"></i> Email <br />
                                 <span>margies@gmail.com</span>
                              </p>
                           </div>
                           <div class="contact-child child2">
                              <div class="inside-contact">
                                 <h3>
                                    <span id="confirm">
                                 </h3>
 
                                 <!-- Embedded Google Map  -->
                                <div class="container">
                                    <div class="justify-items-center">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.2742764301656!2d125.53352511423495!3d8.946854392734911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c14d2754ff4b%3A0xcdd79ad9202f3f70!2si.Bake%20Pastries!5e0!3m2!1sen!2sph!4v1675205440704!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
                                     </iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                </form>
           
        
       
        @include('homepage.includes.footer')

        <!-- Product Modals-->
        <!-- Product item 1 modal popup-->
        <div class="Product-modal modal fade" id="ProductModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body ">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Chocolate Cake</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Product/chocolate-cake.png" alt="..." />
                                    <p>A moist and rich chocolate cake made with premium cocoa powder and topped with a layer of smooth chocolate ganache. Perfect for any chocolate lover.</p>
                                   
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product item 2 modal popup-->
        <div class="Product-modal modal fade" id="ProductModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Bread</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Product/bread.png" alt="..." />
                                    <p>Our bread is made with the freshest ingredients and baked to perfection, making it the perfect accompaniment to any meal.</p>
                                    
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product item 3 modal popup-->
        <div class="Product-modal modal fade" id="ProductModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cappuccino</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Product/cappuccino.jpg" alt="..." />
                                    <p>A classic coffee beverage made with espresso, steamed milk, and a layer of frothy foam. Perfect for those who love a strong coffee with a touch of creaminess.</p>
                                    
                                           
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product item 4 modal popup-->
        <div class="Product-modal modal fade" id="ProductModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Sans Rival</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Product/sans-rival.png" alt="..." />
                                    <p>A Filipino dessert consisting of layers of cashew meringue and buttercream, topped with chopped cashews. Perfect for those who love sweet and nutty treats.</p>
                                    
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product item 5 modal popup-->
        <div class="Product-modal modal fade" id="ProductModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Wheat Bread</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Product/wheat-bread.png" alt="..." />
                                    <p>A healthy alternative to traditional bread, made with whole wheat flour, yeast, salt, and water. Perfect for those looking for a more nutritious option.</p>
                                    
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product item 6 modal popup-->
        <div class="Product-modal modal fade" id="ProductModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Hot Choco</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Product/hot-choco.jpg" alt="..." />
                                    <p>A warm and comforting cup of hot chocolate made with real cocoa powder and milk. Perfect for those chilly days or as a dessert after a meal.</p>
                                    
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection