<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Umuttepe Turizm</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo base_url('assets/img/favicons/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo base_url('assets/img/favicons/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo base_url('assets/img/favicons/favicon-16x16.png'); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicons/favicon.ico'); ?>">
  <link rel="manifest" href="<?php echo base_url('assets/img/favicons/manifest.json'); ?>">
  <meta name="msapplication-TileImage" content="<?php echo base_url('assets/img/UTurizm.png'); ?>">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css'); ?>">

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
      data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand"><img
            src="<?php echo base_url('assets/img/UTurizm.png') ?>" height="110" width="130" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
            <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                href="#service">Servis</a></li>
            <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                href="#destination">Seyhat</a></li>
            <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                href="#booking">Yer Ayırt</a></li>
            <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#!">Giriş Yap</a>
            </li>
            <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium"
                href="#!">Kayıt Ol</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section style="padding-top: 7rem;">
      <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img"
              src="<?php echo base_url('assets/img/hero/hero2Last.png') ?>" alt="hero-header" /></div>
          <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
            <h4 class="fw-bold text-danger mb-3">
              Türkiye'nın en büyüleyici köşelerine yolculuk yapın</h4>
            <h1 class="hero-title">Seyahat edin, keyfini çıkarın</h1>
            <p class="mb-4 fw-medium">Seyahatlerinizi özenle düzenleyip, konforlu <br> koltuklarımızda rahatınızı
              düşünüyor
              <br> ve bilet işlemlerinizi kolaylaştırıyoruz.
            </p>
            <div class="text-center text-md-start"> <a
                class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!"
                role="button">Daha Fazlası</a>
              <!-- //TODO bura register a navigate edicek -->
              <!-- <div class="w-100 d-block d-md-none"></div><a href="#!" role="button" data-bs-toggle="modal"
                data-bs-target="#popupVideo"><span
                  class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img
                    src="<?php echo base_url('assets/img/hero/play.svg') ?>" width="15" alt="paly" /></span></a><span
                class="fw-medium">Play Demo</span> -->
              <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <iframe class="rounded" style="width:100%;max-height:500px;" height="500px"
                      src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen="allowfullscreen"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pt-md-9" id="service">

      <div class="container">
        <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img
            src="<?php echo base_url('assets/img/category/shape.svg') ?>" style="max-width: 200px" alt="service" />
        </div>
        <div class="mb-7 text-center">
          <h5 class="text-secondary">Kategoriler </h5>
          <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">EN IYI HIZMETI SUNUYORUZ</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-6">
            <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
              <div class="card-body p-xxl-5 p-4"> <img src="<?php echo base_url('assets/img/category/icon1.png') ?>"
                  width="75" alt="Service" />
                <h4 class="mb-3">Hava Durumu Tahmini</h4>
                <p class="mb-0 fw-medium">Yolculuğunuz öncesinde, güzergahınızdaki hava durumunu en doğru şekilde tahmin
                  ediyor ve sizi bilgilendiriyoruz.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-6">
            <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
              <div class="card-body p-xxl-5 p-4"> <img src="<?php echo base_url('assets/img/category/icon2.png') ?>"
                  width="75" alt="Service" />
                <h4 class="mb-3">En İyi Otobüs Seferleri</h4>
                <p class="mb-0 fw-medium">Seçkin ve konforlu otobüs seferlerimizle, seyahat etmek istediğiniz her yere
                  rahatlıkla ulaşın.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-6">
            <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
              <div class="card-body p-xxl-5 p-4"> <img src="<?php echo base_url('assets/img/category/icon3.png') ?>"
                  width="75" alt="Service" />
                <h4 class="mb-3">Yerel Etkinlikler</h4>
                <p class="mb-0 fw-medium">Varış noktanızda sizi bekleyen yerel etkinlikler ve festivaller hakkında bilgi
                  veriyor, unutulmaz anlar yaşamanızı sağlıyoruz.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-6">
            <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
              <div class="card-body p-xxl-5 p-4"> <img src="<?php echo base_url('assets/img/category/icon4.png') ?>"
                  width="75" alt="Service" />
                <h4 class="mb-3">Kişiselleştirme</h4>
                <p class="mb-0 fw-medium">Seyahat deneyiminizi kişisel tercihlerinize göre şekillendiriyor, özel
                  ihtiyaçlarınıza uygun çözümler sunuyoruz.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5" id="destination">

      <div class="container">
        <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
          <img src="<?php echo base_url('assets/img/dest/shape.svg'); ?>" alt="destination" />
        </div>
        <div class="mb-7 text-center">
          <h5 class="text-secondary">Çok Satan</h5>
          <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Varış Noktaları</h3>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card overflow-hidden shadow">
              <img class="card-img-top" src="<?php echo base_url('assets/img/ist.jpeg'); ?>" alt="Rome, Italy" />
              <div class="card-body py-4 px-3">
                <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                  <h4 class="text-secondary fw-medium">
                    <a class="link-900 text-decoration-none stretched-link" href="#!">İstanbul, TR</a>
                  </h4>
                  <!-- <span class="fs-1 fw-medium">$5,42k</span> -->
                </div>
                <div class="d-flex align-items-center">
                  <img src="<?php echo base_url('assets/img/dest/navigation.svg'); ?>" style="margin-right: 14px"
                    width="20" alt="navigation" />
                  <!-- <span class="fs-0 fw-medium">10 Days Trip</span> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card overflow-hidden shadow">
              <img class="card-img-top" src="<?php echo base_url('assets/img/izmir2.png'); ?>" alt="London, UK" />
              <div class="card-body py-4 px-3">
                <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                  <h4 class="text-secondary fw-medium">
                    <a class="link-900 text-decoration-none stretched-link" href="#!">İzmir, TR</a>
                  </h4>
                  <!-- <span class="fs-1 fw-medium">$4.2k</span> -->
                </div>
                <div class="d-flex align-items-center">
                  <img src="<?php echo base_url('assets/img/dest/navigation.svg'); ?>" style="margin-right: 14px"
                    width="20" alt="navigation" />
                  <!-- <span class="fs-0 fw-medium">12 Days Trip</span> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card overflow-hidden shadow">
              <img class="card-img-top" src="<?php echo base_url('assets/img/ankara2.png'); ?>" alt="Full Europe" />
              <div class="card-body py-4 px-3">
                <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                  <h4 class="text-secondary fw-medium">
                    <a class="link-900 text-decoration-none stretched-link" href="#!">Ankara, TR</a>
                  </h4>
                  <!-- <span class="fs-1 fw-medium">$15k</span> -->
                </div>
                <div class="d-flex align-items-center">
                  <img src="<?php echo base_url('assets/img/dest/navigation.svg'); ?>" style="margin-right: 14px"
                    width="20" alt="navigation" />
                  <!-- <span class="fs-0 fw-medium">28 Days Trip</span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="booking">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="mb-4 text-start">
              <h5 class="text-secondary">
                Kolay ve Hızlı</h5>
              <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Bir Sonraki Seyahatinizi 3 Kolay Adımda Ayırtın
              </h3>
            </div>
            <div class="d-flex align-items-start mb-5">
              <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px">
                <img src="<?php echo base_url('assets/img/steps/selection.svg'); ?>" width="22" alt="steps" />
              </div>
              <div class="flex-1">
                <h5 class="text-secondary fw-bold fs-0">Varış Noktanızı Seçin</h5>
                <p>Favori yerinizi seçin.. <br class="d-none d-sm-block">  Dünyanın neresine seyahat etmek isterseniz isteyin</p>
              </div>
            </div>
            <div class="d-flex align-items-start mb-5">
              <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px">
                <img src="<?php echo base_url('assets/img/steps/water-sport.svg'); ?>" width="22" alt="steps" />
              </div>
              <div class="flex-1">
                <h5 class="text-secondary fw-bold fs-0">Ödeme Yapın</h5>
                <p>Mükemmel noktanızı bulduktan sonra, <br class="d-none d-sm-block">  ödemenizi yapın ve seyahate hazırlanın</p>
              </div>
            </div>
            <div class="d-flex align-items-start mb-5">
              <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px">
                <img src="<?php echo base_url('assets/img/steps/taxi.svg'); ?>" width="22" alt="steps" />
              </div>
              <div class="flex-1">
                <h5 class="text-secondary fw-bold fs-0">Belirlenen Tarihte Terminale Ulaşın</h5>
                <p>Son olarak, belirlenen zamanda terminale varmalı  <br class="d-none d-sm-block"> ve tatilin tadını çıkarmalısınız.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-center align-items-start">
            <div class="card position-relative shadow" style="max-width: 370px;">
              <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;">
                <img src="<?php echo base_url('assets/img/steps/bg.png'); ?>" style="max-width:550px;" alt="shape" />
              </div>
              <div class="card-body p-3">
                <img class="mb-4 mt-2 rounded-2 w-100" src="<?php echo base_url('assets/img/steps/booking-img.jpg'); ?>"
                  alt="booking" />
                <div>
                  <h5 class="fw-medium">Izmir'e tur</h5>
                  <p class="fs--1 mb-3 fw-medium">14-29 Haziran | by Kerem Yazıcı</p>
                  <div class="icon-group mb-4">
                    <span class="btn icon-item">
                      <img src="<?php echo base_url('assets/img/steps/leaf.svg'); ?>" alt="" />
                    </span>
                    <span class="btn icon-item">
                      <img src="<?php echo base_url('assets/img/steps/map.svg'); ?>" alt="" />
                    </span>
                    <span class="btn icon-item">
                      <img src="<?php echo base_url('assets/img/steps/send.svg'); ?>" alt="" />
                    </span>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center mt-n1">
                      <img class="me-3" src="<?php echo base_url('assets/img/steps/building.svg'); ?>" width="18"
                        alt="building" />
                      <span class="fs--1 fw-medium">24 kişi gidiyor</span>
                    </div>
                    <div class="show-onhover position-relative">
                      <div
                        class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                        style="width: 260px; border-radius:18px;">
                        <div class="card-body py-3">
                          <div class="d-flex">
                            <div style="margin-right: 10px">
                              <img class="rounded-circle"
                                src="<?php echo base_url('assets/img/steps/favorite-placeholder.png'); ?>" width="50"
                                alt="favorite" />
                            </div>
                            <div>
                              <p class="fs--1 mb-1 fw-medium">Ongoing</p>
                              <h5 class="fw-medium mb-3">Trip to Rome</h5>
                              <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed</h6>
                              <div class="progress" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn">
                        <img src="<?php echo base_url('assets/img/steps/heart.svg'); ?>" width="20" alt="step" />
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <!-- <section id="testimonial">

      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="mb-8 text-start">
              <h5 class="text-secondary">Testimonials</h5>
              <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">What people say about Us.</h3>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-6">
            <div class="pe-7 ps-5 ps-lg-0">
              <div class="carousel slide carousel-fade position-static" id="testimonialIndicator"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0"
                    aria-current="true" aria-label="Testimonial 0"></button>
                  <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1"
                    aria-current="true" aria-label="Testimonial 1"></button>
                  <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2"
                    aria-current="true" aria-label="Testimonial 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item position-relative active">
                    <div class="card shadow" style="border-radius:10px;">
                      <div class="position-absolute start-0 top-0 translate-middle">
                        <img class="rounded-circle fit-cover"
                          src="" height="65" width="65"
                          alt="" />
                      </div>
                      <div class="card-body p-4">
                        <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture yet its express parties
                          use. Sure last upon he same as knew next. Of believed or diverted no.&quot;</p>
                        <h5 class="text-secondary">Mike taylor</h5>
                        <p class="fw-medium fs--1 mb-0">Lahore, Pakistan</p>
                      </div>
                    </div>
                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                      style="border-radius:10px; transform:translate(25px, 25px)"> </div>
                  </div>
                  <div class="carousel-item position-relative">
                    <div class="card shadow" style="border-radius:10px;">
                      <div class="position-absolute start-0 top-0 translate-middle">
                        <img class="rounded-circle fit-cover"
                          src="" height="65" width="65"
                          alt="" />
                      </div>
                      <div class="card-body p-4">
                        <p class="fw-medium mb-4">&quot;Jadoo is recognized as one of the finest travel agency in the
                          world. When it came to planning a trip, I found them to be dependable.&quot;</p>
                        <h5 class="text-secondary">Thomas Wagon</h5>
                        <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                      </div>
                    </div>
                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                      style="border-radius:10px; transform:translate(25px, 25px)"> </div>
                  </div>
                  <div class="carousel-item position-relative">
                    <div class="card shadow" style="border-radius:10px;">
                      <div class="position-absolute start-0 top-0 translate-middle">
                        <img class="rounded-circle fit-cover"
                          src="" height="65" width="65"
                          alt="" />
                      </div>
                      <div class="card-body p-4">
                        <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture yet its express parties
                          use. Sure last upon he same as knew next. Of believed or diverted no.&quot;</p>
                        <h5 class="text-secondary">Kelly Willium</h5>
                        <p class="fw-medium fs--1 mb-0">Khulna, Bangladesh</p>
                      </div>
                    </div>
                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                      style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                  </div>
                </div>
                <div
                  class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
                  style="height:60px;width:20px;">
                  <button class="carousel-control-prev position-static" type="button"
                    data-bs-target="#testimonialIndicator" data-bs-slide="prev">
                    <img src="" width="16" alt="icon" />
                  </button>
                  <button class="carousel-control-next position-static" type="button"
                    data-bs-target="#testimonialIndicator" data-bs-slide="next">
                    <img src="" width="16" alt="icon" />
                  </button>
                </div>
              </div>
            </div>
          </div>end of .container -->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
      <div class="container">
        <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
          <div class="col">
            <div class="card shadow-hover mb-4" style="border-radius:10px;">
              <div class="card-body text-center"> <img class="img-fluid"
                  src="<?php echo base_url('assets/img/partner/1.png') ?>" alt="" /></div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-hover mb-4" style="border-radius:10px;">
              <div class="card-body text-center"> <img class="img-fluid"
                  src="<?php echo base_url('assets/img/partner/2.png') ?>" alt="" /></div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-hover mb-4" style="border-radius:10px;">
              <div class="card-body text-center"> <img class="img-fluid"
                  src="<?php echo base_url('assets/img/partner/3.png') ?>" alt="" /></div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-hover mb-4" style="border-radius:10px;">
              <div class="card-body text-center"> <img class="img-fluid"
                  src="<?php echo base_url('assets/img/partner/4.png') ?>" alt="" /></div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-hover mb-4" style="border-radius:10px;">
              <div class="card-body text-center"> <img class="img-fluid"
                  src="<?php echo base_url('assets/img/partner/5.png') ?>" alt="" /></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-6">

      <div class="container">
        <div class="py-8 px-5 position-relative text-center"
          style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
          <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img
              src="<?php echo base_url('') ?>assets/img/cta/send.png" style="max-width:70px;" alt="send icon" /></div>
          <div class="position-absolute end-0 top-0 z-index--1"> <img
              src="<?php echo base_url('assets/img/cta/shape-bg2.png') ?>" width="264" alt="cta shape" /></div>
          <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img
              src="<?php echo base_url('assets/img/cta/shape-bg1.png') ?>" style="max-width: 340px;" alt="cta shape" />
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
              <h2 class="text-secondary lh-1-7 mb-7">Umuttepe Turizm hakkında bilgi, en son haberler ve diğer ilginç teklifler almak için abone olun.</h2>
              <form class="row g-3 align-items-center w-lg-75 mx-auto">
                <div class="col-sm">
                  <div class="input-group-icon">
                    <input class="form-control form-little-squirrel-control" type="email" placeholder="Email Adresiniz"
                      aria-label="email" /><img class="input-box-icon"
                      src="<?php echo base_url('assets/img/cta/mail.svg') ?>" width="17" alt="mail" />
                  </div>
                </div>
                <div class="col-sm-auto">
                  <button class="btn btn-danger orange-gradient-btn fs--1">Abone ol</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-0 pb-lg-4">
    <div style="display: flex; justify-content-center" >
    <div class="container">
        <div class="row ">
          <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4"
              src="<?php echo base_url('assets/img/UTurizm.png') ?>" width="180" alt="jadoo" />
            
          </div>
          <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Şirket</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Hakkımızda</a></li>
              <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Kariyer</a></li>
              <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Mobil</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">İletişim</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Help/FAQ</a></li>
              <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Ortaklık</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Seferler</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Terminal</a></li>
              <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Vip</a></li>
              <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Indirim</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
            <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social" id="facebook"
                href="#!"><i class="fab fa-facebook-f"> </i></a><a class="text-decoration-none icon-item shadow-social"
                id="instagram" href="#!"><i class="fab fa-instagram"> </i></a><a
                class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i class="fab fa-twitter">
                </i></a></div>
            <h4 class="fw-medium font-sans-serif text-secondary mb-3">Uygulamayı Keşfedin</h4>
            <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2"
                  src="<?php echo base_url('assets/img/play-store.png') ?>" alt="play store" /></a><a href="#!"> <img
                  src="<?php echo base_url('assets/img/apple-store.png') ?>" alt="apple store" /></a>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </div>
     

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="<?php echo base_url('vendors/@popperjs/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('vendors/bootstrap/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('vendors/is/is.min.js'); ?>"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="<?php echo base_url('vendors/fontawesome/all.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
    rel="stylesheet">
</body>

</html>