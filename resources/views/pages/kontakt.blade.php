@extends('layouts/app-layout')

@section('title')
    <title>Kontakt - Salong Lykkeliten</title>
@endsection
@section('seo')
    <meta content="Kontakt ang. velvære og hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon."
        name="description">
    <meta content="Kontakt - Salong Lykkeliten" property="og:title">
    <meta content="Kontakt ang. velvære og hudpleie. Timebestilling kan gjøres i salong, nettbooking eller telefon."
        property="og:description">
    <meta
        content="https://uploads-ssl.webflow.com/620c28c9ea080a1e8139270c/620eac7e39525572702bc9cd_hero%20image-min.png"
        property="og:image">
    <meta content="Kontakt - Salong Lykkeliten" property="twitter:title">
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
                <a href="https://bestill.timma.no/salonglykkeliten" target="_blank"
                    class="nav-link w-nav-link">Behandlinger</a>
                <a href="/#brand" class="nav-link w-nav-link">Produkter</a>
                <a href="kontakt" id="veronika" aria-current="page" class="nav-link w-nav-link w--current">Kontakt</a>
                <a href="https://bestill.timma.no/salonglykkeliten" target="_blank"
                    class="nav-button nav-link bold-nav w-nav-link">Bestill time</a>
            </nav>
            <div class="menu-button w-nav-button">
                <div class="icon w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
    <div class="column-contact w-row">
        <div class="column-contact-2 w-col w-col-6">
            <h1 class="heading-12">Kontakt<br>Salong Lykkeliten</h1>
            <div class="div-block-6">
                <div class="column-contact-7 w-row">
                    <div class="column-contact-8 w-col w-col-3 w-col-tiny-3"><img src="images/call_24px.png"
                            loading="lazy" id="w-node-_6ff19993-4a2c-6efb-1dbc-32e54145823b-324cca70" alt=""
                            class="image-12"></div>
                    <div class="column-contact-5 w-col w-col-9 w-col-tiny-9">
                        <p id="w-node-c2645c16-e0df-3a1a-a67d-da8675e981c5-324cca70" class="paragraph-7">41 21 23 41</p>
                    </div>
                </div>
                <div class="column-contact-7 w-row">
                    <div class="column-contact-8 w-col w-col-3 w-col-tiny-3"><img src="images/email_24px.png"
                            loading="lazy" id="w-node-_58a04672-0603-ce89-bb41-1b20838bdabe-324cca70" alt=""
                            class="image-13"></div>
                    <div class="column-contact-9 w-col w-col-9 w-col-tiny-9">
                        <p id="w-node-_37d43f64-37a2-9b67-5532-596201f836b4-324cca70" class="paragraph-6">
                            vepers(at)online.no</p>
                    </div>
                </div>
                <div class="column-contact-7 w-row">
                    <div class="column-contact-8 w-col w-col-3 w-col-tiny-3"><img src="images/location_on_24px.png"
                            loading="lazy" id="w-node-e118aa93-cb93-0dbb-4f89-302c56a04aa7-324cca70" alt=""
                            class="image-14"></div>
                    <div class="column-contact-9 w-col w-col-9 w-col-tiny-9">
                        <p id="w-node-_0c396ac8-7a53-3408-4fcc-1fa4b4fbfc43-324cca70" class="paragraph-5">Mågårdvegen 81
                            <br>2334 Romedal</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-form w-col w-col-6">
            <div class="pl-16" style="margin-bottom: 10px !important;">
                @include('common.success-alert')
                @include('common.errors-alert')
            </div>

            <div class="form-block w-form">
                <form id="wf-form-Kontaktskjema" name="wf-form-Kontaktskjema" data-name="Kontaktskjema" method="post"
                    class="form meldingsboks w-clearfix" action="{{ route('sendContactEmail') }}">
                    @csrf
                    <label for="name-3" class="field-label-3">Navn</label>
                    <input type="text" class="text-field-2 w-input" maxlength="256" name="name" data-name="name"
                        placeholder="" id="name-3" value="{{ old('name') }}" required>
                    <label for="email" class="field-label-2">E-post</label>
                    <input type="text" class="text-field-2 w-input" maxlength="256" name="email" data-name="email"
                        placeholder="" id="email "value="{{ old('email') }}" required>
                    <label for="text_message" class="field-label">Melding</label>
                    <textarea id="text_message" name="text_message" maxlength="5000" data-name="text_message"
                        placeholder="" class="textarea"  required>{{ old('name') }}</textarea>
                        {!! htmlFormSnippet() !!}
                    <input type="submit" value="Send melding" data-wait="Please wait..." class="submit-button w-button">
                </form>
                <div class="w-form-done">
                    <div>Takk for din henvendelse. Jeg svarer deg så raskt som mulig.</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Noe gikk galt.</div>
                </div>
            </div>
        </div>
    </div>
  @endsection
