<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Anas Keren </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Saya Anas</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Anas</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Input Data Pasien</a></li>
                    </ul>
                  </li>

                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  
  
                  
                      
                      
                      
                     
                      
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <?php include "data.php";?>

            
                <title>Anas Keren</title>
            
            </head>
            
            <body>
    <div class="container-fluid">
        <!-- Navbar atau Header -->
        <!-- Tambahkan navbar atau header jika diperlukan -->
        <br><br><br>
        <div class="card-header">
            <h1 class="text-center">SISTEM PAKAR INFEKSI SISTEM GASTRO USUS</h1>
        </div>

        <div class="container mt-4"> <!-- Container utama -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <!-- Konten Sistem Pakar -->

                            
<!-- Form for patient's name and symptoms -->
<form action="" method="post">
    <!-- Input for patient's name -->
    <label for="nama_pasien">Nama Pasien:</label>
    <input type="text" id="nama_pasien" name="nama_pasien" required>
    <br>

    <!-- Checkboxes for symptoms -->
    <?php foreach ($gejalaString as $key => $value): ?>
        <?php
        // Gunakan variabel $index untuk menunjukkan angka/indeks
        $index = array_search($key, array_keys($gejalaString)) + 1;
        ?>
        <input type="checkbox" name="gejala[]" value="<?= $key ?>">
        <span style="font-weight: bold;"><?= $index ?>.</span> Apakah <?= $value ?>?
        <br>
    <?php endforeach; ?>
    <br>

    <!-- Input for threshold -->
    <label for="threshold">Threshold :</label>
    <input type="text" id="threshold" name="threshold" required> %
    <br><br>

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<form method="post">
    <input type="hidden" name="back">
    <button type="submit" class="btn btn-primary">Hapus Analisis</button>
</form>
<br>

<!-- Container for displaying results -->
<div id="result-container"></div>
<?php include "proses-hitung.php";?>

            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>