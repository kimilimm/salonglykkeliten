@extends('layouts/app-layout')

@section('title')
    <title>Salong Lykkeliten - Sett av litt tid til deg selv</title>
@endsection
@section('seo')
    <meta
    content="Salong Lykkeliten i Romedal tilbyr mange ulike behandlinger innen for velvære og hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon."
    name="description">
    <meta content="Salong Lykkeliten - Sett av litt tid til deg selv" property="og:title">
    <meta
        content="Salong Lykkeliten i Romedal tilbyr mange ulike behandlinger innen for velvære og hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon."
        property="og:description">
    <meta
        content="https://uploads-ssl.webflow.com/620c28c9ea080a1e8139270c/620eac7e39525572702bc9cd_hero%20image-min.png"
        property="og:image">
    <meta content="Salong Lykkeliten - Sett av litt tid til deg selv" property="twitter:title">
    <meta
        content="Salong Lykkeliten i Romedal tilbyr mange ulike behandlinger innen for velvære og hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon."
        property="twitter:description">
    <meta
        content="https://uploads-ssl.webflow.com/620c28c9ea080a1e8139270c/620eac7e39525572702bc9cd_hero%20image-min.png"
        property="twitter:image">
@endsection

@section('content')
    <div class="hero">
        <div data-animation="default" data-collapse="small" data-duration="400" data-easing="ease" data-easing2="ease"
            role="banner" class="navbar w-nav">
            <div class="container w-container">
                <a href="/" aria-current="page" class="brand w-nav-brand w--current"><img src="images/logo-riktig.png"
                        loading="lazy" alt="" class="image"></a>
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="https://bestill.timma.no/salonglykkeliten" target="_blank"
                        class="nav-link w-nav-link">Behandlinger</a>
                    <a href="#brand" class="nav-link w-nav-link">Produkter</a>
                    <a href="kontakt" id="veronika" class="nav-link w-nav-link">Kontakt</a>
                    <a href="https://bestill.timma.no/salonglykkeliten" target="_blank"
                        class="nav-button nav-link bold-nav w-nav-link">Bestill time</a>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="icon w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="heading-2">Sett av litt tid til deg selv</h1>
                <p class="paragraph">Salong Lykkeliten i Romedal tilbyr mange ulike behandlinger innen velvære og
                    hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon.</p>
                <a href="https://bestill.timma.no/salonglykkeliten" target="_blank" class="button-2 w-button"><span
                        class="text-span text-button-bigger">Bestill time</span></a>
                <a href="https://bestill.timma.no/salonglykkeliten" target="_blank"
                    class="button w-button">Behandlinger</a>
            </div>
        </div>
    </div>
    <div class="section wf-section">
        <div class="container">
            <h2 class="heading-3">Behandlinger</h2>
            <div class="column-services w-row">
                <div class="column-services-1 w-col w-col-3"><img src="images/massasje-ikon.png" loading="lazy" alt=""
                        class="image-7">
                    <p class="paragraph-8">Massasje</p>
                </div>
                <div class="column-services-2 w-col w-col-3"><img src="images/sminke-ikon.png" loading="lazy" alt=""
                        class="image-8">
                    <p class="paragraph-9">Sminke</p>
                </div>
                <div class="column-services-3 w-col w-col-3"><img src="images/negler-ikon.png" loading="lazy" alt=""
                        class="image-9">
                    <p class="paragraph-10">Negler</p>
                </div>
                <div class="column-services-4 w-col w-col-3"><img src="images/hårfjerning-ikon.png" loading="lazy"
                        alt="" class="image-10">
                    <p class="paragraph-11">Hårfjerning</p>
                </div>
            </div>
            <div class="div-block-2">
                <a href="https://bestill.timma.no/salonglykkeliten" target="_blank"
                    class="link-block w-inline-block w-clearfix">
                    <p class="paragraph-2">Se alle behandlinger</p><img src="images/arrow_right_alt_24px.png"
                        loading="lazy" alt="" class="image-2">
                </a>
            </div>
        </div>
    </div>
    <div id="veronika" class="section veronika wf-section">
        <div class="container w-container">
            <div class="div-block-5">
                <div class="column-veronika w-row">
                    <div class="column-veronika1 w-col w-col-6"><img src="images/mamma-bilde-min.png" loading="lazy"
                            width="373"
                            sizes="(max-width: 479px) 100vw, (max-width: 767px) 46vw, (max-width: 991px) 32vw, 373px"
                            srcset="images/mamma-bilde-min-p-500.png 500w, images/mamma-bilde-min.png 746w" alt=""
                            class="image-3"></div>
                    <div class="column-veronika2 w-col w-col-6">
                        <h1 class="heading-4">Veronika Persen</h1>
                        <p class="paragraph-4">Jeg utdannet meg til Hudterapeaut på Storhamar v.g.s i 1998 og har
                            videreutdannet meg i ettertid.<br>Har 4 års jobb erfaring på Dag Spa, før oppstart av egen
                            salong i 2009.Jeg jobber i dag som Hud og Kropps terapeut i min egen spa salong i
                            Romedal.<br><br>Trives veldig godt med yrket mitt.</p>
                        <a href="kontakt" class="link-block w-inline-block w-clearfix">
                            <p class="paragraph-2">Kontakt meg</p><img src="images/arrow_right_alt_24px.png"
                                loading="lazy" alt="" class="image-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="brand" class="brand-section wf-section">
        <div class="container w-container">
            <h1 class="heading-5">Merker</h1>
            <div class="div-block-7">
                <p class="paragraph-4 merker-paragraph">Salong Lykkeliten kan hjelpe deg og gi tips og råd til riktig
                    hudpleie tilpasset ulike hudtyper og hudtilstander. Produkter kan kjøpes i salongen.</p>
            </div>
            <div class="column-bramds w-row">
                <div class="column-bramds1 w-col w-col-4"><img src="images/dermalogica-logo_215x25-1.png" loading="lazy"
                        alt="" class="image-5"></div>
                <div class="column-bramds2 w-col w-col-4"><img
                        src="images/LOGO_SCM_Gray_NEW_6dbb3ca4-162b-44fc-812c-40a8d2e699e8_400x-1.png" loading="lazy"
                        alt="" class="image-6"></div>
                <div class="column-bramds3 w-col w-col-4"><img
                        src="images/43788090_332223397336865_1568265445088165888_n_preview_rev_1-1.png" loading="lazy"
                        width="129" alt="" class="image-6"></div>
            </div>
        </div>
    </div>
@endsection
