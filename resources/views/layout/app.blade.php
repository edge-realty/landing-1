<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SEO -->
            <!-- Standard Meta Descriptions -->
            <meta charset="utf-8" />
            <meta name="description" content="Edge realty is leading real estate agency to buy or sell properties in Dubai. We have hundreds of apartments, villas, and townhouses for rent and sale in Dubai.">
            <meta name="keywords" content=" real estate agency in Dubai , real estate brokers in Dubai , Dubai real estate , real estate companies in Dubai , real estate near me , real estate websites , real estate agent , edgerealty real estate  ,  sale by agency , rent by agency , property f ">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

            <!-- OpenGraph Meta Descriptions -->
            <meta property="og:locale" content="en_US" />
            <meta property="og:title" content="Edge Realty  Sale & Rent Properties  | Real Estate Agency in Dubai" />
            <meta property="og:site_name" content="Edge Realty" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="https://www.edgerealty.ae" />
            <meta property="og:description" content="Edge realty is leading real estate agency to buy or sell properties in Dubai. We have hundreds of apartments, villas, and townhouses for rent and sale in Dubai." />
            <meta property="og:image" content="img/SEO/cover.jpg" />
            <meta property="og:image:type" content="image/jpg" />


            <!-- Twitter Meta Descriptions -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:description" content="Edge realty is leading real estate agency to buy or sell properties in Dubai. We have hundreds of apartments, villas, and townhouses for rent and sale in Dubai." />
            <meta name="twitter:title" content="Edge Realty  Sale & Rent Properties  | Real Estate Agency in Dubai">
            <meta name="twitter:image" content="img/SEO/cover.jpg">

            <!-- Geo Meta Descriptions -->
            <meta name="geo.placename" content="Dubai">
            <meta name="geo.region" content="AE">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
            <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

            <link rel="dns-prefetch" href="//google.com">
            <link rel="canonical" href="http://upwritsolutions.com/">
        <!-- SEO -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){window.dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'GA_MEASUREMENT_ID');
            </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->


        <title>Edge Realty  Sale & Rent Properties  | Real Estate Agency in Dubai</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- CSS & JS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
            <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            <link href="css/styles.css" rel="stylesheet" />
        <!-- CSS & JS -->


    </head>

    <body class="antialiased">

        <main>
            @yield('content')
        </main>

        <!-- Scripts -->
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
            AOS.init();
            </script>
            <script src="https://kit.fontawesome.com/775453aad4.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- Scripts -->
    </body>
</html>
