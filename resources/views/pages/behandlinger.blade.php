@extends('layouts/app-layout')

@section('title')
    <title>Behandlinger - Salong Lykkeliten</title>
@endsection
@section('seo')
    <meta content="Kontakt ang. velvære og hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon."
        name="description">
    <meta content="Behandlinger - Salong Lykkeliten" property="og:title">
    <meta content="Kontakt ang. velvære og hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon."
        property="og:description">
    <meta
        content="https://uploads-ssl.webflow.com/620c28c9ea080a1e8139270c/620eac7e39525572702bc9cd_hero%20image-min.png"
        property="og:image">
    <meta content="Behandlinger - Salong Lykkeliten" property="twitter:title">
    <meta content="Kontakt ang. velvære og hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon."
        property="twitter:description">
    <meta
        content="https://uploads-ssl.webflow.com/620c28c9ea080a1e8139270c/620eac7e39525572702bc9cd_hero%20image-min.png"
        property="twitter:image">
@endsection
@section('content')
    <div data-animation="default" data-collapse="small" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navbar w-nav">
        <div class="container w-container">
            <a href="/" class="brand w-nav-brand"><img src="images/logo-riktig.png" loading="lazy" alt=""
                    class="image"></a>
            <nav role="navigation" class="nav-menu w-nav-menu">
                <a href="/behandlinger" target="_blank"
                    class="nav-link w-nav-link w--current">Behandlinger</a>
                <a href="/#brand" class="nav-link w-nav-link">Produkter</a>
                <a href="kontakt" id="veronika" aria-current="page" class="nav-link w-nav-link">Kontakt</a>
                <a href="https://bestill.timma.no/salonglykkeliten" target="_blank"
                    class="nav-button nav-link bold-nav w-nav-link">Bestill time</a>
            </nav>
            <div class="menu-button w-nav-button">
                <div class="icon w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
    <div class="min-h-screen">

    </div>
  @endsection
