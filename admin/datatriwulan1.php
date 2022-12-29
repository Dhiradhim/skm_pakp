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
          //Data Responden           
            $sql = "SELECT * FROM responden WHERE LEFT(tanggal,7)>='$tahun-01' AND LEFT(tanggal,7)<='$tahun-03' ORDER BY tanggal asc";
            $query = mysqli_query($con, $sql) or die(mysqli_connect_error());
            $data = mysqli_fetch_assoc($query);
            $count = mysqli_num_rows($query);

          //Jumlah Responden               
            $sql1 = "SELECT id from responden where left(tanggal,7)>='$tahun-01' and left(tanggal,7)<='$tahun-03'";
            $query1 = mysqli_query($con, $sql1) or die(mysqli_connect_error());
            $data1 = mysqli_fetch_assoc($query1);
            $count1 = mysqli_num_rows($query1);

          //Total SKM
            $sql2 = "SELECT * FROM responden where left(tanggal,7)>='$tahun-01' and left(tanggal,7)<='$tahun-03'";
            $query2 = mysqli_query($con, $sql2) or die(mysqli_connect_error());
            $data2 = mysqli_fetch_assoc($query2);
            $count2 = mysqli_num_rows($query2);
            $jumlah_skm_total=0;
            if ($count2==0){
              $jumlah_skm = 0;
              $jumlah_skm_total = 0;
              $rata_skm= 0;
              $rata_skm2= 0;
            }else{
            do {
              $jumlah_skm = 0;
              $jumlah_skm = $data2['question_1']+$data2['question_2']+$data2['question_3']+$data2['question_4']+$data2['question_5']+$data2['question_6']+$data2['question_7']+$data2['question_8']+$data2['question_9']+$data2['question_10'];
              $jumlah_skm_total=$jumlah_skm_total+$jumlah_skm;
            } while ($data2 = mysqli_fetch_assoc($query2));
            $rata_skm=$jumlah_skm_total/(4*$count2);
            $rata_skm2=$rata_skm/10*4;
            }

          //Total IPAK
            $sql3 = "SELECT * FROM responden where left(tanggal,7)>='$tahun-01' and left(tanggal,7)<='$tahun-03'";
            $query3= mysqli_query($con, $sql3) or die(mysqli_connect_error());
            $data3 = mysqli_fetch_assoc($query3);
            $count3 = mysqli_num_rows($query3);
            $jumlah_ipak_total=0;
            if ($count3==0){
              $jumlah_ipak = 0;
              $jumlah_ipak_total = 0;
              $rata_ipak = 0;
              $rata_ipak2 = 0;
            }else{
            do {
              $jumlah_ipak = 0;
              $jumlah_ipak = $data3['question_11']+$data3['question_12']+$data3['question_13']+$data3['question_14']+$data3['question_15']+$data3['question_16']+$data3['question_17']+$data3['question_18']+$data3['question_19']+$data3['question_20'];
              $jumlah_ipak_total=$jumlah_ipak_total+$jumlah_ipak;
            } while ($data3 = mysqli_fetch_assoc($query3));
            $rata_ipak=$jumlah_ipak_total/(4*$count2);
            $rata_ipak2=$rata_ipak/10*4;
            } 
        ?>
        <!-- QUERY -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row" >
            <div class="tile_count">
              <div class="col-md-4 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Responden</span>
                <div class="count"><?=$count1;?></div>
                <span class="count_bottom">Triwulan <i class="green">1</i></span>
              </div>
              <div class="col-md-4 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Nilai SKM</span>
                <div class="count"><?=number_format((float)$rata_skm2, 1, '.', '');?>/<?=number_format((float)$rata_skm, 1, '.', '');?></div>
                <span class="count_bottom">Triwulan <i class="green">1</i></span>
              </div>
              <div class="col-md-4 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Nilai IPAK</span>
                <div class="count"><?=number_format((float)$rata_ipak2, 1, '.', '');?>/<?=number_format((float)$rata_ipak, 1, '.', '');?></div>
                <span class="count_bottom">Triwulan <i class="green">1</i></span>
              </div>
            </div>
          </div>
            <br>
            
          <div class="">
            </div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data SKM dan IPAK Triwulan 1 Tahun <?=$tahun?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <td rowspan="2" align="center">No</td>
                                    <td rowspan="2" align="center">Tanggal</td>
                                    <td rowspan="2" align="center">Jenis Kelamin</td>
                                    <td rowspan="2" align="center">Pendidikan</td>
                                    <td rowspan="2" align="center">Usia</td>
                                    <td rowspan="2" align="center">Pekerjaan</td>
                                    <td rowspan="2" align="center">Pihak</td>
                                    <td rowspan="2" align="center">Instansi</td>
                                    <td rowspan="2" align="center">Keterkaitan</td>
                                    <td rowspan="2" align="center">Jenis Layanan</td>
                                    <td rowspan="2" align="center">Suku Bangsa</td>
                                    <td colspan="10" align="center">SKM</td>
                                    <td colspan="10" align="center">IPAK</td>
                                  </tr>
                                  <tr>
                                    <td align="center">1</td>
                                    <td align="center">2</td>
                                    <td align="center">3</td>
                                    <td align="center">4</td>
                                    <td align="center">5</td>
                                    <td align="center">6</td>
                                    <td align="center">7</td>
                                    <td align="center">8</td>
                                    <td align="center">9</td>
                                    <td align="center">10</td>
                                    <td align="center">1</td>
                                    <td align="center">2</td>
                                    <td align="center">3</td>
                                    <td align="center">4</td>
                                    <td align="center">5</td>
                                    <td align="center">6</td>
                                    <td align="center">7</td>
                                    <td align="center">8</td>
                                    <td align="center">9</td>
                                    <td align="center">10</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    do
                                    {
                                  ?>
                                  <tr>
                                    <td><?=$no?></td>
                                    <td><?=$data['tanggal']?></td>
                                    <td><?=$data['jenis_kelamin']?></td>
                                    <td><?=$data['pendidikan']?></td>
                                    <td><?=$data['usia']?></td>
                                    <td><?=$data['pekerjaan']?></td>
                                    <td><?=$data['pihak']?></td>
                                    <td><?=$data['instansi']?></td>
                                    <td><?=$data['keterkaitan']?></td>
                                    <td><?=$data['jenis_layanan']?></td>
                                    <td><?=$data['suku_bangsa']?></td>
                                    <td><?=$data['question_1']?></td>
                                    <td><?=$data['question_2']?></td>
                                    <td><?=$data['question_3']?></td>
                                    <td><?=$data['question_4']?></td>
                                    <td><?=$data['question_5']?></td>
                                    <td><?=$data['question_6']?></td>
                                    <td><?=$data['question_7']?></td>
                                    <td><?=$data['question_8']?></td>
                                    <td><?=$data['question_9']?></td>
                                    <td><?=$data['question_10']?></td>
                                    <td><?=$data['question_11']?></td>
                                    <td><?=$data['question_12']?></td>
                                    <td><?=$data['question_13']?></td>
                                    <td><?=$data['question_14']?></td>
                                    <td><?=$data['question_15']?></td>
                                    <td><?=$data['question_16']?></td>
                                    <td><?=$data['question_17']?></td>
                                    <td><?=$data['question_18']?></td>
                                    <td><?=$data['question_19']?></td>
                                    <td><?=$data['question_20']?></td>
                                  </tr>
                                  <?php 
                                    $no++; 
                                    } while ($data = mysqli_fetch_assoc($query));
                                  ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
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