<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Triwulan 1 - Tahun <?=$tahun?></title>

<?php
include('head.html');
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-pencil"></i> <span>SKM-IPAK</span></a>
            </div>

            <div class="clearfix"></div>
            <?php include('sidebar.html'); ?>
          </div>
        </div>

        <!-- top navigation -->
        <?php include('top.html'); ?>
        <!-- /top navigation -->

        <!-- QUERY -->
        <?php
          include ('../koneksi.php');
          $no = 1;     
          //Jumlah Responden               
            $sql1 = "SELECT (select count(*) from responden where left(tanggal,7)>='$tahun-01' and left(tanggal,7)<='$tahun-03') as tw1, (select count(*) from responden where left(tanggal,7)>='$tahun-04' and left(tanggal,7)<='$tahun-06') as tw2,(select count(*) from responden where left(tanggal,7)>='$tahun-07' and left(tanggal,7)<='$tahun-09') as tw3, (select count(*) from responden where left(tanggal,7)>='$tahun-10' and left(tanggal,7)<='$tahun-12') as tw4, (select count(*) from responden where left(tanggal,7)>='$tahun-01' and left(tanggal,7)<='$tahun-12') as thn FROM responden limit 1";
            $query1 = mysqli_query($con, $sql1) or die(mysqli_connect_error());
            $data1 = mysqli_fetch_assoc($query1);
            $count1 = mysqli_num_rows($query1);
            
          //Total SKM
            $sql2 = "SELECT * FROM responden";
            $query2 = mysqli_query($con, $sql2) or die(mysqli_connect_error());
            $data2 = mysqli_fetch_assoc($query2);
            $count2 = mysqli_num_rows($query2);
            $jumlah_skm_total=0;
            do {
              $jumlah_skm = 0;
              $jumlah_skm = $data2['question_1']+$data2['question_2']+$data2['question_3']+$data2['question_4']+$data2['question_5']+$data2['question_6']+$data2['question_7']+$data2['question_8']+$data2['question_9']+$data2['question_10'];
              $jumlah_skm_total=$jumlah_skm_total+$jumlah_skm;
            } while ($data2 = mysqli_fetch_assoc($query2));
            $rata_skm=$jumlah_skm_total/(4*$count2);
            $rata_skm2=$rata_skm/10*4;
            
            //Total IPAK
              $sql3 = "SELECT * FROM responden";
              $query3= mysqli_query($con, $sql3) or die(mysqli_connect_error());
              $data3 = mysqli_fetch_assoc($query3);
              $count3 = mysqli_num_rows($query3);
              $jumlah_ipak_total=0;
              do {
                $jumlah_ipak = 0;
                $jumlah_ipak = $data3['question_11']+$data3['question_12']+$data3['question_13']+$data3['question_14']+$data3['question_15']+$data3['question_16']+$data3['question_17']+$data3['question_18']+$data3['question_19']+$data3['question_20'];
                $jumlah_ipak_total=$jumlah_ipak_total+$jumlah_ipak;
              } while ($data3 = mysqli_fetch_assoc($query3));
              $rata_ipak=$jumlah_ipak_total/(4*$count2);
              $rata_ipak2=$rata_ipak/10*4;
            ?>
          <!-- QUERY -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row" style="display: inline-block;" >
              <div class="tile_count">
                <div class="col-md-4 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Responden</span>
                  <div class="count"><?=$data1['thn'];?></div>
                  <span class="count_bottom">Tahun <i class="green"><?=$tahun;?></i></span>
                </div>
                <div class="col-md-4 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                  <div class="count">7,325</div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
                <div class="col-md-4 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                  <div class="count">7,325</div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
              </div>
            </div>
            <br>
            <div class="row" style="display: inline-block;" >
              <div class="tile_count">
                <div class="col-md-3 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Responden</span>
                  <div class="count"><?=$data1['tw1'];?></div>
                  <span class="count_bottom">Triwulan <i class="green">1</i></span>
                </div>
                <div class="col-md-3 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Responden</span>
                  <div class="count"><?=$data1['tw2'];?></div>
                  <span class="count_bottom">Triwulan <i class="green">2</i></span>
                </div>
                <div class="col-md-3 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Responden</span>
                  <div class="count"><?=$data1['tw3'];?></div>
                  <span class="count_bottom">Triwulan <i class="green">3</i></span>
                </div>
                <div class="col-md-3 col-sm-4  tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Responden</span>
                  <div class="count"><?=$data1['tw4'];?></div>
                  <span class="count_bottom">Triwulan <i class="green">4</i></span>
                </div>
              </div>
            </div>
            <div class="">
              <div class="row">
                <div class="col-md-6 col-sm-6  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Jenis Layanan</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <h4></h4>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Gugatan</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span>123k</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Permohonan</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span>123k</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>App Versions</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <h4>App Usage across versions</h4>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>0.1.5.2</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span>123k</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright &copy; Pengadilan Agama Kupang - 2022
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  </body>
</html>