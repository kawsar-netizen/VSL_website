<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Venture Solutions Ltd.</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{asset('assets.frontend')}}/img/favicon.png" rel="icon">
    <link href="{{asset('assets.frontend')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/frontend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{asset('assets/frontend')}}/css/variables.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/vslcustom.css" rel="stylesheet">
    <!-- <link href="{{asset('assets/frontend')}}/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="{{asset('assets/frontend')}}/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="{{asset('assets/frontend')}}/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="{{asset('assets/frontend')}}/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="{{asset('assets/frontend')}}/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="{{asset('assets/frontend')}}/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/frontend')}}/css/main.css" rel="stylesheet">

    <style>
        .card_lan {
            height: 400px;
            width: auto;
        }

        .card_text {
            margin-top: 25px;
        }
    </style>
</head>

<body>

    {{-- Header section --}}

    @include('frontend.partails.header')

    {{-- Content section --}}

    @yield('frontend_content')

    {{-- Footer section --}}

    @include('frontend.partails.footer')

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/frontend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/frontend')}}/vendor/aos/aos.js"></script>
    <script src="{{asset('assets/frontend')}}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{asset('assets/frontend')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{asset('assets/frontend')}}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/frontend')}}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/frontend')}}/js/main.js"></script>

</body>

</html>
