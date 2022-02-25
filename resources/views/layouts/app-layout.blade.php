<!DOCTYPE html>
<html data-wf-page="620c28c9ea080a458939270d" data-wf-site="620c28c9ea080a1e8139270c">
<head>
    <meta charset="utf-8">
    @yield('title')
    @yield('seo')
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Nunito Sans:regular,600,700", "Playfair Display:regular,600,700",
                    "Carattere:regular", "Mulish:200,300,regular,600"
                ]
            }
        });

    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);

    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N73PXEYN2W"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-N73PXEYN2W');
    </script>
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    <style>
        a[href^="tel"] {
            color: inherit;
            /* Inherit text color of parent element. */
            text-decoration: none;
            /* Remove underline. */
            /* Additional css `propery: value;` pairs here */
        }

    </style>
</head>
<body class="body" id="salong">
    @yield('content')
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=620c28c9ea080a1e8139270c"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
<div class="footer-section wf-section">
    <div class="container w-container">
        <div class="column-footer w-row">
            <div class="column-footer-1 w-col w-col-3"><img src="images/logo.svg" loading="lazy" alt=""
                    class="image-11"></div>
            <div class="column-footer-2 w-col w-col-3">
                <h2 class="heading-6">Åpningstider</h2>
                <p class="paragraph-12">Mandag 9 - 15<br>Tirsdag 9 - 15<br>Onsdag 15 - 20 (Oddetall uke)<br>Onsdag STENGT (Partall uke)<br> Torsdag 09 -
                    15<br>Fredag 09 - 14<br>Ellers etter avtale<br></p>
            </div>
            <div class="column-footer-3 w-col w-col-3">
                <h2 class="heading-8">Kontakt</h2>
                <p class="paragraph-13">vepers(at)online.no<br>‍<br>41 21 23 41<br>‍<br>Mågårdvegen 81<br>2334
                    Romedal</p>
            </div>
            <div class="column-footer-4 w-col w-col-3">
                <h2 class="heading-10">Hold deg oppdatert</h2>
                <a href="https://www.facebook.com/Salong-Lykkeliten-152872888090981" target="_blank"
                    class="w-inline-block"><img src="images/fblogo.png" loading="lazy" width="67" alt=""
                        class="image-15"></a>
            </div>
        </div>
    </div>
</div>
</html>
