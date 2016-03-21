<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>UGLabti-Sistem Penunjang Keputusan</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
  <!-- <link href=" css/bootstrap-theme.css" rel="stylesheet"> -->
  <link href=" <?php echo base_url();?>css/modify.css" rel="stylesheet">

  <style type="text/css">
    .list-group-item {
      background: #001ee0;
    }

    #sidebar {
      position: absolute;
      height: 40%;
    }

    .list-group-item > a {
      color: #ffffff;
      text-decoration: none;
      how
    }

    .list-group-item > a:hover {
      color: #adeade;
      text-decoration: none;
      how
    }

    input.search-query {
      padding-left: 26px;
    }

    form.form-search {
      position: relative;
      content: '';
      display: inline;
      width: 14px;
      height: 50px;
      background: #acdcdcd;
      position: absolute;
      top: 8px;
      left: 8px;
      opacity: 1.5;
      z-index: 100;
    }

    #partform {
      margin-left: 30%;
      height: 700px;
      background: #cdcdcd;
      padding-left: 1%;
      padding-top: 5%;
      padding-right: : 5%;
      padding-bottom: 5%;
      width: 725;
      display: block;
      position: flex;
      /*float: left;*/
      margin-top: 2%;
    }

    @media (max-width: 750px) {
      #partform {
        margin-left: 0%;
        margin-top: 80%;
        width: 450px;
        border-radius: 20px;
      }
    }

    .navbar .navbar-default {
      background: #44ee44;
    }
  </style>

  <!-- Custom styles for this template -->


  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>


  <nav class="navbar navbar-default  " role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> <i class="glyphicon glyphicon-th-large"> </i>Sistem Penunjang Keputusan - TI</a>
      </div>

      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li class="nav navbar-right"><a href="#contact">Logout</a></li>


        </ul>



      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>


  <div class="container">

    <div class="jumbotron" style="padding-left:2.5%;">
      <img src="<?php echo base_url();?>image/lolabti.jpg" class="img-circle" alt="Cinque Terre" width="80" height="80">


      <h2>Sistem Penunjang Keputusan - Laboratorium Teknik Informatika </h2>
      <p class="lead">
        Program Sistem Penunjang Keputusan Penerimaan Asisten Laboratorium Teknik Informatika.

      </p>
    </div>


    <button id="left">&laquo; Hide </button>
    <button id="right">&raquo; Show</button>

    <div id="sidebar">
      <ul class="list-group" style="background:black;">
        <li class="list-group-item"><a href="<?php echo base_url();?>index.php/spkcontroller/kriteria">Kriteria</a></li>
        <li class="list-group-item"><a href="#">Upload Data Calas</a></li>
        <li class="list-group-item"><a href="#">Bobot Kriteria</a></li>
        <li class="list-group-item"><a href="#">Laporan Olah Data</a></li>
        <li class="list-group-item"><a href="#">Report bug</a></li>

      </ul>

    </div>

    <!--Part Form  -->
    <div id="partform">
      <h1> Beranda </h1>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Unggah Data Calas
          </h3>

        </div>

        <div class="panel-body">

          <div class="container" style="margin-top:50px">
            <br>

            <?php if (isset($error)): ?>
              <div class="alert alert-error">
                <?php echo $error; ?>
              </div>
              <?php endif; ?>
                <?php if ($this->session->flashdata('success') == TRUE): ?>
                  <div class="alert alert-success">
                    <?php echo $this->session->flashdata('success'); ?>
                  </div>
                  <?php endif; ?>

                    <h2>UPLOAD DATA CALAS</h2>
                    <form method="post" action="<?php echo base_url() ?>index.php/spkcontroller/uploadRekapitulasiPenilaian" enctype="multipart/form-data">
                      <input type="file" name="userfile">
                      <br>
                      <br>
                      <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
                    </form>

                    <br>
                    <br>
                    <table class="table table-striped table-hover table-bordered">
                      <caption>Penilaian Calas</caption>
                      <thead>


                        <tr>
                          <th>NPM  </th>
                          <th>Nama Calas  </th>
                          <th>Kelas  </th>
                          <th>Nilai Teori (C1)</th>
                          <th>Nilai Praktek (C2)</th>
                          <th>Nilai Wawancara (C3)</th>
                          <th>Nilai Presentasi (C4)  </th>
                          <th> Hasil               </th>
                          <th> Vi              </th>
                        </tr>
                      </thead>
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


                                  if($dPen->nilai_teori >= $t->batas_atas and $dPen->nilai_teori <= $t->batas_bawah){
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
                                  if($dPen->nilai_praktek >= $p->batas_atas and $dPen->nilai_praktek <= $p->batas_bawah){
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
                                  if($dPen->nilai_wawancara >= $w->batas_atas and $dPen->nilai_wawancara <= $w->batas_bawah){
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
                                  if($dPen->nilai_presentasi >= $pr->batas_atas and $dPen->nilai_presentasi <= $pr->batas_bawah){
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
                                echo round($hasilKaliAll,4);?>
                                <!-- Mencetak hasil perkalian Si -->
                            </td>
                          <td>

                          </td>
                          </tr>

                          <?php }?>
                      </tbody>
                        <!-- <div class="halaman">Halaman : < /div> -->
                    </table>















          </div>
        </div>



      </div>

    </div>


  </div>

  <script>
    $("#right").click(function() {
      $("#sidebar").show({
        "left": "+=100px"
      }, "fast");

      $('#partform').css("margin-left", '30%');

    });

    $("#left").click(function() {
      $("#sidebar").hide({
        "right": "-=100px"
      }, "fast");

      $('#partform').css("margin-left", '0%');

    });
  </script>
  <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

</body>

</html>
