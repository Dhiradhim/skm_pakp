<!DOCTYPE html>
<html lang="en">

<?php
include('head.html');
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>


           

            <?php include('sidebar.html'); ?>
          </div>
        </div>

        <!-- top navigation -->
        <?php include('top.html'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Responden</h3>
              </div>
              </div>
            </div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data SKM dan IPAK Triwulan 4</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <!-- QUERY -->
                  <?php
                  include ('../koneksi.php');
                    $tahun = $_SESSION['tahun'];
                    $sql = "SELECT * FROM responden WHERE LEFT(tanggal,7)>='$tahun-10' AND LEFT(tanggal,7)<='$tahun-12' ORDER BY tanggal asc";
                    $query = mysqli_query($con, $sql) or die(mysqli_connect_error());
                    $data = mysqli_fetch_assoc($query);
                    $count = mysqli_num_rows($query);
                    $no = 1;
                  ?>
                  <!-- QUERY -->
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