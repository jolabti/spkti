<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SPKTI - Calas </title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url();?>css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/green.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">

  <script src="<?php echo base_url();?>js/jquery.min.js"></script>





  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-caret-square-o-down"></i> <span>SPK-TI</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo base_url();?>image/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>UG-LABTI</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>UNIVERSITAS GUNADARMA</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home  </a>
                  <!-- <ul class="nav child_menu" style="display: none">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                    <li><a href="index2.html">Dashboard2</a>
                    </li>
                    <li><a href="index3.html">Dashboard3</a>
                    </li>
                  </ul> -->
                </li>
                <li><a><i class="fa fa-edit"></i> Setting <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="form.html">General Form</a>
                    </li>
                    <li><a href="form_advanced.html">Advanced Components</a>
                    </li>
                    <li><a href="form_validation.html">Form Validation</a>
                    </li>
                    <li><a href="form_wizards.html">Form Wizard</a>
                    </li>
                    <li><a href="form_upload.html">Form Upload</a>
                    </li>
                    <li><a href="form_buttons.html">Form Buttons</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-th"></i> Help <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="general_elements.html">General Elements</a>
                    </li>
                    <li><a href="media_gallery.html">Media Gallery</a>
                    </li>
                    <li><a href="typography.html">Typography</a>
                    </li>
                    <li><a href="icons.html">Icons</a>
                    </li>
                    <li><a href="glyphicons.html">Glyphicons</a>
                    </li>
                    <li><a href="widgets.html">Widgets</a>
                    </li>
                    <li><a href="invoice.html">Invoice</a>
                    </li>
                    <li><a href="inbox.html">Inbox</a>
                    </li>
                    <li><a href="calender.html">Calender</a>
                    </li>
                  </ul>
                </li>
                <!-- <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="tables.html">Tables</a>
                    </li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a>
                    </li>
                  </ul>
                </li> -->
                <!-- <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="chartjs.html">Chart JS</a>
                    </li>
                    <li><a href="chartjs2.html">Chart JS2</a>
                    </li>
                    <li><a href="morisjs.html">Moris JS</a>
                    </li>
                    <li><a href="echarts.html">ECharts </a>
                    </li>
                    <li><a href="other_charts.html">Other Charts </a>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </div>
            <!-- <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="e_commerce.html">E-commerce</a>
                    </li>
                    <li><a href="projects.html">Projects</a>
                    </li>
                    <li><a href="project_detail.html">Project Detail</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                    <li><a href="profile.html">Profile</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="page_404.html">404 Error</a>
                    </li>
                    <li><a href="page_500.html">500 Error</a>
                    </li>
                    <li><a href="plain_page.html">Plain Page</a>
                    </li>
                    <li><a href="login.html">Login Page</a>
                    </li>
                    <li><a href="pricing_tables.html">Pricing Tables</a>
                    </li>

                  </ul>
                </li>
                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
              </ul>
            </div> -->

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url();?>index.php/spkcontroller/logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li  >
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url();?>image/labti.jpg" alt="" width="30px" height="30px">John Doe
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <!-- <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="<?php   base_url();?>image/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="<?php   base_url();?>image/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="<?php   base_url();?>image/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="<?php   base_url();?>image/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li> -->

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>
                    SISTEM PENUNJANG KEPUTUSAN
                    <small>
                        Penerimaan Calon Asisten Laboratorium Teknik Informatika
                    </small>
                    <small>
                        @UG_Labti
                    </small>
                </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>


          <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>KRITERIA TEORI (C1) <small>-------------------</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table" id="example" >
                    <thead>

                      <tr>
                        <th>No.</th>
                        <th>Rentang</th>
                        <th>Bobot</th>
                      </tr>

                    </thead>

                    <tbody>
                      <?php $no=1;?>
                      <?php foreach ($teori as $key ) {

                     ?>
                      <tr>
                        <th scope="row"><?php echo $no;?></th>
                        <td><?php echo $key->batas_bawah ;?> - <?php echo $key->batas_atas ;?> </td>
                        <td><?php echo $key->bobot;?></td>
                      </tr>

                    <?php
                      $no++;
                   }?>


                    </tbody>
                  </table>

                </div>
              </div>
            </div>


            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>KRITERIA PRAKTEK (C2) <small>-------------------</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table table-striped">
                    <thead>

                      <tr>
                        <th>No.</th>
                        <th>Rentang</th>
                        <th>Bobot</th>
                      </tr>

                    </thead>

                    <tbody>
                      <?php $no=1;?>
                      <?php foreach ($teori as $key ) {

                     ?>
                      <tr>
                        <th scope="row"><?php echo $no;?></th>
                        <td><?php echo $key->batas_bawah ;?> - <?php echo $key->batas_atas ;?> </td>
                        <td><?php echo $key->bobot;?></td>
                      </tr>

                    <?php
                      $no++;
                   }?>


                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>KRITERIA WAWANCARA <small>C3</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="table table-hover">
                    <thead>

                      <tr>
                        <th>No.</th>
                        <th>Rentang</th>
                        <th>Bobot</th>
                      </tr>

                    </thead>

                    <tbody>
                      <?php $no=1;?>
                      <?php foreach ($teori as $key ) {

                     ?>
                      <tr>
                        <th scope="row"><?php echo $no;?></th>
                        <td><?php echo $key->batas_bawah ;?> - <?php echo $key->batas_atas ;?> </td>
                        <td><?php echo $key->bobot;?></td>
                      </tr>

                    <?php
                      $no++;
                   }?>


                    </tbody>
                  </table>

                </div>
              </div>
            </div>


            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>KRITERIA PRESENTASI <small>C4</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table table-bordered"  >
                    <thead>

                      <tr>
                        <th>No.</th>
                        <th>Rentang</th>
                        <th>Bobot</th>
                      </tr>

                    </thead>

                    <tbody>
                      <?php $no=1;?>
                      <?php foreach ($teori as $key ) {

                     ?>
                      <tr>
                        <th scope="row"><?php echo $no;?></th>
                        <td><?php echo $key->batas_bawah ;?> - <?php echo $key->batas_atas ;?> </td>
                        <td><?php echo $key->bobot;?></td>
                      </tr>

                    <?php
                      $no++;
                   }?>


                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Table design <small>Custom design</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                  <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                  <table class="table table-striped responsive-utilities jambo_table bulk_action" id="example1">
                    <thead>
                      <tr class="headings">

                        <th  >NPM </th>
                        <th >NAMA CALAS </th>
                        <th  >NILAI TEORI (C1) </th>
                        <th  >NILAI PRAKTEK (C2) </th>
                        <th  >NILAI WAWANCARA (C3) </th>
                        <th >NILAI PRESENTASI (C4) </th>
                        <th >HASIL AWAL 1 </th>
                        <th >Vi </th>
                        <th >Hasil Awal 2 </th>
                        <th > >Hasil Akhir</span></th>

                      </tr>
                    </thead>

                    <?php

                  $hasilKaliAll = 1;
                  $hasilTambah = 0;
                  foreach ($dataPenilaian as $dPen) {
                  $jumlah = $jumlahbobot[0]->score;
                  $bobotAsal = $bobotCollect[0]->bobot;

                  foreach ($teori as $t) {

                  if ($dPen->nilai_teori >= $t->batas_bawah and $dPen->nilai_teori <= $t->batas_atas) {
                  $bobotBagi = $bobotAsal / $jumlah;
                  $hasilAkhirT = round(pow($t->bobot, $bobotBagi), 3);
                  break;
                  }
                  }
                  $bobotAsal = 0;

                  $bobotAsal = $bobotCollect[1]->bobot;
                  foreach ($praktek as $p) {
                  if ($dPen->nilai_praktek >= $p->batas_bawah and $dPen->nilai_praktek <= $p->batas_atas) {
                  $bobotBagiP = $bobotAsal / $jumlah;
                  $hasilAkhirP = round(pow($p->bobot, $bobotBagiP), 3);
                  break;
                  }
                  }
                  $bobotAsal = 0;

                  $bobotAsal = $bobotCollect[2]->bobot;
                  foreach ($wawancara as $w) {
                  if ($dPen->nilai_wawancara >= $w->batas_bawah and $dPen->nilai_wawancara <= $w->batas_atas) {
                  $bobotBagiW = $bobotAsal / $jumlah;
                  $hasilAkhirW = round(pow($w->bobot, $bobotBagiP), 3);
                  break;
                  }
                  }

                  $bobotAsal = $bobotCollect[3]->bobot;
                  foreach ($presentasi as $pr) {
                  if ($dPen->nilai_presentasi >= $pr->batas_bawah and $dPen->nilai_presentasi <= $pr->batas_atas) {
                  $bobotBagiPr = $bobotAsal / $jumlah;
                  $hasilAkhirPr = round(pow($pr->bobot, $bobotBagiPr), 3);
                  break;
                  }
                  }

                  $hasilKaliAll = $hasilAkhirT * $hasilAkhirP * $hasilAkhirW * $hasilAkhirPr;
                  $hasilTambah = $hasilTambah + $hasilKaliAll;
                  $hasilKaliAll = 1;
                  }
                  ?>






                    <tbody>
              <?php  foreach ($dataPenilaian as $dPen) {
              $jumlah = $jumlahbobot[0]->score;
              ?>

                        <tr>
                          <td>
                            <?php print $dPen->npm; ?>
                          </td>
                          <td>
                            <?php print $dPen->nama_calas; ?>
                          </td>
                          <td>
                            <?php print $dPen->kelas; ?>
                          </td>
                          <td>
                            <?php
                  $bobotAsal = $bobotCollect[0]->bobot;

                  foreach ($teori as $t) {
                    //echo $dPen->nilai_presentasi;


                    if($dPen->nilai_teori >= $t->batas_bawah and $dPen->nilai_teori <= $t->batas_atas){
                      $bobotBagi = $bobotAsal / $jumlah;
                      $hasilAkhirT  = round(pow($t->bobot, $bobotBagi), 3);

                      echo $t->bobot . 'Nilai Bobot Teori';
                      echo "<br/>";
                      echo $bobotAsal . 'bobot asal';
                      echo "<br/>";

                      echo $bobotBagi . 'bobot bagi Teori' ;
                      echo "<br/>";

                      echo $jumlah . 'jumlah';
                      echo "<br/>";
                      echo $hasilAkhirT;
                      break;
                    }
                  }
                  $bobotAsal=0;
                  ?>
                          </td>
                          <td>
                            <?php
                  $bobotAsal = $bobotCollect[1]->bobot;
                  foreach ($praktek as $p) {
                    //echo $dPen->nilai_presentasi;
                    if($dPen->nilai_praktek >= $p->batas_bawah and $dPen->nilai_praktek <= $p->batas_atas){
                      $bobotBagiP = $bobotAsal / $jumlah;
                      $hasilAkhirP = round(pow($p->bobot, $bobotBagiP), 3);
                      echo $p->bobot .'bobot Kriteria Praktek';
                      echo "<br/>";

                      echo $bobotAsal .'bobot Asal';
                      echo "<br/>";

                      echo $bobotBagiP .'bobot bagi Presentasi';
                      echo "<br/>";
                      echo $jumlah ."jumlah bobot kriteria";
                      echo "<br/>";
                      echo $hasilAkhirP;
                      break;
                    }
                  }
                  $bobotAsal=0;
                  ?>

                          </td>
                          <td>
                            <?php

                  $bobotAsal=$bobotCollect[2]->bobot;;
                  foreach ($wawancara as $w) {
                    //echo $dPen->nilai_presentasi;
                    if($dPen->nilai_wawancara >= $w->batas_bawah and $dPen->nilai_wawancara <= $w->batas_atas){
                      $bobotBagiW = $bobotAsal / $jumlah;
                      $hasilAkhirW = round(pow($w->bobot, $bobotBagiP), 3);
                      echo $w->bobot .'Bobot Kriteria';
                      echo "<br/>";
                      echo $bobotAsal .'Bobot Asal';
                      echo "<br/>";
                      echo $bobotBagiW .'bobot bagi Wawancara';
                      echo "<br/>";
                      echo $jumlah ."jumlah bobot kriteria";
                      echo "<br/>";
                      echo $hasilAkhirW;
                      break;
                    }
                  }

                  $bobotAsal=0;
                  ?>

                          </td>
                          <td>

                            <?php
                  $bobotAsal=$bobotCollect[3]->bobot;
                  foreach ($presentasi as $pr) {
                    //echo $dPen->nilai_presentasi;
                    if($dPen->nilai_presentasi >= $pr->batas_bawah and $dPen->nilai_presentasi <= $pr->batas_atas){
                      $bobotBagiPr = $bobotAsal / $jumlah;
                      $hasilAkhirPr = round(pow($pr->bobot, $bobotBagiPr), 3);
                      echo $pr->bobot ."Bobot Kriteria Presentasi";
                      echo "<br/>";
                      echo $bobotBagiPr ."bobotBagiPr";
                      echo "<br/>";
                      echo $bobotAsal ."Bobot Asal";
                      echo "<br/>";
                      echo $jumlah ."jumlah bobot kriteria";
                      echo "<br/>";
                      echo $hasilAkhirPr;
                      break;
                    }
                  }
                  ?>
                          </td>
                          <td>
                            <?php
                    $hasilKaliAll =$hasilAkhirT*$hasilAkhirP*$hasilAkhirW*$hasilAkhirPr ;
                    echo round($hasilKaliAll,4) . 'cek';?>
                              <!-- Mencetak hasil perkalian Si -->
                          </td>
                          <td>
                            <?php
                    echo round($hasilTambah, 4) . '|';
                  //  echo round(round($hasilKaliAll,4)/$hasilTambah, 4);
                    ?>
                          </td>

                          <td>
                            <?php   echo round(round($hasilKaliAll,4)/$hasilTambah, 4);?>
                          </td>
                        </tr>

                        <?php }?>
                    </tbody>

                  </table>


                </div>
              </div>
            </div>
          </div>

        </div>
        <a href="<?php echo base_url();?>index.php/spkcontroller/submit" class="btn btn-warning">DELETE DATAS</a>
        <br>
        <h2>UPLOAD DATA CALAS</h2>

        <form method="post" action="<?php echo base_url() ?>index.php/spkcontroller/uploadRekapitulasiPenilaian" enctype="multipart/form-data">
          <input type="file" name="userfile">
          <br>
          <br>
          <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
        </form>

                      <div class="progress">
                        <div class="bar"></div>
                        <div class="percent">0%</div>
                      </div>
        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>
  <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="<?php echo base_url();?>js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url();?>js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url();?>js/icheck/icheck.min.js"></script>

  <script src="<?php echo base_url();?>js/custom.js"></script>


  <!-- Datatables -->
  <script src="<?php echo base_url();?>js/datatables/js/jquery.dataTables.js"></script>
  <script src="<?php echo base_url();?>js/datatables/tools/js/dataTables.tableTools.js"></script>

  <!-- pace -->
  <script src="<?php echo base_url();?>js/pace/pace.min.js"></script>
  <script>
    $(document).ready(function() {
      $('input.tableflat').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });
    });

    var asInitVals = new Array();
    $(document).ready(function() {
      var oTable = $('#example1').dataTable({
        "oLanguage": {
          "sSearch": "Search all columns:"
        },
        "aoColumnDefs": [{
            'bSortable': false,
            'aTargets': [0]
          } //disables sorting for column one
        ],
        'iDisplayLength': 12,
        "sPaginationType": "full_numbers",
        "dom": 'T<"clear">lfrtip',
        "tableTools": {
          "sSwfPath": "js/datatables/tools/swf/copy_csv_xls_pdf.swf"
        }
      });
      $("tfoot input").keyup(function() {
        /* Filter on the column based on the index of this element's parent <th> */
        oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
      });
      $("tfoot input").each(function(i) {
        asInitVals[i] = this.value;
      });
      $("tfoot input").focus(function() {
        if (this.className == "search_init") {
          this.className = "";
          this.value = "";
        }
      });
      $("tfoot input").blur(function(i) {
        if (this.value == "") {
          this.className = "search_init";
          this.value = asInitVals[$("tfoot input").index(this)];
        }
      });
    });
  </script>


  <!-- <script src="http://malsup.github.com/jquery.form.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
  <script src="http://malsup.github.com/jquery.form.js"></script>
  <script>
    (function() {

      var bar = $('.bar');
      var percent = $('.percent');
      var status = $('#status');

      $('form').ajaxForm({
        beforeSend: function() {
          status.empty();
          var percentVal = '0%';
          bar.width(percentVal)
          percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
          var percentVal = percentComplete + '%';
          bar.width(percentVal)
          percent.html(percentVal);
        },
        success: function() {
          var percentVal = '100%';
          bar.width(percentVal)
          percent.html(percentVal);
        },
        complete: function(xhr) {
          status.html(xhr.responseText);
        }
      });

    })();
  </script> -->
</body>

</html>
