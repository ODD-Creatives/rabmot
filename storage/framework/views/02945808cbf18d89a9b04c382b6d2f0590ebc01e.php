<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Wheel | About Us</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="assets/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome-6/dist-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <section>
        <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- Navbar -->

    <main id="main">
        <section class="shadow-sm p-3">
            <div class="container  ">
                <div class="row pt-2 pb-4 pe-4 ps-4 faq text-center">
                    
                <h1>Need An Assistance?</h1>
                <p class="text-alt">Need support? Have a question? Running into a problem? <br> We’re here to help.</p>

                </div>
            </div>
            <div class="container border bg-alt ">
                <div class="row p-2 help">
                    <div class="col-md-4  p-3 ">
                        <div class="bg-white border1 shadow-sm p-3">
                            <div class="text-center">
                               <img src="assets/img/question.png" class="image-fluid w-50" alt="">
                            <h4 class="text-alt">Have a question?</h4>
                            <p class="text-alt1">Check out our FAQ section for tons of answers to some 
                                questions. It’s the fastest way to get the answer you’re looking for!</p> 
                            </div>
                            
                            <div class="pt-4 pb-5 ps-2">
                                <a href="faq"><i class="fa fa-arrow-circle-o-right"></i> Visit the FAQs Page</a>
                            </div>
                                
                        </div>
                    </div>
                    <div class="col-md-4  p-3 ">
                        <div class="bg-white border1 shadow-sm p-3">
                            <div class="text-center">
                               <img src="assets/img/direct.png" class="image-fluid w-50" alt="">
                            <h4 class="text-alt">Drop a message</h4>
                            <p class="text-alt1">Our support team is on hand to take your queries and offer prompt resolutions to your tickets.</p> 
                            </div>
                            
                            <div class="pt-4 pb-5 ps-2">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-arrow-circle-o-right"></i> Contact Support Team</a>
                            </div>
                                
                        </div>
                    </div>
                    <div class="col-md-4  p-3 ">
                        <div class="bg-white border1 shadow-sm p-3">
                            <div class="text-center">
                               <img src="assets/img/chat.png" class="image-fluid w-50" alt="">
                            <h4 class="text-alt">Join Our Community</h4>
                            <p class="text-alt1">We have a vibrant community of Travel brokers where we communicate regular updates about our products and services.</p> 
                            </div>
                            
                            <div class="pt-4 pb-5 ps-2">
                                <a href="faq"><i class="fa fa-arrow-circle-o-right"></i> Join Discussion</a>
                            </div>
                                
                        </div>
                    </div>
                </div>
                <div class="row p-2 help">
                    <div class="col-md-6 p-4">
                        <div class="bg-white border1 shadow-sm p-3">
                            <h4 class="text-alt">Keep In Touch</h4>
                            <ul class="list-unstyled ">

                                <li> <a href="#"><i class="fa fa-phone pe-3"></i>  +234 813 456 7890</a></li>
                                <li> <a href="#"><i class="fa fa-envelope pe-3"></i>  info@travelbroker.com</a></li>
                                <li> <a href="#"><i class="fa fa-whatsapp pe-3"></i>  mywa.link/travelwheel</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 p-4 text-center">
                        <div class="bg-white border1 shadow-sm p-3">
                            <h4 class="text-alt">Follow us on social media</h4>
                            <p class="sub-main-color">Stay updated for the latest on Travel Broker</p>
                            <a href=""> <img src="assets/img/fb.png" class="image-fluid ps-2 pe-2 pb-2" width="10%" alt=""></a>
                            <a href=""> <img src="assets/img/twt.png" class="image-fluid ps-2 pe-2 pb-2" width="10%" alt=""></a>
                            <a href=""> <img src="assets/img/inst.png" class="image-fluid ps-2 pe-2 pb-2" width="10%" alt=""></a>
                            <a href=""> <img src="assets/img/link.png" class="image-fluid ps-2 pe-2 pb-2" width="10%" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header moddal">
                        <h5 class="modal-title " id="exampleModalLabel">Send Direct Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class=" container p-3   ">
                <div class="border p-3 ">
                    
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-user"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Your name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-envelope"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Your e-mail" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        

                    <div class="input-group mb-3 pb-2">
                        <span class="input-group-text" id="basic-addon2">
                        <i class="fa fa-pencil-square"></i>
                        
                        </span>
                        <input type="text" class="form-control" placeholder="Subject" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>

                    <div class="input-group mb-3 pb-2">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Message"></textarea>
                    </div>
                    <center>
                        
                            <button class="btn btn-sm btn-pry btn-radius">Send Message</button>
                         
                    </center>
                    </div>
                    

            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\travelwheel\resources\views/help.blade.php ENDPATH**/ ?>