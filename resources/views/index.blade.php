<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-17"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-52115242-17');
    </script>

    <meta charset="utf-8">
    <title>Aven Traders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aven Traders forex bot">

    <!-- Begin loading animation -->
    <style>
        @keyframes hideLoader {
            0% {
                width: 100%;
                height: 100%;
            }
            100% {
                width: 0;
                height: 0;
            }
        }
        
        body>div.loader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        body:not(.loaded)>div.loader {
            opacity: 1;
        }
        
        body:not(.loaded) {
            overflow: hidden;
        }
        
        body.loaded>div.loader {
            animation: hideLoader .5s linear .5s forwards;
        }
        
        .loading-animation {
            width: 40px;
            height: 40px;
            margin: 100px auto;
            background-color: #009B72;
            border-radius: 100%;
            animation: pulse 1s infinite ease-in-out
        }
        
        @keyframes pulse {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <!-- End loading animation -->

    <link href="{{ asset('css/af2678c6ff40ba3a45d4d4b2dd7a0635.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet">

    <style>
        .bg-primary {
            background-color: #0BC619 !important;
        }
        .bg-accent {
            background-color: #20CC69 !important;
        }
        .bg-primary-dark {
            background-color: #0BA416 !important;
        }
        .btn-primary {
            color: #fff;
            background-color: #0BC619;
            border-color: #0BC619;
            box-shadow: none;
        }
        .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #0BA416!important;
            border-color: #0BA416!important;
        }
        .bg-primary-2 {
            background-color: #0BA416 !important;
        }
    </style>
</head>

<body>
    <div class="loader">
        <div class="loading-animation"></div>
    </div>

    <div class="navbar-container bg-light">
        <nav class="navbar navbar-expand-lg navbar-light py-2" data-sticky="top">
            <div class="container">
                <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="index.html">
                    <h3 class="display-6 mb-0">
                        Aven Traders
                    </h3>
                </a>

                <div class="d-flex align-items-center order-lg-3">
                    <a href="https://themeforest.net/item/jumpstart-app-and-software-template/24207799" class="btn btn-sm btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Download App</a>

                    <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <img alt="Navbar Toggler Open Icon" class="navbar-toggler-open icon icon-sm" data-inject-svg src="img/icons/interface/icon-menu.svg">
                        <img alt="Navbar Toggler Close Icon" class="navbar-toggler-close icon icon-sm" data-inject-svg src="img/icons/interface/icon-x.svg">
                    </button>
                </div>

                <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
                    <ul class="navbar-nav my-3 my-lg-0">
                        <li class="nav-item">

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <section class="bg-light o-hidden pt-5 pb-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 d-flex flex-column text-center text-lg-left mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="pr-xl-5">
                        <h1 class="display-3">The most perfect 
                            <mark data-aos="highlight-text" data-aos-delay="250">
                                forex trades
                            </mark>
                            in town
                        </h1>
                        <p class="lead">
                            Download Aven Traders today and earn extra cash at the comfort of your home
                        </p>

                        <div class="mt-4 mt-lg-5">
                            <form data-form-email novalidate >
                                <div class="d-flex flex-column flex-sm-row form-group">
                                    <input class="form-control form-control mr-sm-2 mb-2 mb-sm-0 h-100" name="email" placeholder="Email Address" type="email" required>

                                    <button class="btn btn-primary flex-shrink-0 btn-loading" type="submit" data-loading-text="Sending">
                                        <!-- Icon for loading animation -->
                                        <svg class="icon bg-white" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>Icon For Loading</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g>
                                                <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                            </g>
                                            <path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                                            fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                                            </g>
                                        </svg>
                                        <span>Notify Me</span>
                                    </button>
                                </div>

                                <div data-recaptcha data-sitekey="6Lemz4gUAAAAAElq4ZHFBzI7j8QUiYMn9I0mzQWG" data-size="invisible" data-badge="bottomleft"></div>
                                <div class="d-none alert alert-success w-100" role="alert" data-success-message>
                                    Thanks, a member of our team will be in touch shortly.
                                </div>
                                {{-- <div class="d-none alert alert-danger w-100" role="alert" data-error-message>
                                    Please fill all fields.
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row justify-content-center" data-jarallax-element="-50">
                        <div class="col-10 col-sm-8 col-md-7 col-lg-9 col-xl-7" data-aos="zoom-in" data-aos-delay="250">
                            <img class="img-fluid" src="{{ asset('/img/mobile-app/Pr8E13OahFdN_1242_2688.png') }}" alt="Screenshot">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-50 h-50 bottom right position-absolute" data-aos="zoom-in" data-aos-delay="500">
            <div class="blob h-100 w-100 bottom right bg-warning opacity-90"></div>
        </div>
        <div class="divider divider-bottom bg-primary-3 mt-5"></div>
    </section>
    
    <section class="bg-primary-3 text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <img src="img/logos/brand/kyan.svg" alt="Kyan company logo" class="bg-white opacity-50 my-4" data-inject-svg>
                    <div class="px-xl-4">
                        &ldquo;A polished product from a solid performer in the brutal and ever-changing SaaS landscape.&rdquo;
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <img src="img/logos/brand/goldline.svg" alt="Goldline company logo" class="bg-white opacity-50 my-4" data-inject-svg>
                    <div class="px-xl-4">
                        &ldquo;It's clear that the team at Jumpstart have been listening to their customers.&rdquo;
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <img src="img/logos/brand/aven.svg" alt="Aven company logo" class="bg-white opacity-50 my-4" data-inject-svg>
                    <div class="px-xl-4">
                        &ldquo;The future is looking bright for this punky young startup. One to watch for sure.&rdquo;
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="o-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 mb-5 mb-xl-0" data-aos="fade-right">
                    <div class="text-center text-xl-left mb-lg-5">
                        <h3 class="h1">
                            See some of the <mark data-aos="highlight-text" data-aos-delay="250">great features</mark> of our app
                        </h3>
                    </div>
                    <ul class="nav nav-pills justify-content-center flex-xl-column pr-xl-5" role="tablist">
                        <li class="nav-item form-group">
                            <a class="btn btn-primary active w-100" id="tab-1" data-toggle="tab" href="#amazing-design" role="tab" aria-controls="tab-1" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <img src="img/icons/theme/design/layers.svg" alt="Icon" class="icon bg-primary" data-inject-svg>
                                    <span>Amazing Designs</span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item form-group">
                            <a class="btn btn-primary w-100" id="tab-2" data-toggle="tab" href="#one-click-payments" role="tab" aria-controls="tab-2" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <img src="img/icons/theme/shopping/credit-card.svg" alt="Icon" class="icon bg-primary" data-inject-svg>
                                    <span>One Click Payments</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-md btn-primary w-100" id="tab-3" data-toggle="tab" href="#simple-sign-up" role="tab" aria-controls="tab-3" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <img src="img/icons/theme/general/smile.svg" alt="Icon" class="icon bg-primary" data-inject-svg>
                                    <span>Simple Sign Up</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col" data-aos="fade-left" data-aos-delay="250">
                    <div class="tab-content px-2">
                        <div class="tab-pane fade show active" id="amazing-design" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row justify-content-around align-items-center">
                                <div class="col-8 col-sm-4 col-lg-4 col-xl-5">
                                    <img src="img/mobile-app/mobile-app-2.png" alt="Screenshot" class="img-fluid">
                                </div>
                                <div class="col-sm col-md-6 mt-4 mt-sm-0">
                                    <h5>Flashy, gorgeous and functional designs</h5>
                                    <p>
                                        We value user experience (UX) and as a result we designed the entire processes and functionalities keeping the user in mind. The result, a meaningful and relevant experience that focuses on the users.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="one-click-payments" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row justify-content-around align-items-center">
                                <div class="col-8 col-sm-4 col-lg-4 col-xl-5">
                                    <img src="img/mobile-app/mobile-app-3.png" alt="Screenshot" class="img-fluid">
                                </div>
                                <div class="col-sm col-md-6 mt-4 mt-sm-0">
                                    <h5>Checking out has never been easier</h5>
                                    <p>
                                        Making a purchase is as easy as the touch of a button. We've implemented the best payment APIs to give you the best service while also securing your information. 
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="simple-sign-up" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row justify-content-around align-items-center">
                                <div class="col-8 col-sm-4 col-lg-4 col-xl-5">
                                    <img src="img/mobile-app/mobile-app-4.png" alt="Screenshot" class="img-fluid">
                                </div>
                                <div class="col-sm col-md-6 mt-4 mt-sm-0">
                                    <h5>Easy as ABCD...</h5>

                                    <p>
                                        We won't put you through the long process of account registration and email verifications. Sign in with the Google account on your device, and you're in. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-accent row no-gutters o-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-around flex-lg-row-reverse">
                <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-lg-0 pl-lg-5 pl-xl-0">
                    <div data-aos="fade-in" data-aos-offset="250">
                        {{-- <img src="img/logos/payment/google_pay.png" alt="Google Pay banner" width="100%" height="auto" class="bg-primary"> --}}
                        <h2 class="h1 text-center text-lg-center text-white">Checking out has never been easier</h2>

                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                            <div class="my-4" data-aos="fade-left" data-aos-delay="100">
                                <div class="d-flex text-white">
                                    <div class="mr-3 mr-md-4">
                                        <img src="img/icons/theme/shopping/bag-2.svg" alt="Bookmark icon text-white" class="icon bg-primary" data-inject-svg>
                                    </div>
                                    <div>
                                        <h5>More Convinience</h5>
                                        <div>
                                            Thanks to Google Pay, checking out hassles are a thing of the past. Pay for items in your cart in the snap of a finger
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4" data-aos="fade-left" data-aos-delay="200">
                                <div class="d-flex text-white">
                                    <div class="mr-3 mr-md-4">
                                        <img src="img/icons/theme/general/lock.svg" alt="Selection interface icon" class="icon bg-primary" data-inject-svg>
                                    </div>
                                    <div>
                                        <h5>Secure all way through</h5>
                                        <div>
                                            We take security seriously. And so does Google Pay. Your order transactions are secure from the start, even after you exit the app.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-xl-6">
                    <div class="row justify-content-center" data-jarallax-element="-50">
                        <div class="col-10 col-sm-8 col-md-6 col-lg-8 col-xl-6" data-aos="zoom-in" data-aos-delay="250">
                            <img class="img-fluid position-relative" src="img/mobile-app/mobile-app-3.png" alt="Screenshot">
                            <div class="h-75 w-75 position-absolute bottom right d-none d-lg-block" data-jarallax-element="-50">
                                <div class="blob blob-4 w-100 h-100 bg-success opacity-90"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="o-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-around text-center text-lg-left">
                <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-lg-0 pr-lg-5 pr-xl-0 order-lg-2">
                    <div>
                        <h2 class="display-4">Grab it right now</h2>
                        <p class="lead">Download our app today and see what you're missing out on 😊</p>
                        <div class="d-flex flex-column flex-sm-row mt-4 mt-md-5 justify-content-center justify-content-lg-start">
                            <a href="#" class="mr-2 form-group">
                                <img alt="App Store" src="img/mobile-app/ios-comingsoon-appstore.png" width="162px" height="auto"/>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.aventraders" target="_blank" class="mr-2 form-group">
                                <img alt="App Store" src="img/mobile-app/google-play.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg order-lg-1">
                    <div class="row justify-content-center" data-jarallax-element="-50">
                        <div class="col-10 col-sm-8 col-md-6 col-lg-8 col-xl-6">
                            <img class="img-fluid position-relative" src="img/mobile-app/mobile-app-4.png" alt="Screenshot">
                            <div class="h-50 w-50 position-absolute bottom left d-none d-lg-block" data-jarallax-element="-50">
                                <div class="blob blob-2 w-100 h-100 bg-primary-2 opacity-90 top right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-primary-3 text-white links-white pb-4 footer-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto mr-xl-5 col-md-3 mb-4 mb-md-0">
                    <h5>Company</h5>
                    <ul class="nav flex-row flex-md-column">
                        <li class="nav-item mr-3 mr-md-0">
                            <a href="#" class="nav-link fade-page px-0 py-2">About</a>
                        </li>

                        <li class="nav-item mr-3 mr-md-0">
                            <a href="#" class="nav-link fade-page px-0 py-2">Privacy Policy</a>
                        </li>

                        <li class="nav-item mr-3 mr-md-0">
                            <a href="landing-3.html" class="nav-link fade-page px-0 py-2">Terms and Conditions</a>
                        </li>

                        {{-- <li class="nav-item mr-3 mr-md-0">
                            <a href="landing-4.html" class="nav-link fade-page px-0 py-2">Landing 4</a>
                        </li>
                        <li class="nav-item mr-3 mr-md-0">
                            <a href="landing-5.html" class="nav-link fade-page px-0 py-2">Landing 5</a>
                        </li>
                        <li class="nav-item mr-3 mr-md-0">
                            <a href="" class="nav-link fade-page px-0 py-2">Landing 6</a> --}}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <hr>
                </div>
            </div>

            <div class="row flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row align-items-center text-small">
                        <div class="text-muted">&copy; 2020 Aven Traders{{-- subject to Google's <a href="https://www.google.com/policies/privacy/" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-auto mt-3 mt-lg-0">
                    <ul class="list-unstyled d-flex mb-0">
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/dribbble.svg" alt="Dribbble" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/twitter.svg" alt="Twitter" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/github.svg" alt="Github" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/facebook.svg" alt="Facebook" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="hover-fade-out">
                                <img src="assets/img/icons/social/google.svg" alt="Google" class="icon icon-xs bg-white" data-inject-svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>







    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="{{ asset('/js/aos.js') }}"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="{{ asset('/js/clipboard.min.js') }}"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="{{ asset('/js/flatpickr.min.js') }}"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="{{ asset('/js/flickity.pkgd.min.js') }}"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="{{ asset('/js/ion.rangeSlider.min.js') }}"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="{{ asset('/js/isotope.pkgd.min.js') }}"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="{{ asset('/js/jarallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jarallax-video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jarallax-element.min.js') }}"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="{{ asset('/js/jquery.smartWizard.min.js') }}"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="{{ asset('/js/plyr.polyfilled.min.js') }}"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="{{ asset('/js/prism.js') }}"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="{{ asset('/js/scrollMonitor.js') }}"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="{{ asset('/js/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="{{ asset('/js/svg-injector.umd.production.js') }}"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="{{ asset('/js/twitterFetcher_min.js') }}"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="{{ asset('/js/typed.min.js') }}"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="{{ asset('/js/theme.js') }}"></script>
    <!-- This script appears only on the demo.  It is used to delay unnecessary image loading until after the main page content is loaded. -->
    <script type="text/javascript">
        window.addEventListener("load", function() {
            setTimeout(function() {
                const delayedImages = document.querySelectorAll('[data-delay-src]');
            }, 500);
        });
    </script>

    <script type="text/javascript">
        // This script appears only in the demo - it disables forms with no action attribute to prevent 
        // navigating away from the page.
        jQuery("form:not([action])").on('submit', function() {
            return false;
        });
    </script>

    <style>
        body:not(.loaded) {
            overflow-y: auto!important;
        }
        .loader {
            display: none!important;
        }
    </style>
</body>
</html>