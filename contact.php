<!DOCTYPE html>
<html lang="en">
<head>
    <title>Elio Kasa | Kontakt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="96x96" href="images/cashdesk.png">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/leaflet/leaflet.css" />
</head>
<body>
<?php
include 'header.php';
?>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Kontakt</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Domov <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontakty predajné miesta</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
            <div class="col-md-8">
                <div class="row mb-5">
                    <div class="col-md-4 text-center py-4">
                        <div class="icon">
                            <span class="icon-map-o"></span>
                        </div>
                        <p><span>Adresa:</span> M:Rázusa 35, 984 01 Lučenec , Slovensko</p>
                    </div>
                    <div class="col-md-4 text-center border-height py-4">
                        <div class="icon">
                            <span class="icon-mobile-phone"></span>
                        </div>
                        <p><span>Telefón:</span> <a href="tel://+421474331173">+421 47 4331173</a></p>
                    </div>
                    <div class="col-md-4 text-center py-4">
                        <div class="icon">
                            <span class="icon-envelope-o"></span>
                        </div>
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">obchod@axis-distribution.eu</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-8 mb-md-5">
                <h2 class="text-center">V prípade akýchkoľvek otázok nás neváhajte kontaktovať.</h2>
                <form action="includes/sendmail.php" method="post" class="bg-light p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Meno" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Predmet" required>
                    </div>
                    <div class="form-group">
                        <textarea id="" cols="30" rows="7" class="form-control" name="msg" placeholder="Správa" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Odoslať Správu" name="submit" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section" style="padding-top: 0">
    <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
            <div class="contacts table" aria-labelledby="contacts-caption-text">
                <span class="caption" id="contacts-caption-text"><h2 class="text-center">Predajné a servisné miesta</h2></span>
                <div class="contacts-header thead">
                    <span class="th" id="th-name">Názov:</span>
                    <span class="th" id="th-org">Adresa:</span>
                    <span class="th" id="th-phone">Telefón:</span>
                    <span class="th" id="th-email">Email:</span>
                </div>
                <ul class="tbody">
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">AXIS distribution s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">M.Rázusa 35,98401 Lučenec</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">047-4331173</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:obchod@axis-distribution.eu">obchod@axis-distribution.eu</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">DART spol. s r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Vajnorská 108,83104 Bratislava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone"> 02-44259573, 0911344698</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:dart@dart-sro.sk">dart@dart-sro.sk</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">JURsat COMPUTERS</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Mučeníkov 259/1 06001 Kežmarok</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">052-4522367</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:jursat@jursat.sk">jursat@jursat.sk</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">S-COM</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Nám.hrdinov 6,93401 Levice</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">036-6316960 ,0903 419720</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:s-com@s-com.sk">s-com@s-com.sk</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Servis EZ</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Budovateľská 12 Brezno</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">048-6111313, 0915 155551</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:kvackaj@gmail.com">kvackaj@gmail.com</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Forex</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Petofiho 4649,94501 Komárno</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">035-7701949,  0905 233331</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:info@forex-b.sk">info@forex-b.sk</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">DATASYSTÉM Šenkár</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Družstevná 839/8,97901 Rimavská Sobota</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 980517</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:info@forex-b.sk">info@forex-b.sk</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">TELE SAT Mláka</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">I.Houdeka 03401 Ružomberok</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 349 759</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:jan.mlaka1@gmail.com">jan.mlaka1@gmail.com</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">KH Technik</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Halenárska 7,91701 Trnava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">033-5513649 , 0905 503 484</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="mailto:holes@kah.sk">holes@kah.sk</a></span>
                              </span>
                    </li>
                    <li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">TOP-IT s.r.o</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Študentská  30,96001 Zvolen</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0907 818 794</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="info@top-it.sk">info@top-it.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Prodata plus s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">1. mája 878/22, 020 01 Púchov</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone"> 042-4631873, 0911 103 096</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="prodata@prodata.sk">prodata@prodata.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">DATAX</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">1. mája 137/43 031 01 Liptovský Mikuláš</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone"> 0948 888 100</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="info@datax.sk">info@datax.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Euro-pokladne.sk s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Sládkovičova 920/4, 92901 Dunajská Streda</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0948 057 827</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="info@euro-pokladne.sk">info@euro-pokladne.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Casallia Slovakia,s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Súvoz 802, 911 01 Trenčín</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">032/7443 844</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="objednavky@casallia.sk">objednavky@casallia.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Markos Comp s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Kossuthova 60,943 01 Štúrovo</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0908 400 646</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="markos@markos.sk">markos@markos.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">EDI SYSTEM, spol. s r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Jadranská 2292/38, 841 02 Bratislava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">02/644 623 55</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="edisystem@edisystem.sk">edisystem@edisystem.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">AV Servis, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Kresánkova 12,841 05 Bratislava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 445 787 </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="uctaren@avservis.org">uctaren@avservis.org</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">WORLDCOMP s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Rudolfa Jašika 504,958 01 Partizánske</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">038-3700037 </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="obchod@worldcomp.sk">obchod@worldcomp.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">PemoComp</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Kozmonautov 51,943 01 Štúrovo</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 280 450 </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="info@pemocomp.sk">info@pemocomp.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">PC-SYSTEM s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Odeská 38,82106 Bratislava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 228 010</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="pcsystem@pc-system.sk">pcsystem@pc-system.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Ing.Pavol Perháč-ELTECH</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Tatranská Polianka 22,06201 Vysoké Tatry</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 606 377</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="perhac@eltechpp.sk">perhac@eltechpp.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person" data-lat="48.578540" data-lng="19.527620">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Ing.Ján Cerovský-ELPOS</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Zánemecká 282,962 05 Hriňová</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 536 533</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="elpos@elposhrinova.sk">elpos@elposhrinova.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person" data-lat="48.679660" data-lng="17.369810">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Ivan Kozák - K & H</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">J.Kráľa 733,905 01 Senica</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 619 843</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="kah@kah.sk">kah@kah.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">EuroServis LK, spol. s r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Šamorínska 52,821 06 Bratislava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 723 970</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="info@blocek.sk">info@blocek.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person" data-lat="48.554160" data-lng="18.153630">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Obchod PC, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Pod Kalváriou 913/65, 955 01 Topoľčany</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 912 450</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="obchod@obchodpc.sk">obchod@obchodpc.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">DATACOM-Ladislav Michlík</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Francisciho 3288, 058 01 Poprad</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">52-77 610 43</span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="datacoke@ke.telecom.sk">datacoke@ke.telecom.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person" data-lat="48.124290" data-lng="19.360990">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Peter Sorčík SOFT - COMP</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Kl. Gottwalda 61/25, 991 06 Želovce</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0949 136 717 </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="soft-comp@soft-comp.sk">soft-comp@soft-comp.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Juraj Bugár - BIT / BUGÁR INSTRUMENT TRADE</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Komárňanská 2157/120, 932 01 Veľký Meder</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">031 5553 707, 0905 266 223 </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="bit-vm@nextra.sk">bit-vm@nextra.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person" data-lat="48.353250" data-lng="19.066770">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">BJK - Computer</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Partizánska 24/2,963 01 Krupina</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">045/551 12 58  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="bjk@bjk.sk">bjk@bjk.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Robert Anyalai - ROBITECH</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Kameničná 740, 946 01 Kameničná</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0904 609 222    </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="robitech@robitech.sk">robitech@robitech.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">MG Import, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Priemyselná 10, 917 01  Trnava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0948 242 067 </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="info@glfarby.sk">info@glfarby.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Ing.Peter Hátas - Ph Soft</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Dóžová 1635, 927 05 Šaľa</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 063 161 </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="hatas@orangemail.sk">hatas@orangemail.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Pronetis s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Za Humnami 732/45, 949 01 Nitra</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">037-202 89 39,  0907 989 822  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="medo@pronetis.eu">medo@pronetis.eu</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">KasCom</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Štúrová č.14, Košice</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">055-622 02 02, 0905 272 765  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="pokladne@kascom.sk">pokladne@kascom.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">COMPUTER CLUB, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Mostná 3, 949 01 Nitra</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0902 903 777, 037-7722440  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="compclub@compclub.sk">compclub@compclub.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">COMPUTER CLUB, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Petelenova 2, 97401 Banská Bystrica</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0902903774, 048-4154133  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="katarina@ccbb.sk">katarina@ccbb.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Pavol Krčmárik</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Skalité 282, 023 14 Skalité</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 459 084  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="pavolkrcmarik@centrum.sk">pavolkrcmarik@centrum.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Ing. Vladimír Boledovič - T servis</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Velehradská 11, 821 08 Bratislava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 416 908  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="t-servis@ba.telecom.sk">t-servis@ba.telecom.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">KOVONET Slovakia s. r. o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Slnečná 307, 094 13 Dlhé Klčovo</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0917 683 172  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="shop@kovonet.sk">shop@kovonet.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Marián Török</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Jabloňová 3, 949 05 Nitra</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 312 576  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="torok@stonline.sk">torok@stonline.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">FUXO, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Rajtákova 58, 841 03 Bratislava</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 553 699  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="fuxo@fuxo.eu">fuxo@fuxo.eu</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">X - Tech, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Gorkého 2, 036 01 Martin</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 708 813  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="x-tech@x-tech.sk">x-tech@x-tech.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">Karol Krumphanzl KA-COMP</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Námestie Mieru 7, 045 01 Moldava nad Bodvou</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0911 397 609  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="ka-comp@ka-comp.sk">ka-comp@ka-comp.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">EMKE, spol. s r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Dunajská 15, 945 01 Komárno</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">035/7731 031  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="emke@emke.sk">emke@emke.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">SECOMP, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">M.R.Štefánika 49, 075 01 Trebišov</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0903 651 643  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="secomp@secomp.sk">secomp@secomp.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">AJBIS, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Zarevuca 23, 034 01 Ružomberok</span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 609 929  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="ajbis@ajbis.sk">ajbis@ajbis.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person" data-lat="49.224860" data-lng="19.299790">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">AJBIS, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Ťatliakova 1823/2, 026 01 Dolný Kubín </span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 609 930  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="ajbis@ajbis.sk">ajbis@ajbis.sk</a></span>
                              </span>
                    </li>
					<li class="tr" itemscope itemtype="http://schema.org/Person" data-lat="48.204864" data-lng="19.348534">
                              <span class="td td-name">
                                <span class="label">Názov:</span>
                                <span class="data" itemprop="name" aria-labelledby="th-name">INFOPC, s.r.o.</span>
                              </span>
                        <span class="td" itemscope itemtype="http://schema.org/Organization">
                                <span class="label">Adresa:</span>
                                <span class="data" itemprop="location" aria-labelledby="th-org">Banícka 9-11,blok č.2, 990 01 Veľký Krtíš </span>
                              </span>
                        <span class="td">
                                <span class="label">Telefón:</span>
                                <span class="data" itemprop="telephone" aria-labelledby="th-phone">0905 466 330  </span>
                              </span>
                        <span class="td">
                                <span class="label">Email:</span>
                                <span class="data" itemprop="email" aria-labelledby="th-email"><a href="obchod.infopc@slovanet.sk">obchod.infopc@slovanet.sk</a></span>
                              </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>
<script src="js/leaflet/leaflet.js"></script>
<script src="js/map.js"></script>

</body>
</html>