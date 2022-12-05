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

    <title>Data Triwulan 3 - Tahun <?=$tahun?></title>

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
            $sql1 = "SELECT id from responden where left(tanggal,7)>='$tahun-07' and left(tanggal,7)<='$tahun-09'";
            $query1 = mysqli_query($con, $sql1) or die(mysqli_connect_error());
            $data1 = mysqli_fetch_assoc($query1);
            $count1 = mysqli_num_rows($query1);

          //Total SKM
            $sql2 = "SELECT * FROM responden where left(tanggal,7)>='$tahun-07' and left(tanggal,7)<='$tahun-09'";
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
            $sql3 = "SELECT * FROM responden where left(tanggal,7)>='$tahun-07' and left(tanggal,7)<='$tahun-09'";
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

            //Jenis Kelamin
            $laki = total('jenis_kelamin','laki-laki');
            $percent_laki = $laki/($count1/100);
            $perempuan = total('jenis_kelamin','perempuan');
            $percent_perempuan = $perempuan/($count1/100);
            //Jenis Layanan
            $gugatan = total('jenis_layanan','Gugatan');
            $percent_gugatan = $gugatan/($count1/100);
            $permohonan = total('jenis_layanan','Permohonan');
            $percent_permohonan = $permohonan/($count1/100);
            $layanan_lainnya = $count1 - $gugatan - $permohonan;
            $percent_layanan_lainnya = $layanan_lainnya/($count1/100);
            //Usia
            $usia19 = usia('19');
            $percent_usia19 = $usia19/($count1/100);
            $usia20 = usia('20');
            $percent_usia20 = $usia20/($count1/100);
            $usia30 = usia('30');
            $percent_usia30 = $usia30/($count1/100);
            $usia40 = usia('40');
            $percent_usia40 = $usia40/($count1/100);
            $usia49 = usia('49');
            $percent_usia49 = $usia49/($count1/100);
            //Pekerjaan
            $pnstni = total('pekerjaan','PNS/TNI/POLRI');
            $percent_pnstni = $pnstni/($count1/100);
            $swasta = total('pekerjaan','Pegawai Swasta');
            $percent_swasta = $swasta/($count1/100);
            $wiraswasta = total('pekerjaan','Wiraswasta');
            $percent_wiraswasta = $wiraswasta/($count1/100);
            $pelajar = total('pekerjaan','Pelajar/Mahasiswa');
            $percent_pelajar = $pelajar/($count1/100);
            $pekerjaan_lainnya = $count1 - $pnstni - $swasta -  $wiraswasta - $pelajar;
            $percent_pekerjaan_lainnya = $pekerjaan_lainnya/($count1/100);
            //Pendidikan
            $sd = total('pendidikan','SD');
            $percent_sd = $sd/($count1/100);
            $smp = total('pendidikan','SMP');
            $percent_smp = $smp/($count1/100);
            $sma = total('pendidikan','SMA');
            $percent_sma = $sma/($count1/100);
            $s1 = total('pendidikan','S1');
            $percent_s1 = $s1/($count1/100);
            $s2 = total('pendidikan','S2');
            $percent_s2 = $s2/($count1/100);
            $s3 = total('pendidikan','S3');
            $percent_s3 = $s3/($count1/100);
            $diploma = total('pendidikan','Diploma');
            $percent_diploma = $diploma/($count1/100);

            //Suku
            $alor = total('suku_bangsa','alor');
            $percent_alor = $alor/($count1/100);
            $flores = total('suku_bangsa','flores');
            $percent_flores = $flores/($count1/100);
            $sabu = total('suku_bangsa','sabu');
            $percent_sabu = $sabu/($count1/100);
            $boti = total('suku_bangsa','boti');
            $percent_boti = $boti/($count1/100);
            $sumba = total('suku_bangsa','sumba');
            $percent_sumba = $sumba/($count1/100);
            $manggarai = total('suku_bangsa','manggarai');
            $percent_manggarai = $manggarai/($count1/100);
            $rote = total('suku_bangsa','rote');
            $percent_rote = $rote/($count1/100);
            $timor = total('suku_bangsa','timor');
            $percent_timor = $timor/($count1/100);
            $jawa = total('suku_bangsa','jawa');
            $percent_jawa = $jawa/($count1/100);
            $madura = total('suku_bangsa','madura');
            $percent_madura = $madura/($count1/100);            
            $bugis = total('suku_bangsa','bugis');
            $percent_bugis = $bugis/($count1/100);
            $suku_lainnya = $count1-$alor-$flores-$sabu-$boti-$sumba-$manggarai-$rote-$timor-$jawa-$madura-$bugis;
            $percent_suku_lainnya = $suku_lainnya/($count1/100);

        ?>
          <!-- QUERY -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row" style="display: inline-block;" >
                <div class="tile_count">
                <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Responden</span>
                    <div class="count"><?=$count1;?></div>
                    <span class="count_bottom">Triwulan <i class="green">3</i></span>
                </div>
                <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Nilai SKM</span>
                    <div class="count"><?=number_format((float)$rata_skm2, 1, '.', '');?>/<?=number_format((float)$rata_skm, 1, '.', '');?></div>
                    <span class="count_bottom">Triwulan <i class="green">3</i></span>
                </div>
                <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Nilai IPAK</span>
                    <div class="count"><?=number_format((float)$rata_ipak2, 1, '.', '');?>/<?=number_format((float)$rata_ipak, 1, '.', '');?></div>
                    <span class="count_bottom">Triwulan <i class="green">3</i></span>
                </div>
                </div>
            </div
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
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_gugatan, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$gugatan;?> / <?=number_format((float)$percent_gugatan, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Permohonan</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_permohonan, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$permohonan;?> / <?=number_format((float)$percent_permohonan, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Lain-lain</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_layanan_lainnya, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$layanan_lainnya;?> / <?=number_format((float)$percent_layanan_lainnya, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Jenis Kelamin</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <h4></h4>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Laki-Laki</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_laki, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$laki;?> / <?=number_format((float)$percent_laki, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Perempuan</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_perempuan, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$perempuan;?> / <?=number_format((float)$percent_perempuan, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-6  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Usia</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <h4></h4>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span><20 Tahun</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_usia19, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$usia19;?> / <?=number_format((float)$percent_usia19, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>20-29 Tahun</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_usia20, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$usia20;?> / <?=number_format((float)$percent_usia20, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>30-39 Tahun</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_usia30, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$usia30;?> / <?=number_format((float)$percent_usia30, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>40-49 Tahun</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_usia40, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$usia40;?> / <?=number_format((float)$percent_usia40, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>>49 Tahun</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_usia49, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$usia49;?> / <?=number_format((float)$percent_usia49, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Pekerjaan</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <h4></h4>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>PNS/TNI/POLRI</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_pnstni, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$pnstni;?> / <?=number_format((float)$percent_pnstni, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Pegawai Swasta</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_swasta, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$swasta;?> / <?=number_format((float)$percent_swasta, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Wiraswasta</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_wiraswasta, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$wiraswasta;?> / <?=number_format((float)$percent_wiraswasta, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Pelajar</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_pelajar, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$pelajar;?> / <?=number_format((float)$percent_pelajar, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Lainnya</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_pekerjaan_lainnya, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$pekerjaan_lainnya;?> / <?=number_format((float)$percent_pekerjaan_lainnya, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-sm-6  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Pendidikan</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <h4></h4>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>SD</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_sd, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$sd;?> / <?=number_format((float)$percent_sd, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>SMP</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_smp, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$smp;?> / <?=number_format((float)$percent_smp, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>SMA</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_sma, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$sma;?> / <?=number_format((float)$percent_sma, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Diploma</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_diploma, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$diploma;?> / <?=number_format((float)$percent_diploma, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>S1</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_s1, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$s1;?> / <?=number_format((float)$percent_s1, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>S2</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_s2, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$s2;?> / <?=number_format((float)$percent_s2, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>S3</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar" style="width: <?=number_format((float)$percent_s3, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$s3;?> / <?=number_format((float)$percent_s3, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Suku Bangsa</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <h4></h4>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Alor</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_alor, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$alor;?> / <?=number_format((float)$percent_alor, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Flores</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_flores, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$flores;?> / <?=number_format((float)$percent_flores, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Sabu</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_sabu, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$sabu;?> / <?=number_format((float)$percent_sabu, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Boti</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_boti, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$boti;?> / <?=number_format((float)$percent_boti, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Sumba</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_sumba, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$sumba;?> / <?=number_format((float)$percent_sumba, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Manggarai</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_manggarai, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$manggarai;?> / <?=number_format((float)$percent_manggarai, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Rote</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_rote, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$rote;?> / <?=number_format((float)$percent_rote, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Timor</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_timor, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$timor;?> / <?=number_format((float)$percent_timor, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Jawa</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_jawa, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$jawa;?> / <?=number_format((float)$percent_jawa, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Madura</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_madura, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$madura;?> / <?=number_format((float)$percent_madura, 2, '.', '');?>%</span>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="widget_summary">
                        <div class="w_left w_25">
                          <span>Lainnya</span>
                        </div>
                        <div class="w_center w_55">
                          <div class="progress">
                            <div class="bg-green" role="progressbar"  style="width: <?=number_format((float)$percent_suku_lainnya, 1, '.', '');?>%;">
                            </div>
                          </div>
                        </div>
                        <div class="w_right w_20">
                          <span><?=$suku_lainnya;?> / <?=number_format((float)$percent_suku_lainnya, 2, '.', '');?>%</span>
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

<?php
function total($col,$val){
    include('../koneksi.php');
    $tahun = $_SESSION['tahun'];
    $s = "SELECT count(*) from responden where $col='$val' AND left(tanggal,7)>='$tahun-07' and left(tanggal,7)<='$tahun-09'";
    $q = mysqli_query($con, $s) or die(mysqli_connect_error());
    $d = mysqli_fetch_assoc($q);
    return $d['count(*)'];
}

function usia($val){
  include('../koneksi.php');
  $tahun = $_SESSION['tahun'];
  if ($val=='19'){
    $cond = "usia < '20'";
  }
  else if ($val=='20'){
    $cond = "usia >= '20' AND usia <='29'";
  }
  else if ($val=='30'){
    $cond = "usia >= '30' AND usia <='39'";
  }
  else if ($val=='40'){
    $cond = "usia >= '40' AND usia <='49'";
  }
  else if ($val=='49'){
    $cond = "usia > '49'";
  }
  $s = "SELECT count(*) from responden where $cond AND left(tanggal,7)>='$tahun-07' and left(tanggal,7)<='$tahun-09'";
  $q = mysqli_query($con, $s) or die(mysqli_connect_error());
  $d = mysqli_fetch_assoc($q);
  return $d['count(*)'];
}
?>
  </body>
</html>