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
  <link href="<?php echo base_url();?>css/modify.css" rel="stylesheet">

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
      text-decoration: overline;
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
      padding-top: 1.5%;
      padding-right: : 5%;
      padding-bottom: 5%;
      width: 700;
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



    <button id="left">&laquo; Hide </button>
    <button id="right">&raquo; Show</button>

    <div id="sidebar">
      <ul class="list-group" style="background:black;">
        <li class="list-group-item"><a href="#">Kriteria</a></li>
        <li class="list-group-item"><a href="#">Upload Data Calas</a></li>
        <li class="list-group-item"><a href="#">Bobot Kriteria</a></li>
        <li class="list-group-item"><a href="#">Laporan Olah Data</a></li>
        <li class="list-group-item"><a href="#">Report bug</a></li>


      </ul>

    </div>

    <!--Part Form  -->
    <div id="partform">
      <h1> Daftar Kriteria </h1>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"> Tes Teori </h3>

        </div>

        <div class="panel-body">
          <table class="table table-striped">
            <tr>
              <td class="active">Penilaian</td>
              <td class="danger">Bobot</td>

            </tr>
            <tr class="warning">
            <tr><td>71-100</td><td>1</td></tr>
            <tr> <td>51-70</td><td>0.75</td></tr>
            <tr><td>26-50</td><td>0.5</td></tr>
            <tr><td>0-25</td><td>0.25</td></tr>



            </tr>
          </table>
        </div>
      </div>

      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title"> Tes Praktek </h3>

        </div>

        <div class="panel-body">
          <table class="table table-striped">
            <tr class="warning">
              <td class="active">Penilaian</td>
              <td class="danger">Bobot</td>
            </tr>
            <tr>
              <tr><td>71-100</td><td>1</td></tr>
              <tr> <td>51-70</td><td>0.75</td></tr>
              <tr><td>26-50</td><td>0.5</td></tr>
              <tr><td>0-25</td><td>0.25</td></tr>
            </tr>
          </table>
        </div>
      </div>


      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title"> Penilaian Wawancara </h3>

        </div>

        <div class="panel-body">
          <table class="table table-striped">
            <tr class="warning">
              <td class="active">Penilaian</td>
              <td class="danger">Bobot</td>

            </tr>
            <tr>
              <tr><td>71-100</td><td>1</td></tr>
              <tr> <td>51-70</td><td>0.75</td></tr>
              <tr><td>26-50</td><td>0.5</td></tr>
              <tr><td>0-25</td><td>0.25</td></tr>
            </tr>
          </table>
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"> Presentasi </h3>

        </div>

        <div class="panel-body">
          <table class="table table-striped">
            <tr class="warning">
              <td class="active">Penilaian</td>
              <td class="danger">Bobot</td>
            </tr>
            <tr>
              <tr><td>71-100</td><td>1</td></tr>
              <tr> <td>51-70</td><td>0.75</td></tr>
              <tr><td>26-50</td><td>0.5</td></tr>
              <tr><td>0-25</td><td>0.25</td></tr>
            </tr>
          </table>
        </div>
      </div>



    </div>

  </div>


  </div>
  <!-- /.container -->

   



  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- <script src=" js/jquery.js"></script> -->

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
  <script src=" <?php echo base_url();?>js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>

</html>
