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
        <div class="container w-container">
           <div class="mt-4">
                <h1 class="heading-2 text-center" style="font-size: 55px; margin-top: 120px;">Behandlinger</h1>
                <div>
                    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\276F';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
  transition: 0.3s;
}

.active:after {
  content: "\276F";
  transition: 0.3s;
  transform: rotate(90deg)
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>

<h2>Accordion with symbols</h2>
<p>In this example we have added a "plus" sign to each button. When the user clicks on the button, the "plus" sign is replaced with a "minus" sign.</p>
<button class="accordion">Section 1</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>

</body>
</html>

                </div>
           </div>
        </div>
    </div>
  @endsection
