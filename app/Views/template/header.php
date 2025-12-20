<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sistem Aplikasi Kampus Teknologi Informatika (SAKTI). Merupakan sistem informasi untuk mendukung perkuliahan di Politeknik Istikom BCI *KAMPUS BERKUALITAS*">
  <meta name="keywords" content="politeknik istikom bci, teknologi rekayasa komputer dan jaringan, bisnis digital, manajemen keuangan sektor publik">
  <meta name="author" content="Politeknik Istikom BCI">
  <title>SAKTI</title>
  <link rel="preload" href="<?= base_url('adminlte/dist/'); ?>css/adminlte.css" as="style" />
  <!--end::Accessibility Features-->
  <!--begin::Fonts-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
    crossorigin="anonymous"
    media="print"
    onload="this.media='all'" />
  <!--end::Fonts-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(OverlayScrollbars)-->
  <!--begin::Third Party Plugin(Bootstrap Icons)-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    crossorigin="anonymous" />
  <!--end::Third Party Plugin(Bootstrap Icons)-->
  <!--begin::Required Plugin(AdminLTE)-->
  <link rel="stylesheet" href="<?= base_url('adminlte/dist/'); ?>css/adminlte.css" />
  <!--end::Required Plugin(AdminLTE)-->
  <!-- apexcharts -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
    crossorigin="anonymous" />
  <!-- jsvectormap -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
    integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
    crossorigin="anonymous" />
  <link rel="icon" type="image/png" href="https://sakti.istikombci.ac.id/images/logo.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="https://sakti.istikombci.ac.id/assets/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://sakti.istikombci.ac.id/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="https://sakti.istikombci.ac.id/assets/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="https://sakti.istikombci.ac.id/assets/plugins/toastr/toastr.min.css">
  <style>
    /* @media only screen and (max-width: 600px) {
      .tengahkan {
        display: block !important;
      }
    } */

    .tengahkan {
      /* display: flex; */
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-box {
      width: 100%;
    }

    .judul {
      border-style: outset;
      text-align: left;
      -webkit-text-stroke: thin;
      color: white;
      background-color: #364999;
      padding: 10px;
      border-radius: 30px 10px;
      width: 95%;
    }

    .judul2 {
      border-style: outset;
      text-align: left;
      -webkit-text-stroke: thin;
      color: white;
      background-color: #364999;
      padding: 10px;
      border-radius: 10px;
    }

    label {
      color: #364999;

    }

    .tulisan-body {
      text-align: left;
      padding-left: 10px;
      color: #364999;
      font-size: 0.9em;
      font-family: revert;
      text-shadow: 0 0 black;
    }

    .kotak {
      display: flex;
      align-items: center;
      position: absolute;
      /* top: 10px; */
      flex-direction: column;
    }

    .btn-daftar {
      width: 200px;
      border-style: outset;
      text-align: center;
      -webkit-text-stroke: thin;
      color: white;
      background-color: #364999;
      padding: 10px;
      border-radius: 10px;
      border: outset;
    }

    .btn-daftar:hover {
      background-color: rgba(54, 153, 61, 0.5);
    }
  </style>
</head>
<!--end::Head-->