<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Wheel | Air </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="assets/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome-6/dist-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <section>
        <?php echo $__env->make('air.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- Navbar -->

    <main id="main" style="padding-top: 60px;">
        
        <section class="shadow-sm">
            <div class="container  ">
            
                <div class="row p-3">
                    <div class="col-md-6 p-3">
                        <h2>Book Flight Ticket</h2>
                        <h3 class="sub-main-color">Plan your journey ahead</h3>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam viverra sagittis nunc, ac accumsan justo
                            vestibulum Donec blandit rutrum erat et posuere. </p>

                        <button class=" btn  btn-pry btn-radius m-3 shadow-sm" type="button" id="button-addon2">Plan
                            your Journey</button>
                    </div>
                    <div class="col-md-6 ps-2">
                        <img src="assets/img/tickek.png" class="image-fluid w-100" alt="">
                    </div>

                </div>
            </div>
        </section>
        <section class="shadow-sm">
            <div class="container  ">
            
                <div class="row p-3">
                    <div class="col-md-6 p-3">
                        <h2>Book A Hotel</h2>
                        <h3 class="sub-main-color">Secure a place to stay</h3>
                        <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam viverra sagittis nunc, ac accumsan justo
                            vestibulum Donec blandit rutrum erat et posuere. </p>

                        <button class=" btn  btn-pry btn-radius m-3 shadow-sm" type="button" id="button-addon2">
                            Secure a Place</button>
                    </div>
                    <div class="col-md-6 ps-2">
                        <img src="assets/img/hotel.png" class="image-fluid w-100" alt="">
                    </div>

                </div>
            </div>
        </section>
       
        
        <section class="shadow-sm bg-pro">
            <div class="container products">
                <div class="row p-3">
                    <div class="col-md-6 p-2">
                        <img src="assets/img/Ins.png" class="image-fluid w-100" alt="">
                    </div>
                    <div class="col-md-6 p-2 ">
                        
                        <h2>Insure Your Movement</h2>
                        <h3 class="sub-main-color"> Travel insurance with best intrest.</h3>
                        <p class="pt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam viverra sagittis nunc, ac accumsan justo
                            vestibulum Donec blandit rutrum erat et posuere.
                        </p>
                        <button class=" btn  btn-pry btn-radius mt-3 mb-3 shadow-sm" type="button"
                            id="button-addon2">Travel Insurance</button>

                    </div>

                </div>
            </div>
        </section>     
        
        <section class="shadow-sm bg-prob">
            <div class="container products">
                <div class="row p-3">
                    <div class="col-md-6 p-2">
                        <img src="assets/img/visa.png" class="image-fluid w-100" alt="">
                    </div>
                    <div class="col-md-6 p-2 pt-5 ">
                        
                        <h2>Visa Assistance</h2>
                        <h3 class="sub-main-color"> We assit in vissa procsessing </h3>
                        <p class="pt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam viverra sagittis nunc, ac accumsan justo
                            vestibulum Donec blandit rutrum erat et posuere.
                        </p>
                        <button class=" btn  btn-pry btn-radius mt-3 mb-3 shadow-sm" type="button"
                            id="button-addon2">Get Assistance</button>

                    </div>

                </div>
            </div>
        </section>
        <section class="shadow-sm bg-prob">
            <div class="container products">
                <div class="row p-3">
                    <div class="col-md-6 p-2">
                        <img src="assets/img/airpp.jpg" class="image-fluid w-100" alt="">
                    </div>
                    <div class="col-md-6 p-2 pt-5 ">
                        
                        <h2>Book a Lounge</h2>
                        <h3 class="sub-main-color">Get a little rest before you proceed </h3>
                        <p class="pt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam viverra sagittis nunc, ac accumsan justo
                            vestibulum Donec blandit rutrum erat et posuere.
                        </p>
                        <button class=" btn  btn-pry btn-radius mt-3 mb-3 shadow-sm" type="button"
                            id="button-addon2">Book a Lounge</button>

                    </div>

                </div>
            </div>
        </section>
        <section class="shadow-sm bg-prob">
            <div class="container products">
                <div class="row p-3">
                    <div class="col-md-6 p-2">
                        <img src="assets/img/Travel.png" class="image-fluid w-100" alt="">
                    </div>
                    <div class="col-md-6 p-2 pt-5 ">
                        
                        <h2>Tour Guide</h2>
                        <h3 class="sub-main-color">Get a little rest before you proceed </h3>
                        <p class="pt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam viverra sagittis nunc, ac accumsan justo
                            vestibulum Donec blandit rutrum erat et posuere.
                        </p>
                        <button class=" btn  btn-pry btn-radius mt-3 mb-3 shadow-sm" type="button"
                            id="button-addon2">Book a Lounge</button>

                    </div>

                </div>
            </div>
        </section>
        
        

    </main>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\travelwheel\resources\views/air/index.blade.php ENDPATH**/ ?>