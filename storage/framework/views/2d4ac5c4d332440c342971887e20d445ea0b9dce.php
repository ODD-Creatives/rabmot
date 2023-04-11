<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Wheel | Rail </title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="assets/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome-6/dist-font/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <section>
        <?php echo $__env->make('rail.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!-- Navbar -->

    <main id="main">
        <section class="shadow-sm">
            <div class="container  ">
                <div class="row p-2">
                <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Comming Soon!</h2>
        
        <p class="mb-4 mx-2">Sorry for the inconvenience but we're currently developing it at the moment</p>
        <a href="/" class="btn btn-pry">Back to home</a>
        <h5 class="mb-2 mt-3 mx-2">Under Development!</h5>
        <div class="mt-4">
          <img
            src="assetsU/assets/img/illustrations/girl-doing-yoga-light.png"
            alt="girl-doing-yoga-light"
            width="500"
            class="img-fluid"
            data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
            data-app-light-img="illustrations/girl-doing-yoga-light.png"
          />
        </div>
      </div>

                </div>
            </div>
        </section>
       

    </main>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\travelwheel\resources\views/rail/index.blade.php ENDPATH**/ ?>