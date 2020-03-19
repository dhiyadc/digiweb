<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Digital Creative Admin</title>

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url() ?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets/css/style_admin.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/style-responsive.css" rel="stylesheet">
  <script src="<?= base_url() ?>assets/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DIGITAL<span>CREATIVE</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?= base_url() ?>admin/logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <!-- <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Malian Rizieq</h5> -->
          <li class="mt">
            <a class="active" href="<?= base_url(); ?>home_admin">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Layanan Kami</span>
              </a>

            <ul class="sub">
              <li><a href="<?= base_url(); ?>kelas_admin/create_form">Buat Layanan</a></li>
              <li><a href="<?= base_url(); ?>kelas_admin">Data Layanan</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Portofolio</span>
            </a>
            <ul class="sub">
              <li><a href="<?= base_url(); ?>portofolio/createPortofolio">Buat Portofolio</a></li>
              <li><a href="<?= base_url(); ?>portofolio">Data Portofolio</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Blog</span>
            </a>
            <ul class="sub">
              <li><a href="<?= base_url(); ?>blog/createview">Buat Blog</a></li>
              <li><a href="<?= base_url(); ?>blog/readblog">Data Blog</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Tentang</span>
            </a>
            <ul class="sub">
              <li><a href="<?= base_url(); ?>tentang/createTentang">Buat Tentang</a></li>
              <li><a href="<?= base_url(); ?>tentang/viewTentang">Data Tentang</a></li>
              <li><a href="<?= base_url(); ?>tentang/viewDeskripsi">Deskripsi Perusahaan</a></li>
              <li><a href="<?= base_url(); ?>tentang/viewFAQ">F.A.Q</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->