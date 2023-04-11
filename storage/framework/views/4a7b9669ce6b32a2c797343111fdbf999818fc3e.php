<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Wheel </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="assets/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome-6/dist-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleslide.css">
</head>

<body>
    <!-- Navbar -->
    <section>
        <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- Navbar -->
   
    <main id="main">
         <!-- Slidebar -->
    <?php echo $__env->make('slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Slidebar -->
       <!-- <section class="shadow-sm">
            <div class="container  ">
                <div class="row p-2">
                    <div class="col-md-6 p-3">
                        <h1>Travel Wheel</h1>
                        <h3 class="sub-main-color">Plan Your Journey Ahead</h3>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam viverra sagittis nunc, ac accumsan justo
                            vestibulum Donec blandit rutrum erat et posuere. </p>

                        <button class=" btn  btn-pry btn-radius m-3 shadow-sm" type="button" id="button-addon2">Plan
                            your Journey</button>
                    </div>
                    <div class="col-md-6 ps-5">
                        <img src="assets/img/trans.jpg" class="image-fluid w-75" alt="">
                    </div>

                </div>
            </div>
        </section>-->
        <section class="shadow-sm bg-sec">
            <div class="container">
                <div class="row p-3">
                    <div class="col-md-6 ">
                        <img src="assets/img/tw.jpg" class="image-fluid w-100" alt="">
                    </div>
                    <div class="col-md-6 p-3 pt-2">
                        <h2>About Us</h2>
                        <p class="pt-2">TravelWheel is established to rebrand the face of all the modes of 
                            transportation by establishing the First Travel Broker in the transportation 
                            sector. 
                        </p>
                         <p>   We are working towards being a specialized company in finding the best 
                            deals for all the modes of transportation and their related services.
                        </p>
                        <a href="/aboutus">
                            <button class=" btn  btn-pry btn-radius m-3 shadow-sm" type="button" id="button-addon2">Read
                            More
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <section class="container">
            <div class="row p-4 pt-5 products">
                <h4 class="text-center sub-main-color">Our Products</h4>
                <p class="text-center p-2 pe-3 ps-3">
                With our years of experience, we broker and aggregate the best deals in all our product with 
                our trusted and <br> verified vendors across Nigeria to support individuals, 
                groups and travel consultants. <br> You can compare our price with what your agent. 

                </p>
            </div>
        </section>
        <section class="shadow-sm">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12 p-3">
                       <h4> Air Transport Products</h4>
                    </div>
                    <div class="col-6 col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow text-center p-3 product">
                                <img src="assets/img/pa.png" class="image-fluid w-50" alt="">
                                <h6>
                                
                                    Flight <br> Ticket				
                                </h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6  col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow text-center p-3 product">
                            <img src="assets/img/phb.png" class="image-fluid w-50" alt="">
                                <h6>Hotel <br> Bookings</h6>
                            </div>
                        </a>

                    </div>
                    <div class="col-6  col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow p-3 text-center product">
                            <img src="assets/img/pp.png" class="image-fluid w-50" alt="">
                                <h6>Airport <br> Protocol</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow p-3 text-center product">
                            <img src="assets/img/pc.png" class="image-fluid w-50" alt="">
                                <h6>Air Cargo and Delivery</h6>
                            </div>
                        </a>

                    </div>
                    <div class="col-6 col-sm-2 p-2">
                        <a href="air"></a>
                            <div class="shadow p-3 text-center product">
                            <img src="assets/img/pt.png" class="image-fluid w-50" alt="">
                                <h6>Tour <br> <b> <span class="text-muted" style="font-size:12px;">Local & International</span></b> </h6>
                                
                            </div>

                    </div>
                    <div class="col-6 col-sm-2 p-2 ">
                        <a href="air">
                            <div class="shadow text-center p-3 product">
                            <img src="assets/img/ph.png" class="image-fluid w-50" alt="">
                                <h6>Holiday Package</h6>
                            </div>
                        </a>

                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-6 col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow text-center p-3 product">
                                <img src="assets/img/ptg.png" class="image-fluid w-50" alt="">
                                <h6>
                                
                                Tour Guide <br> Services 				
                                </h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6  col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow text-center p-3 product">
                            <img src="assets/img/ppa.png" class="image-fluid w-50" alt="">
                                <h6>Visa <br> Assistance </h6>
                            </div>
                        </a>

                    </div>
                    <div class="col-6  col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow p-3 text-center product">
                            <img src="assets/img/ppi.png" class="image-fluid w-50" alt="">
                                <h6>Travel <br> Insurance </h6>
                            </div>
                        </a>

                    </div>
                    <div class="col-6 col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow p-3 text-center product">
                            <img src="assets/img/pal.png" class="image-fluid w-50" alt="">
                                <h6>Airport <br> Lounge</h6>
                            </div>
                        </a>

                    </div>
                    <div class="col-6 col-sm-2 p-2">
                        <a href="air">
                            <div class="shadow p-3 text-center product">
                            <img src="assets/img/ppp.png" class="image-fluid w-50" alt="">
                                <h6> Passport <br> <span class="text-muted" style="font-size:12px;"> <b> Renewal /New Assistance </b> </span></h6>
                            </div>
                        </a>

                    </div>
                    <div class="col-6 col-sm-2 p-2 ">
                        <a href="air">
                            <div class="shadow text-center product p-3">
                            <img src="assets/img/pht.png" class="image-fluid w-50" alt="">
                                <h6>Helicorpter <br> Bookings</h6>
                            </div>
                        </a>
                    </div>
                    
                </div>
                
            </div>
        </section>
        
        <section class="shadow-sm">
            <div class="container-fluid">
                <div class="row p-4 pt-5 partners">
                    <h4 class="text-center sub-main-color ">Our Partners</h4>
                </div>

                <div class="row p-4 text-center">
                    
                    <div class="col-6  col-sm-6 col-md-2 p-2">
                        <img src="assets/img/First-con.png " alt="">
                    </div>
                    <div class="col-6  col-sm-6 col-md-2 p-2">
                        <img src="assets/img/HOB.png" alt="">
                    </div>
                    <div class="col-6  col-sm-6 col-md-2 p-2">
                        <img src="assets/img/Rebate.jpg" alt="">
                    </div>
                    <div class="col-6  col-sm-6 col-md-2 p-2">
                        <img src="assets/img/pukka.png" alt="">
                    </div>
                    <div class="col-6  col-sm-6 col-md-2 p-2">
                        <img src="assets/img/Spiffy.png" alt="">
                    </div>
                    
                    <div class="col-6  col-sm-6 col-md-2 p-2">
                        <img src="assets/img/First-con.png" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
     <!-- jQery -->
     <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>

<!-- bootstrap js -->
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\travelwheel\resources\views/welcome.blade.php ENDPATH**/ ?>