<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rabmot Automoblie $ Licensing </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="assets/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome-6/dist-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <section>
        @include('layouts.nav')
    </section>
    <!-- Navbar -->
   
    <main id="main">
    @include('layouts.slide')
        <!-- <section class="shadow bg-light">
            <div class="container">
                <div class="row p-3">
                    <div class="col-md-6 p-5 side  text-center">
                        <h4>REGISTER AND RENEW YOUR <br>
                        GENUINE CAR PAPERS WITHIN</h4>
                        <h1>72 HOURS</h1>
                        <h5>(With free doorstep delivery)</h5>
                        <button class="btn-radius btn-pry shadow-sm"> Sign Up Now</button></a>
                       
                    </div>
                    <div class="col-md-6 p-3">
                    <img src="assets/img/moto.png" class="image-fluid w-100" alt="">

                    </div>

                </div>
            </div>
        </section> -->
        @include('layouts.whoarewe')
        <!-- <section class="shadow-sm bg-white">
            <div class="container">
                <div class="row p-3">
                    <div class="col-md-6 p-5 side  ">
                        <h4>WHY CHOOSE US?</h4>
                        <p>We understand that the process of obtaining the necessary documents for your vehicle 
                            can be overwhelming and time-consuming. That's why we are here to provide you with a 
                            seamless, stress-free experience.</p>
                            <button class="btn-radius btn-pry shadow-sm"> Create Account</button>
                    </div>
                    <div class="col-md-6 p-3">
                    <img src="assets/img/moto.png" class="image-fluid w-100" alt="">

                    </div>

                </div>
            </div>
        </section> -->
        @include('layouts.testimony')
        @include('layouts.howitwork')
       
       
        
        
    </main>
        @include('layouts.footer')

        
     <!-- jQery -->
     <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>

<!-- bootstrap js -->
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>

</html>