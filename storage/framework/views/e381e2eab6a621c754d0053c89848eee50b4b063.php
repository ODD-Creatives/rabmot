<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ASSETS -->
    <link rel="stylesheet" href="assets/flight/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/flight/assets/css/line-awesome.css">
    <link rel="stylesheet" href="assets/flight/assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/flight/assets/css/style.css">
    <link rel="stylesheet" href="assets/flight/style.css">
    <link rel="stylesheet" href="assets/flight/assets/css/mobile.css">

    <script src="assets/flight/assets/js/jquery/jquery.min.js"></script>
   

</head>

<body>
    <section class="hero-wrappe">
        <!-- <div class="hero-box hero-bg active p-4" data-bg="" style="min-height:500px;background-attachment: fixed;background-image: url('#http://travels.findrextravels.com/api/uploads/images/slider/bg.jpg');"> -->
        <div class="hero-box hero-bg active p-4" data-bg=""
            style="min-height:500px; background-attachment: fixed;background-image: url('assets/flight/assets/img/flight.jpg');margin-bottom: -35px;">
            <!-- <div class="hero-box hero-bg active p-4" data-bg="" style="min-height:500px;background-attachment: fixed;background-image: url('');"> -->
            <div class="container g-0-xs">
                <div class="row g-0-xs">
                    <div class="col-lg-12 g-0-xs mx-auto responsive--column-l">

                        <div class="section-tab fade-in" style="min-height:167px; color: #203ea3;">
                            <div class="d-none d-sm-block d-lg-block d-xl-block">
                                <h2 class="pb-1"><strong> Let’s book your next trip!</strong></h2>
                                <p>Choose best deals over 1.5 million travel services</p>
                                <div class="mb-5"></div>
                            </div>

                            <ul class="nav nav-tabs mb-0 gap-1" id="Tab" role="tablist">
                                <li data-position="1" class="nav-item" role="presentation"><button
                                        class="nav-link text-start text-capitalize " id="flights-tab"
                                        data-bs-toggle="tab" data-bs-target="#flights" type="button" role="tab"
                                        aria-controls="flights" aria-selected="false"><span
                                            class="d-xl-none d-lg-none"><i class="la la-plane mx-1"></i></span><span
                                            class="d-none d-lg-block d-xl-block"><i class="la la-plane mx-1"></i> <span
                                                class="text">flights</span></span></button></li>
                                <li data-position="2" class="nav-item" role="presentation"><button
                                        class="nav-link text-start text-capitalize " id="hotels-tab"
                                        data-bs-toggle="tab" data-bs-target="#hotels" type="button" role="tab"
                                        aria-controls="hotels" aria-selected="false"><span
                                            class="d-xl-none d-lg-none"><i class="la la-hotel mx-1"></i></span><span
                                            class="d-none d-lg-block d-xl-block"><i class="la la-hotel mx-1"></i> <span
                                                class="text">Hotels</span></span></button></li>
                                <li data-position="3" class="nav-item" role="presentation"><button
                                        class="nav-link text-start text-capitalize " id="tours-tab" data-bs-toggle="tab"
                                        data-bs-target="#tours" type="button" role="tab" aria-controls="tours"
                                        aria-selected="false"><span class="d-xl-none d-lg-none"><i
                                                class="la la-briefcase mx-1"></i></span><span
                                            class="d-none d-lg-block d-xl-block"><i class="la la-briefcase mx-1"></i>
                                            <span class="text">Tours</span></span></button></li>
                            </ul>

                            <div class="tab-content search-fields-container search_area search_tabs" id="TabContent">
                                <div class="tab-pane fade" id="flights" role="flights" aria-labelledby="flights-tab">
                                    <form autocomplete="off" class="main_search">
                                        <div class="row mb-3 g-1" style="justify-content: space-between;">
                                            <div class="col-md-4 flight_types">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="trip"
                                                                id="one-way" onclick="oneway();" value="oneway" checked>
                                                            <label class="form-check-label" for="one-way">
                                                                <!--<i class="icon mdi mdi-arrow-missed"></i>--> One Way
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="trip"
                                                                id="round-trip" value="return">
                                                            <label class="form-check-label" for="round-trip">
                                                                <!--<i class="icon mdi mdi-import-export"></i>--> Round
                                                                Trip </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="trip"
                                                                id="multi-trip" onclick="multiway();" value="multi">
                                                            <label class="form-check-label" for="multi-trip"> Multi
                                                                Way</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <select name="" id="flight_type"
                                                    class="flight_type form-select form-select-sm">
                                                    <option value="economy" selected>
                                                        Economy</option>
                                                    <option value="economy_premium">
                                                        Economy Premium</option>
                                                    <option value="business">
                                                        Business</option>
                                                    <option value="first">
                                                        First</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row contact-form-action g-1" id="onereturn">
                                            <div class="col-md-6">
                                                <div class="row g-1">
                                                    <div class="col-md-6">
                                                        <div class="input-box input-items">
                                                            <label class="label-text">Flying From</label>
                                                            <div class="form-group">
                                                                <span class="la la-plane-departure form-icon"></span>
                                                                <input class="form-control autocomplete-airport"
                                                                    type="search" placeholder="Flying From"
                                                                    name="from[]" id="autocomplete" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-box input-items">
                                                            <div id="swap" class="position-absolute">
                                                                <div class="swap-places waves-effect shadow">
                                                                    <span class="swap-places__arrow --top">
                                                                        <svg width="13" height="6" viewBox="0 0 13 6"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M3 4V6L0 3L3 0V2H13V4H3Z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                    <span class="swap-places__arrow --bottom">
                                                                        <svg width="13" height="6" viewBox="0 0 13 6"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M3 4V6L0 3L3 0V2H13V4H3Z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <label class="label-text">To Destination</label>
                                                            <div class="form-group">
                                                                <span class="la la-plane-arrival form-icon mx-2"></span>
                                                                <input
                                                                    class="form-control autocomplete-airport focus px-5"
                                                                    type="search" placeholder="To Destination"
                                                                    name="to[]" id="autocomplete2" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row g-0">
                                                    <div class="col">
                                                        <div class="input-box">
                                                            <label class="label-text">Departure Date</label>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                <input class="depart form-control" id="departure"
                                                                    name="depart[]" type="text" value="09-03-2023">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col" id="show">
                                                        <div class="input-box">
                                                            <label class="label-text">Return Date</label>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                <input
                                                                    class="returning form-control dateright border-top-l0"
                                                                    name="returning" type="text" id="return"
                                                                    value="11-03-2023">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="input-box">
                                                    <label class="label-text">Passengers </label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain">

                                                            <i class="la la-user form-icon"></i>
                                                            <a class="dropdown-toggle dropdown-btn travellers" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <p>Travellers <span class="guest_flights"></span>
                                                                    <!-- <span>Rooms <span class="roomTotal">0</span></span> -->
                                                                </p>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item adult_qty">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between"
                                                                        style="margin-bottom: 10px; border-bottom: 1px solid #dedede; padding-bottom: 10px;">
                                                                        <label style="line-height:16px">
                                                                            <i class="la la-user"></i> Adults <div
                                                                                class="clear"></div>
                                                                            <small style="font-size:10px">+12</small>
                                                                        </label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="adults"
                                                                                id="fadults" value="1"
                                                                                class="qtyInput_flights">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item child_qty">
                                                                    <div class="qty-box d-flex align-items-center justify-content-between"
                                                                        style="margin-bottom: 10px; border-bottom: 1px solid #dedede; padding-bottom: 10px;">
                                                                        <label style="line-height:16px">
                                                                            <i class="la la-female"></i> Childs <div
                                                                                class="clear"></div>
                                                                            <small style="font-size:10px">2 - 11</small>
                                                                        </label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="childs"
                                                                                id="fchilds" value="0"
                                                                                class="qtyInput_flights">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item infant_qty">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label style="line-height:16px">
                                                                            <i class="la la-female"></i> Infants <div
                                                                                class="clear"></div>
                                                                            <small style="font-size:10px">-2</small>
                                                                        </label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <input type="text" name="childs"
                                                                                id="finfant" value="0"
                                                                                class="qtyInput_flights">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-md-1">
                                                <div class="btn-search text-center">
                                                    <button type="button" id="flights-search"
                                                        class="more_details w-100 btn-lg effect" data-style="zoom-in">
                                                        <!-- <i class="mdi mdi-search"></i> Search -->
                                                        <!--<svg style="fill:currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"-->
                                                        <!--    class="c8LPF-icon" role="img" height="24" cleanup="">-->
                                                        <!--    <path-->
                                                        <!--        d="M174.973 150.594l-29.406-29.406c5.794-9.945 9.171-21.482 9.171-33.819C154.737 50.164 124.573 20 87.368 20S20 50.164 20 87.368s30.164 67.368 67.368 67.368c12.345 0 23.874-3.377 33.827-9.171l29.406 29.406c6.703 6.703 17.667 6.703 24.371 0c6.704-6.702 6.704-17.674.001-24.377zM36.842 87.36c0-27.857 22.669-50.526 50.526-50.526s50.526 22.669 50.526 50.526s-22.669 50.526-50.526 50.526s-50.526-22.669-50.526-50.526z">-->
                                                        <!--    </path>-->
                                                        <!--</svg>-->
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" name="language" id="language"
                                            value="en">
                                        <div class="multi-flight-wrap" id="multiway">
                                            <div class="contact-form-action multi-flight-field">
                                                <div class="row g-1 contact-form-action multi_flight">
                                                    <div class="col-md-6">
                                                        <div class="row g-1">
                                                            <div class="col-md-6">
                                                                <div class="input-box input-items">
                                                                    <label class="label-text">Flying From</label>
                                                                    <div class="form-group">
                                                                        <span
                                                                            class="la la-plane-departure form-icon"></span>
                                                                        <div class="autocomplete-wrapper _1 row_1">
                                                                            <input
                                                                                class="form-control autocomplete-airport"
                                                                                type="search" placeholder="Flying From"
                                                                                name="from[]" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-box input-items">
                                                                    <label class="label-text">To Destination</label>
                                                                    <div class="form-group">
                                                                        <span
                                                                            class="la la-plane-arrival form-icon"></span>
                                                                        <div class="autocomplete-wrapper _1 row_2">
                                                                            <input
                                                                                class="form-control autocomplete-airport"
                                                                                type="search"
                                                                                placeholder="To Destination" name="to[]"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-box">
                                                                    <label class="label-text">Departure Date</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-calendar form-icon"></span>
                                                                        <input class="dp form-control" name="depart[]"
                                                                            type="text" value="11-03-2023">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="col-md-3 d-flex flight-remove"
                                                        style="padding-left:10px;align-items:center">
                                                        <label class="label-text">&nbsp;</label>
                                                        <button
                                                            class="btn multi-flight-remove d-flex align-items-center justi-content-center"
                                                            type="button"><i class="la la-remove"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 pr-0">
                                                    <div class="form-group">
                                                        <button class="theme-btn add-flight-btn margin-top-20px w-100"
                                                            type="button"><i class="la la-plus mr-1"></i>Add another
                                                            flight</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <script>
                                        // SWAP VALUES
                                        var btn = document.getElementById("swap");
                                        btn.addEventListener("click", function (e) {
                                            var from = document.getElementById("autocomplete"),
                                                to = document.getElementById("autocomplete2");
                                            if (!!from && !!to) {
                                                var _ = from.value;
                                                from.value = to.value;
                                                to.value = _;
                                            } else {
                                                console.log("some input elements could not be found");
                                            }
                                        });

                                        // show loading model of flights
                                        function load_modal() {
                                            var flying_from = $("#autocomplete").val();
                                            $('.flying_from').append(flying_from);
                                            var flying_to = $("#autocomplete2").val();
                                            $('.flying_to').append(flying_to);
                                            var date = $("#departure").val();
                                            $('.date').append(date);
                                            $('#loading').modal('show');

                                            $(function () {
                                                setTimeout(function () {
                                                    $(".loading-results-globe .loading-results-track-progress.is-active").css('width', 480);
                                                }, 500);
                                            });

                                        };

                                        // URL beurify and search action
                                        $("#flights-search").click(function () {
                                            var trip_type = $('input[name=trip]:checked').val();
                                            // var origin = $("#autocomplete").val().toLowerCase();
                                            // var destination = $("#autocomplete2").val().toLowerCase();
                                            // var cdeparture = $("#departure").val();
                                            var returnn = $("#return").val();
                                            var flight_type = $("#flight_type").val().toLowerCase();
                                            var adult = $("#fadults").val();
                                            var children = $("#fchilds").val();
                                            var infant = $("#finfant").val();
                                            var language = $('#language').val();

                                            /* Multi Way variable capturing - Start */
                                            var origin_split = document.getElementsByName('from[]');
                                            var destination_split = document.getElementsByName('to[]');
                                            var cdeparture_split = document.getElementsByName('depart[]');
                                            var searchURL = '';
                                            for (var i = 0; i < origin_split.length; i++) {
                                                var a = origin_split[i].value.split(" ");
                                                var b = destination_split[i].value.split(" ");
                                                var c = cdeparture_split[i].value.split(" ");
                                                if (i == 0) {
                                                    var origin = a[0].toLowerCase();
                                                    var destination = b[0].toLowerCase();
                                                    var cdeparture = c[0].toLowerCase();
                                                }
                                                searchURL = searchURL + a[0].toLowerCase() + '/' + b[0].toLowerCase() + '/' + c[0].toLowerCase() + '/';
                                            }
                                            /* Multi Way variable capturing - End */

                                            if (origin == '') {
                                                alert('Please fill out origin');
                                                $('#autocomplete').focus();
                                            } else if (destination == '') {
                                                alert('Please fill out destination');
                                                $('#autocomplete2').focus();

                                                // main params of get url
                                            } else {
                                                var actionURL = 'flights/' + language + '/' + 'ngn' + '/';

                                                // for oneway
                                                if (trip_type == 'oneway') {
                                                    var finelURL = actionURL + origin + '/' + destination + '/' + trip_type + '/' + flight_type + '/' +
                                                        cdeparture + '/' + adult + '/' + children + '/' + infant;
                                                    $("html, body").animate({
                                                        scrollTop: 0
                                                    }, "fast");
                                                    window.location.href = 'http://travels.findrextravels.com/' + finelURL;
                                                    load_modal();

                                                    // Pace.restart();
                                                    // Pace.start();

                                                    // for return
                                                } else if (trip_type == 'return') {
                                                    var finelURL = actionURL + origin + '/' + destination + '/' + trip_type + '/' + flight_type + '/' +
                                                        cdeparture + '/' + returnn + '/' + adult + '/' + children + '/' + infant;
                                                    $("html, body").animate({
                                                        scrollTop: 0
                                                    }, "fast");
                                                    window.location.href = 'http://travels.findrextravels.com/' + finelURL;
                                                    load_modal();

                                                    // for multi way
                                                } else {
                                                    var finelURL = actionURL + searchURL + trip_type + '/' + flight_type + '/' + adult + '/' +
                                                        children + '/' + infant;
                                                    // console.log(finelURL);
                                                    $("html, body").animate({
                                                        scrollTop: 0
                                                    }, "fast");
                                                    window.location.href = 'http://travels.findrextravels.com/' + finelURL;
                                                    load_modal();

                                                }
                                            }
                                        });

                                        /* oneway */
                                        document.getElementById("one-way").onclick = function () {
                                            document.getElementById("show").className = "col hide";
                                            document.getElementById("onereturn").className = "row g-1 contact-form-action";
                                            document.getElementById("multiway").className = "";
                                            document.getElementById("departure").className = "depart form-control";
                                        }

                                        /* return */
                                        document.getElementById("round-trip").onclick = function () {
                                            document.getElementById("show").className = "col show_";
                                            document.getElementById("onereturn").className = "row g-1 contact-form-action";
                                            document.getElementById("multiway").className = "";
                                            document.getElementById("departure").className = "depart form-control dateleft border-top-r0";
                                        }

                                        /* multiway */
                                        document.getElementById("multi-trip").onclick = function () {
                                            document.getElementById("multiway").className = "multi-flight-wrap show_";
                                            document.getElementById("show").className = "col hide";
                                            document.getElementById("departure").className = "depart form-control";
                                        }
                                    </script>



                                    <style>
                                        .hide {
                                            display: none;
                                        }

                                        .show_ {
                                            display: block !important;
                                        }

                                        #show,
                                        #multiway {
                                            display: none;
                                        }
                                    </style>
                                </div>
                                <div class="tab-pane fade" id="hotels" role="hotels" aria-labelledby="hotels-tab">
                                    <form id="hotels-search" method="post">
                                        <div class="main_search contact-form-action">
                                            <div class="row g-1">
                                                <div class="col-md-4">
                                                    <div class="input-wrapper">
                                                        <span class="label-text">City Name</span>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <div class="input-items">
                                                                <select id="hotels_city" name="city"
                                                                    class="city form-control" required>
                                                                    <option value=""> Search by City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row g-0 items-center">
                                                        <div class="col-md-6">
                                                            <span class="label-text">Checkin</span>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                <input name="checkin"
                                                                    class="checkin form-control form-control-lg border-top-r0"
                                                                    id="checkin" type="text" placeholder=""
                                                                    value="09-03-2023" readonly="readonly" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="label-text">Checkout</span>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                <input name="checkout"
                                                                    class="checkout form-control form-control-lg border-top-l0"
                                                                    id="checkout" type="text" placeholder=""
                                                                    value="10-03-2023" readonly="readonly" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-box">
                                                        <label class="label-text">Travellers</label>
                                                        <div class="form-group">
                                                            <span class="la la-male form-icon"></span>
                                                            <div class="dropdown dropdown-contain">
                                                                <a class="dropdown-toggle dropdown-btn travellers"
                                                                    href="#" role="button" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <p>Travellers <span class="guest_hotels"></span>
                                                                        <span>Rooms <span
                                                                                class="roomTotal">0</span></span>
                                                                    </p>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="roomBtn d-flex align-items-center justify-content-between">
                                                                            <label>
                                                                                <i class="la la-bed"></i> Rooms
                                                                                <!--<small>(-12)</small>-->
                                                                            </label>
                                                                            <div
                                                                                class="qtyBtn d-flex align-items-center">
                                                                                <input type="text" name="roomInput"
                                                                                    id="rooms" value="1" class="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>
                                                                                <i class="la la-user"></i> Adults
                                                                                <!--<small>(+12)</small>-->
                                                                            </label>
                                                                            <div
                                                                                class="qtyBtn d-flex align-items-center">
                                                                                <input type="text" name="adults"
                                                                                    id="adults" value="2"
                                                                                    class="qtyInput_hotels">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>
                                                                                <i class="la la-female"></i> Childs
                                                                                <!--<small>(-12)</small>-->
                                                                            </label>

                                                                            <div
                                                                                class="qtyBtn d-flex align-items-center child_ages">
                                                                                <input type="text" name="childs"
                                                                                    id="childs" value="0"
                                                                                    class="qtyInput_hotels">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <ol class="row g-1 m-0 p-1" id="append">


                                                                    </ol>


                                                                    <div class="dropdown-item">
                                                                        <p style="color:#000">
                                                                            <small><strong>Nationality</strong></small>
                                                                        </p>
                                                                        <div class="form-group">
                                                                            <span
                                                                                class="la la-globe select form-icon"></span>
                                                                            <div class="input-items">
                                                                                <select style="background-color:#e9eef2"
                                                                                    class="form-select nationality"
                                                                                    id="nationality">
                                                                                    <option value="">Select</option>
                                                                                    <option value="AF">Afghanistan
                                                                                    </option>
                                                                                    <option value="AX">Aland Islands
                                                                                    </option>
                                                                                    <option value="AL">Albania</option>
                                                                                    <option value="DZ">Algeria</option>
                                                                                    <option value="AS">American Samoa
                                                                                    </option>
                                                                                    <option value="AD">Andorra</option>
                                                                                    <option value="AO">Angola</option>
                                                                                    <option value="AI">Anguilla</option>
                                                                                    <option value="AQ">Antarctica
                                                                                    </option>
                                                                                    <option value="AG">Antigua and
                                                                                        Barbuda</option>
                                                                                    <option value="AR">Argentina
                                                                                    </option>
                                                                                    <option value="AM">Armenia</option>
                                                                                    <option value="AW">Aruba</option>
                                                                                    <option value="AU">Australia
                                                                                    </option>
                                                                                    <option value="AT">Austria</option>
                                                                                    <option value="AZ">Azerbaijan
                                                                                    </option>
                                                                                    <option value="BS">Bahamas</option>
                                                                                    <option value="BH">Bahrain</option>
                                                                                    <option value="BD">Bangladesh
                                                                                    </option>
                                                                                    <option value="BB">Barbados</option>
                                                                                    <option value="BY">Belarus</option>
                                                                                    <option value="BE">Belgium</option>
                                                                                    <option value="BZ">Belize</option>
                                                                                    <option value="BJ">Benin</option>
                                                                                    <option value="BM">Bermuda</option>
                                                                                    <option value="BT">Bhutan</option>
                                                                                    <option value="BO">Bolivia,
                                                                                        Plurinational State of</option>
                                                                                    <option value="BQ">Bonaire, Sint
                                                                                        Eustatius and Saba</option>
                                                                                    <option value="BA">Bosnia and
                                                                                        Herzegovina</option>
                                                                                    <option value="BW">Botswana</option>
                                                                                    <option value="BV">Bouvet Island
                                                                                    </option>
                                                                                    <option value="BR">Brazil</option>
                                                                                    <option value="IO">British Indian
                                                                                        Ocean Territory</option>
                                                                                    <option value="BN">Brunei Darussalam
                                                                                    </option>
                                                                                    <option value="BG">Bulgaria</option>
                                                                                    <option value="BF">Burkina Faso
                                                                                    </option>
                                                                                    <option value="BI">Burundi</option>
                                                                                    <option value="KH">Cambodia</option>
                                                                                    <option value="CM">Cameroon</option>
                                                                                    <option value="CA">Canada</option>
                                                                                    <option value="CV">Cape Verde
                                                                                    </option>
                                                                                    <option value="KY">Cayman Islands
                                                                                    </option>
                                                                                    <option value="CF">Central African
                                                                                        Republic</option>
                                                                                    <option value="TD">Chad</option>
                                                                                    <option value="CL">Chile</option>
                                                                                    <option value="CN">China</option>
                                                                                    <option value="CX">Christmas Island
                                                                                    </option>
                                                                                    <option value="CC">Cocos (Keeling)
                                                                                        Islands</option>
                                                                                    <option value="CO">Colombia</option>
                                                                                    <option value="KM">Comoros</option>
                                                                                    <option value="CG">Congo</option>
                                                                                    <option value="CD">Congo, the
                                                                                        Democratic Republic of the
                                                                                    </option>
                                                                                    <option value="CK">Cook Islands
                                                                                    </option>
                                                                                    <option value="CR">Costa Rica
                                                                                    </option>
                                                                                    <option value="CI">Cote d'Ivoire
                                                                                    </option>
                                                                                    <option value="HR">Croatia</option>
                                                                                    <option value="CU">Cuba</option>
                                                                                    <option value="CW">Curacao</option>
                                                                                    <option value="CY">Cyprus</option>
                                                                                    <option value="CZ">Czech Republic
                                                                                    </option>
                                                                                    <option value="DK">Denmark</option>
                                                                                    <option value="DJ">Djibouti</option>
                                                                                    <option value="DM">Dominica</option>
                                                                                    <option value="DO">Dominican
                                                                                        Republic</option>
                                                                                    <option value="EC">Ecuador</option>
                                                                                    <option value="EG">Egypt</option>
                                                                                    <option value="SV">El Salvador
                                                                                    </option>
                                                                                    <option value="GQ">Equatorial Guinea
                                                                                    </option>
                                                                                    <option value="ER">Eritrea</option>
                                                                                    <option value="EE">Estonia</option>
                                                                                    <option value="ET">Ethiopia</option>
                                                                                    <option value="FK">Falkland Islands
                                                                                        (Malvinas)</option>
                                                                                    <option value="FO">Faroe Islands
                                                                                    </option>
                                                                                    <option value="FJ">Fiji</option>
                                                                                    <option value="FI">Finland</option>
                                                                                    <option value="FR">France</option>
                                                                                    <option value="GF">French Guiana
                                                                                    </option>
                                                                                    <option value="PF">French Polynesia
                                                                                    </option>
                                                                                    <option value="TF">French Southern
                                                                                        Territories</option>
                                                                                    <option value="GA">Gabon</option>
                                                                                    <option value="GM">Gambia</option>
                                                                                    <option value="GE">Georgia</option>
                                                                                    <option value="DE">Germany</option>
                                                                                    <option value="GH">Ghana</option>
                                                                                    <option value="GI">Gibraltar
                                                                                    </option>
                                                                                    <option value="GR">Greece</option>
                                                                                    <option value="GL">Greenland
                                                                                    </option>
                                                                                    <option value="GD">Grenada</option>
                                                                                    <option value="GP">Guadeloupe
                                                                                    </option>
                                                                                    <option value="GU">Guam</option>
                                                                                    <option value="GT">Guatemala
                                                                                    </option>
                                                                                    <option value="GG">Guernsey</option>
                                                                                    <option value="GN">Guinea</option>
                                                                                    <option value="GW">Guinea-Bissau
                                                                                    </option>
                                                                                    <option value="GY">Guyana</option>
                                                                                    <option value="HT">Haiti</option>
                                                                                    <option value="HM">Heard Island and
                                                                                        McDonald Islands</option>
                                                                                    <option value="VA">Holy See (Vatican
                                                                                        City State)</option>
                                                                                    <option value="HN">Honduras</option>
                                                                                    <option value="HK">Hong Kong
                                                                                    </option>
                                                                                    <option value="HU">Hungary</option>
                                                                                    <option value="IS">Iceland</option>
                                                                                    <option value="IN">India</option>
                                                                                    <option value="ID">Indonesia
                                                                                    </option>
                                                                                    <option value="IR">Iran, Islamic
                                                                                        Republic of</option>
                                                                                    <option value="IQ">Iraq</option>
                                                                                    <option value="IE">Ireland</option>
                                                                                    <option value="IM">Isle of Man
                                                                                    </option>
                                                                                    <option value="IL">Israel</option>
                                                                                    <option value="IT">Italy</option>
                                                                                    <option value="JM">Jamaica</option>
                                                                                    <option value="JP">Japan</option>
                                                                                    <option value="JE">Jersey</option>
                                                                                    <option value="JO">Jordan</option>
                                                                                    <option value="KZ">Kazakhstan
                                                                                    </option>
                                                                                    <option value="KE">Kenya</option>
                                                                                    <option value="KI">Kiribati</option>
                                                                                    <option value="KP">Korea, Democratic
                                                                                        People's Republic of</option>
                                                                                    <option value="KR">Korea, Republic
                                                                                        of</option>
                                                                                    <option value="KW">Kuwait</option>
                                                                                    <option value="KG">Kyrgyzstan
                                                                                    </option>
                                                                                    <option value="LA">Lao People's
                                                                                        Democratic Republic</option>
                                                                                    <option value="LV">Latvia</option>
                                                                                    <option value="LB">Lebanon</option>
                                                                                    <option value="LS">Lesotho</option>
                                                                                    <option value="LR">Liberia</option>
                                                                                    <option value="LY">Libya</option>
                                                                                    <option value="LI">Liechtenstein
                                                                                    </option>
                                                                                    <option value="LT">Lithuania
                                                                                    </option>
                                                                                    <option value="LU">Luxembourg
                                                                                    </option>
                                                                                    <option value="MO">Macao</option>
                                                                                    <option value="MK">Macedonia, the
                                                                                        former Yugoslav Republic of
                                                                                    </option>
                                                                                    <option value="MG">Madagascar
                                                                                    </option>
                                                                                    <option value="MW">Malawi</option>
                                                                                    <option value="MY">Malaysia</option>
                                                                                    <option value="MV">Maldives</option>
                                                                                    <option value="ML">Mali</option>
                                                                                    <option value="MT">Malta</option>
                                                                                    <option value="MH">Marshall Islands
                                                                                    </option>
                                                                                    <option value="MQ">Martinique
                                                                                    </option>
                                                                                    <option value="MR">Mauritania
                                                                                    </option>
                                                                                    <option value="MU">Mauritius
                                                                                    </option>
                                                                                    <option value="YT">Mayotte</option>
                                                                                    <option value="MX">Mexico</option>
                                                                                    <option value="FM">Micronesia,
                                                                                        Federated States of</option>
                                                                                    <option value="MD">Moldova, Republic
                                                                                        of</option>
                                                                                    <option value="MC">Monaco</option>
                                                                                    <option value="MN">Mongolia</option>
                                                                                    <option value="ME">Montenegro
                                                                                    </option>
                                                                                    <option value="MS">Montserrat
                                                                                    </option>
                                                                                    <option value="MA">Morocco</option>
                                                                                    <option value="MZ">Mozambique
                                                                                    </option>
                                                                                    <option value="MM">Myanmar</option>
                                                                                    <option value="NA">Namibia</option>
                                                                                    <option value="NR">Nauru</option>
                                                                                    <option value="NP">Nepal</option>
                                                                                    <option value="NL">Netherlands
                                                                                    </option>
                                                                                    <option value="NC">New Caledonia
                                                                                    </option>
                                                                                    <option value="NZ">New Zealand
                                                                                    </option>
                                                                                    <option value="NI">Nicaragua
                                                                                    </option>
                                                                                    <option value="NE">Niger</option>
                                                                                    <option value="NG">Nigeria</option>
                                                                                    <option value="NU">Niue</option>
                                                                                    <option value="NF">Norfolk Island
                                                                                    </option>
                                                                                    <option value="MP">Northern Mariana
                                                                                        Islands</option>
                                                                                    <option value="NO">Norway</option>
                                                                                    <option value="OM">Oman</option>
                                                                                    <option value="PK">Pakistan</option>
                                                                                    <option value="PW">Palau</option>
                                                                                    <option value="PS">Palestinian
                                                                                        Territory, Occupied</option>
                                                                                    <option value="PA">Panama</option>
                                                                                    <option value="PG">Papua New Guinea
                                                                                    </option>
                                                                                    <option value="PY">Paraguay</option>
                                                                                    <option value="PE">Peru</option>
                                                                                    <option value="PH">Philippines
                                                                                    </option>
                                                                                    <option value="PN">Pitcairn</option>
                                                                                    <option value="PL">Poland</option>
                                                                                    <option value="PT">Portugal</option>
                                                                                    <option value="PR">Puerto Rico
                                                                                    </option>
                                                                                    <option value="QA">Qatar</option>
                                                                                    <option value="RE">Reunion</option>
                                                                                    <option value="RO">Romania</option>
                                                                                    <option value="RU">Russian
                                                                                        Federation</option>
                                                                                    <option value="RW">Rwanda</option>
                                                                                    <option value="BL">Saint Barthelemy
                                                                                    </option>
                                                                                    <option value="SH">Saint Helena,
                                                                                        Ascension and Tristan da Cunha
                                                                                    </option>
                                                                                    <option value="KN">Saint Kitts and
                                                                                        Nevis</option>
                                                                                    <option value="LC">Saint Lucia
                                                                                    </option>
                                                                                    <option value="MF">Saint Martin
                                                                                        (French part)</option>
                                                                                    <option value="PM">Saint Pierre and
                                                                                        Miquelon</option>
                                                                                    <option value="VC">Saint Vincent and
                                                                                        the Grenadines</option>
                                                                                    <option value="WS">Samoa</option>
                                                                                    <option value="SM">San Marino
                                                                                    </option>
                                                                                    <option value="ST">Sao Tome and
                                                                                        Principe</option>
                                                                                    <option value="SA">Saudi Arabia
                                                                                    </option>
                                                                                    <option value="SN">Senegal</option>
                                                                                    <option value="RS">Serbia</option>
                                                                                    <option value="SC">Seychelles
                                                                                    </option>
                                                                                    <option value="SL">Sierra Leone
                                                                                    </option>
                                                                                    <option value="SG">Singapore
                                                                                    </option>
                                                                                    <option value="SX">Sint Maarten
                                                                                        (Dutch part)</option>
                                                                                    <option value="SK">Slovakia</option>
                                                                                    <option value="SI">Slovenia</option>
                                                                                    <option value="SB">Solomon Islands
                                                                                    </option>
                                                                                    <option value="SO">Somalia</option>
                                                                                    <option value="ZA">South Africa
                                                                                    </option>
                                                                                    <option value="GS">South Georgia and
                                                                                        the South Sandwich Islands
                                                                                    </option>
                                                                                    <option value="SS">South Sudan
                                                                                    </option>
                                                                                    <option value="ES">Spain</option>
                                                                                    <option value="LK">Sri Lanka
                                                                                    </option>
                                                                                    <option value="SD">Sudan</option>
                                                                                    <option value="SR">Suriname</option>
                                                                                    <option value="SJ">Svalbard and Jan
                                                                                        Mayen</option>
                                                                                    <option value="SZ">Swaziland
                                                                                    </option>
                                                                                    <option value="SE">Sweden</option>
                                                                                    <option value="CH">Switzerland
                                                                                    </option>
                                                                                    <option value="SY">Syrian Arab
                                                                                        Republic</option>
                                                                                    <option value="TW">Taiwan, Province
                                                                                        of China</option>
                                                                                    <option value="TJ">Tajikistan
                                                                                    </option>
                                                                                    <option value="TZ">Tanzania, United
                                                                                        Republic of</option>
                                                                                    <option value="TH">Thailand</option>
                                                                                    <option value="TL">Timor-Leste
                                                                                    </option>
                                                                                    <option value="TG">Togo</option>
                                                                                    <option value="TK">Tokelau</option>
                                                                                    <option value="TO">Tonga</option>
                                                                                    <option value="TT">Trinidad and
                                                                                        Tobago</option>
                                                                                    <option value="TN">Tunisia</option>
                                                                                    <option value="TR">Turkey</option>
                                                                                    <option value="TM">Turkmenistan
                                                                                    </option>
                                                                                    <option value="TC">Turks and Caicos
                                                                                        Islands</option>
                                                                                    <option value="TV">Tuvalu</option>
                                                                                    <option value="UG">Uganda</option>
                                                                                    <option value="UA">Ukraine</option>
                                                                                    <option value="AE">United Arab
                                                                                        Emirates</option>
                                                                                    <option value="GB">United Kingdom
                                                                                    </option>
                                                                                    <option value="US">United States
                                                                                    </option>
                                                                                    <option value="UM">United States
                                                                                        Minor Outlying Islands</option>
                                                                                    <option value="UY">Uruguay</option>
                                                                                    <option value="UZ">Uzbekistan
                                                                                    </option>
                                                                                    <option value="VU">Vanuatu</option>
                                                                                    <option value="VE">Venezuela,
                                                                                        Bolivarian Republic of</option>
                                                                                    <option value="VN">Viet Nam</option>
                                                                                    <option value="VG">Virgin Islands,
                                                                                        British</option>
                                                                                    <option value="VI">Virgin Islands,
                                                                                        U.S.</option>
                                                                                    <option value="WF">Wallis and Futuna
                                                                                    </option>
                                                                                    <option value="EH">Western Sahara
                                                                                    </option>
                                                                                    <option value="YE">Yemen</option>
                                                                                    <option value="ZM">Zambia</option>
                                                                                    <option value="ZW">Zimbabwe</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="btn-search text-center">
                                                        <button type="submit" id="submit"
                                                            class="more_details effect btn btn-primary btn-block btn-lg"
                                                            data-style="zoom-in">
                                                            <!-- <i class="mdi mdi-search"></i> Search -->
                                                            <!--<svg style="fill:currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="c8LPF-icon" role="img" height="24" cleanup=""><path d="M174.973 150.594l-29.406-29.406c5.794-9.945 9.171-21.482 9.171-33.819C154.737 50.164 124.573 20 87.368 20S20 50.164 20 87.368s30.164 67.368 67.368 67.368c12.345 0 23.874-3.377 33.827-9.171l29.406 29.406c6.703 6.703 17.667 6.703 24.371 0c6.704-6.702 6.704-17.674.001-24.377zM36.842 87.36c0-27.857 22.669-50.526 50.526-50.526s50.526 22.669 50.526 50.526s-22.669 50.526-50.526 50.526s-50.526-22.669-50.526-50.526z"></path></svg>-->
                                                            Search
                                                        </button>
                                                        <!--<label for="nearby" class="direct f-right btn m"><input type="checkbox" id="nearby" class="mr-10"><small>Nearby Me</small> </label> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" name="language" id="language"
                                            value="en">
                                    </form>

                                    <script>
                                        var child_age = "Child Age";

                                        // collecting params to send for beutified URI
                                        $("#hotels-search").submit(function () {
                                            event.preventDefault();
                                            var city = $('#hotels_city').val().toLowerCase();
                                            var checkin = $('#checkin').val();
                                            var checkout = $('#checkout').val();
                                            var rooms = $('#rooms').val();
                                            var nationality = $('#nationality').val();
                                            var language = $('#language').val();
                                            var adults = $('#adults').val();
                                            var child = $('#childs').val();
                                            var room = $('#room').val();
                                            var pagination = $('#pagination').val();
                                            var city_trims = city.split(',').slice(0, 1).join(' ').split(' ').join('-').replace('%40', '@');
                                            var actionURL = 'hotels/' + language + '/' + 'ngn' + '/';

                                            // REMOVE - DASH FROM END OF THE CITY
                                            if (city_trims.slice(-1) == '-') {
                                                var city_ = city_trims.slice(0, -1);
                                            } else { var city_ = city_trims; }

                                            var finelURL = actionURL + city_ + '/' + checkin + '/' + checkout + '/' + rooms + '/' + adults + '/' + child + '/' + nationality;

                                            /* append in search box */
                                            $('.cityname').append(city_);
                                            $('.ci').append(checkin);
                                            $('.co').append(checkout);
                                            $('.a').append(adults);
                                            $('.c').append(child);
                                            $('.r').append(rooms);

                                            // PAGE TOP
                                            $("html, body").animate({ scrollTop: 0 }, "fast");

                                            /* final call to URI */
                                            window.location.href = 'http://travels.findrextravels.com/' + finelURL;
                                            $('#loading').modal('show');

                                            // SIDEBAR SMALLER
                                            $(".menu-sidebar").addClass("sidebar-small").fadeIn(100);
                                        });

                                        // get users country
                                        var requestUrl = "https://ipwhois.app/json/";
                                        fetch(requestUrl)
                                            .then(function (response) { return response.json(); })
                                            .then(function (c) {

                                                var user_country = c['country_code'];

                                                if (typeof user_country !== 'undefined') {
                                                    console.log(user_country);

                                                    $('.nationality option[value=' + user_country + ']').attr('selected', 'selected');

                                                } else {
                                                    user_country = 'US';
                                                    console.log(user_country);

                                                    $('.nationality option[value=' + user_country + ']').attr('selected', 'selected');
                                                }

                                            });

                                    </script>

                                    <style>
                                        ::marker {
                                            color: #0d6efd;
                                            font-size: 1em;
                                            font-weight: bold;
                                        }

                                        ol {
                                            list-style-position: inside;
                                            padding: 0;
                                        }
                                    </style>
                                </div>
                                <div class="tab-pane fade" id="tours" role="tours" aria-labelledby="tours-tab">
                                    <form id="tours-search" method="post">
                                        <div class="main_search contact-form-action">
                                            <div class="row g-1">
                                                <div class="col-md-5">
                                                    <div class="input-wrapper">
                                                        <span class="label-text">Destination</span>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <div class="input-items">
                                                                <select id="tours_city" name="city"
                                                                    class="city form-control" required>
                                                                    <option value=""> Search by City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="row g-0 items-center">
                                                        <div class="col-md-12">
                                                            <span class="label-text">Date</span>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                <input name="checkin"
                                                                    class="dp form-control form-control-lg" id="date"
                                                                    type="text" placeholder="" value="09-03-2023"
                                                                    readonly="readonly" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-box">
                                                        <label class="label-text">Travellers</label>
                                                        <div class="form-group">
                                                            <span class="la la-male form-icon"></span>
                                                            <div class="dropdown dropdown-contain">
                                                                <a class="dropdown-toggle dropdown-btn travellers"
                                                                    href="#" role="button" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <p>Travellers <span class="guest_tours"></span></p>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>
                                                                                <i class="la la-user"></i> Adults
                                                                                <!--<small>(+12)</small>-->
                                                                            </label>
                                                                            <div
                                                                                class="qtyBtn d-flex align-items-center">
                                                                                <input type="text" name="adults"
                                                                                    id="tours_adults" value="1"
                                                                                    class="qtyInput_tours">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>
                                                                                <i class="la la-female"></i> Child
                                                                                <!--<small>(-12)</small>-->
                                                                            </label>
                                                                            <div
                                                                                class="qtyBtn d-flex align-items-center">
                                                                                <input type="text" name="childs"
                                                                                    id="tours_child" value="0"
                                                                                    class="qtyInput_tours">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="btn-search text-center">
                                                        <button type="submit" id="submit"
                                                            class="more_details w-100 btn-lg effect"
                                                            data-style="zoom-in">
                                                            <!--<svg style="fill:currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="c8LPF-icon" role="img" height="24" cleanup=""><path d="M174.973 150.594l-29.406-29.406c5.794-9.945 9.171-21.482 9.171-33.819C154.737 50.164 124.573 20 87.368 20S20 50.164 20 87.368s30.164 67.368 67.368 67.368c12.345 0 23.874-3.377 33.827-9.171l29.406 29.406c6.703 6.703 17.667 6.703 24.371 0c6.704-6.702 6.704-17.674.001-24.377zM36.842 87.36c0-27.857 22.669-50.526 50.526-50.526s50.526 22.669 50.526 50.526s-22.669 50.526-50.526 50.526s-50.526-22.669-50.526-50.526z"></path></svg>-->
                                                            <!-- <i class="mdi mdi-search"></i> Search -->
                                                            Search
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <script>

                                        // collecting params to send for beutified URI
                                        $("#tours-search").submit(function () {
                                            event.preventDefault();
                                            var city = $('#tours_city').val().toLowerCase();
                                            var date = $('#date').val();
                                            var language = $('#language').val();
                                            var tours_adults = $('#tours_adults').val();
                                            var tours_child = $('#tours_child').val();
                                            var pagination = $('#pagination').val();
                                            var city_trims = city.split(',').slice(0, 1).join(' ').split(' ').join('-').replace('%40', '@');
                                            var actionURL = 'tours/' + 'en' + '/' + 'ngn' + '/';
                                            var finelURL = actionURL + city_trims + '/' + date + '/' + tours_adults + '/' + tours_child;

                                            /* append in search box */
                                            $('.cityname').append(city);
                                            $('.d').append(date);
                                            $('.a').append(tours_adults);
                                            $('.c').append(tours_child);

                                            // BACK TOP
                                            $("html, body").animate({ scrollTop: 0 }, "fast");

                                            /* final call to URI */
                                            window.location.href = 'http://travels.findrextravels.com/' + finelURL;
                                            $('#loading').modal('show');

                                            // SIDEBAR SMALLER
                                            $(".menu-sidebar").addClass("sidebar-small").fadeIn(100);

                                        });

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
      <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
    </svg> -->
        </div>
    </section>
    <!-- javascript resouces and libs -->
    <script src="assets/flight/assets/js/jquery-ui.js"></script>
    <script src="assets/flight/assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/flight/assets/js/moment.min.js"></script>
    <script src="assets/flight/assets/js/quantity-input.js"></script>
    <script src="assets/flight/assets/js/select2.js"></script>
    <script src="assets/flight/assets/js/main.js"></script>
    <script src="assets/flight/assets/js/app.js"></script>

    <script>
        // LOADING EFFECT
        $(".foot_menu a,.blog-area a,.destination-area a,.hotel-area a,.popular-round-trip-wrap a,.loading_effect,.header-menu-wrapper a")
            .click(function () {
                $('#preloader').fadeIn(250);
            })

        // homepage tab rearrange and make first one active default
        $(".listitems li").sort(sort_li).appendTo('.listitems');

        function sort_li(a, b) {
            return ($(b).data('position')) < ($(a).data('position')) ? 1 : -1;
        };
        $('.nav-tabs .nav-item:first-child button').addClass('active');
        $('.search_tabs .tab-pane:first-child').addClass('show active');

        // select 2 location init for hotels search
        var $ajax = $(".city");

        function formatRepo(t) {
            return t.loading ? t.text : (console.log(t), '<i class="flag ' + t.icon.toLowerCase() + '"></i>' + t.text)
        }

        function formatRepoSelection(t) {
            return t.text
        }
        $ajax.select2({
            ajax: {
                url: "http://travels.findrextravels.com/hotels_locations",
                dataType: "json",
                data: function (t) {
                    return {
                        q: $.trim(t.term)
                    }
                },
                processResults: function (t) {
                    var e = [];
                    return t.forEach(function (t) {
                        e.push({
                            id: t.id,
                            text: t.text,
                            icon: t.icon
                        })
                    }), console.log(e), {
                        results: e
                    }
                },
                cache: !0
            },
            escapeMarkup: function (t) {
                return t
            },
            minimumInputLength: 3,
            templateResult: formatRepo,
            templateSelection: formatRepoSelection,
            dropdownPosition: 'below',
            cache: !0
        });
    </script>

    <script>
        $('.select_').select2({
            placeholder: {
                id: '1',
                text: 'Select Category'
            }
        });
        $('.select2-container').css('width', '100%')
        $('#select').select2({
            placeholder: {
                id: '1',
                text: 'Select Category'
            }
        });

        $('#email_subscribe').click(function () {
            let S_email = $('#exampleInputEmail1').val();
            if (S_email != 0) {
                if (isValidEmailAddress(S_email)) {
                    $.ajax({
                        type: "GET",
                        url: "http://travels.findrextravels.com/subscribe",
                        data: {
                            S_email: S_email
                        },
                        success: function (response) {
                            res = JSON.parse(response);
                            if (res.error) {
                                $('.wow').text("Please add email!");
                                $(".newstext").fadeIn(3000);
                                $(".newstext").fadeOut(3000);
                            } else {
                                if (res.status == true) {
                                    $('.wow').text("Thank you for subscribing");
                                    $(".newstext").fadeIn(3000);
                                    $(".newstext").fadeOut(3000);
                                    $('#exampleInputEmail1').val('');
                                } else {
                                    $('.wow').text("Email exist");
                                    $(".newstext").fadeIn(3000);
                                    $(".newstext").fadeOut(3000);
                                    $('#exampleInputEmail1').val('');
                                }
                            }
                        }
                    });
                } else {
                    $('.wow').text("Please add correct email!");
                    $(".newstext").fadeIn(3000);
                    $(".newstext").fadeOut(3000);
                }
            } else {
                $('.wow').text("Please add email!");
                $(".newstext").fadeIn(3000);
                $(".newstext").fadeOut(3000);
            }
        });

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(
                /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i
            );
            return pattern.test(emailAddress);
        }
    </script>

</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\travelwheel\resources\views/air/flight.blade.php ENDPATH**/ ?>