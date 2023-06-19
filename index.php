<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>SKM DAN IPK PA KUPANG</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logopakp.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	

	<!-- /menu -->
	
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="#" id="logo"><img src="img/header.png" alt="" height="60"></a>
					<div id="social">
						<ul>
							<li><a target="_blank" href="https://pa-kupang.go.id/en/"><i class="icon-website-circled"></i></a></li>
							<li><a target="_blank" href="https://www.facebook.com/pengadilanagama.kupang"><i class="icon-facebook"></i></a></li>
							<li><a target="_blank" href="https://www.youtube.com/channel/UCC5924YhYN_4rCVSjKDRdxA"><i class="icon-youtube"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/pa_kupang/"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<br>
						<figure><img src="img/a.png" alt="" class="img-fluid"></figure>
						<hr>
						<p>Survei kepuasan masyarakat digunakan untuk mengukur kepuasan masyarakat pengguna layanan di lingkungan Pengadilan Agama Kupang Kelas IA. Indeks persepsi korupsi sebagai wujud dukungan dan peran aktif Pengadilan Agama Kupang Kelas IA dalam kegiatan pencegahan dan pemberantasan korupsi.</p>
					</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form id="wrapped" method="POST" enctype="multipart/form-data" action="simpan.php">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/4</strong>Silahkan mengisi biodata Anda terlebih dahulu!</h3>
									<hr>
									<h3 class="main_question" class="wide required"><strong>1. Jenis Kelamin</strong></h3>
									<input type="hidden" name="tanggal" value='<?=date("Y-m-d") ?>'>
									<div class="form-group">
										<label class="container_check version_2">Laki-laki
											<input type="radio" name="jenis_kelamin" value="laki-laki" class="required" onchange="getVals(this, 'jenis_kelamin');">
											
											<span class="checkmark"></span>
										</label>
									</div>
								
									<div class="form-group">
										<label class="container_check version_2">Perempuan
											<input type="radio" name="jenis_kelamin" value="perempuan" class="required" onchange="getVals(this, 'jenis_kelamin');">
											<span class="checkmark"></span>
										</label>
									</div>
									<hr>
									<h3 class="main_question"><strong>2. Pendidikan</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">SD (Sekolah Dasar)/Sederajat
											<input type="radio" name="pendidikan" value="SD" class="required" onchange="getVals(this, 'pendidikan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">SMP (Sekolah Menengah Pertama)/Sederajat
											<input type="radio" name="pendidikan" value="SMP" class="required" onchange="getVals(this, 'pendidikan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">SMA (Sekolah Menengah Atas)/Sederajat
											<input type="radio" name="pendidikan" value="SMA" class="required" onchange="getVals(this, 'pendidikan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">D1/D2/D3/D4 (Diploma)
											<input type="radio" name="pendidikan" value="Diploma" class="required" onchange="getVals(this, 'pendidikan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">S1 (Sarjana)
											<input type="radio" name="pendidikan" value="S1" class="required" onchange="getVals(this, 'pendidikan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">S2 (Magister)
											<input type="radio" name="pendidikan" value="S2" class="required" onchange="getVals(this, 'pendidikan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">S3 (Doktor)
											<input type="radio" name="pendidikan" value="S3" class="required" onchange="getVals(this, 'pendidikan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<hr>
									<h3 class="main_question"><strong>3. Usia</strong></h3>
									<div class="form-group">
										<input type="text" name="usia" class="form-control required" placeholder="Usia" onchange="getVals(this, 'usia');">
									</div>
									<hr>
									<h3 class="main_question"><strong>4. Pekerjaan</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">PNS/TNI/POLRI
											<input type="radio" name="pekerjaan" value="PNS/TNI/POLRI" class="required radio1" onchange="getVals(this, 'pekerjaan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Pegawai Swasta
											<input type="radio" name="pekerjaan" value="Pegawai Swasta" class="required radio1" onchange="getVals(this, 'pekerjaan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Wiraswasta / Pengusaha
											<input type="radio" name="pekerjaan" value="Wiraswasta" class="required radio1" onchange="getVals(this, 'pekerjaan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Pelajar/Mahasiswa
											<input type="radio" name="pekerjaan" value="Pelajar/Mahasiswa" class="required radio1" onchange="getVals(this, 'pekerjaan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Lainnya
											<input type="radio" name="pekerjaan" class="required radio1 other1" value="lainnya" onchange="getVals(this, 'pekerjaan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<input type="text" name="pekerjaan_lainnya" id="lainnya1" class="form-control" disabled="true" placeholder="Lainnya">
									</div>
									<hr>
									<h3 class="main_question"><strong>5. Untuk pihak siapa Saudara menggunakan layanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Diri Sendiri (Pribadi/Instansi)
											<input type="radio" name="pihak" value="Diri Sendiri" class="required radio2" onchange="getVals(this, 'pihak');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Orang Lain (Kuasa/Kuasa Hukum/Pengacara)
											<input type="radio" name="pihak" value="Orang Lain" class="required radio2" onchange="getVals(this, 'pihak');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Lainnya
											<input type="radio" name="pihak" class="required radio2 other2" value="lainnya" onchange="getVals(this, 'pihak');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<input type="text" name="pihak_lainnya" id="lainnya2" class="form-control" disabled="true" placeholder="Lainnya">
									</div>
									<hr>
									<h3 class="main_question"><strong>6. Nama instansi</strong></h3>
									<div class="form-group">
										<input type="text" name="instansi" class="form-control" placeholder="Nama instansi" onchange="getVals(this, 'instansi');">
									</div>
									<hr>
									<h3 class="main_question"><strong>7. Keterkaitan Saudara dengan layanan peradilan</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Pemohon / Termohon / Penggugat / Tergugat
											<input type="radio" name="keterkaitan" value="Pemohon/Termohon/Penggugat/Tergugat" class="required radio1" onchange="getVals(this, 'keterkaitan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kuasa Hukum / Penasehat Hukum
											<input type="radio" name="keterkaitan" value="Kuasa Hukum/Penasehat Hukum" class="required radio3" onchange="getVals(this, 'keterkaitan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Saksi
											<input type="radio" name="keterkaitan" value="Saksi" class="required radio3" onchange="getVals(this, 'keterkaitan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Lainnya
											<input type="radio" name="keterkaitan" value="lainnya" value="lainnya" class="required radio3 other3" onchange="getVals(this, 'keterkaitan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<input type="text" name="keterkaitan_lainnya" id="lainnya3" class="form-control" placeholder="Lainnya" disabled="true">
									</div>
									<hr>
									<h3 class="main_question"><strong>8. Jenis layanan/keperluan</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Gugatan
											<input type="radio" name="jenis_layanan" value="Gugatan" class="required radio4" onchange="getVals(this, 'jenis_layanan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Permohonan
											<input type="radio" name="jenis_layanan" value="Permohonan" class="required radio4" onchange="getVals(this, 'jenis_layanan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Upaya Hukum (Banding/Kasasi/PK)
											<input type="radio" name="jenis_layanan" value="Upaya Hukum" class="required radio4" onchange="getVals(this, 'jenis_layanan');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Lainnya
											<input type="radio" name="jenis_layanan" value="lainnya" value="lainnya" class="required radio4 other4">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<input type="text" name="jenis_layanan_lainnya" id="lainnya4" class="form-control" placeholder="Lainnya" disabled="true">
									</div>
									<hr>
									<h3 class="main_question"><strong>9. Suku bangsa</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Alor
											<input type="radio" name="suku_bangsa" value="Alor" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Flores
											<input type="radio" name="suku_bangsa" value="Flores" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sabu
											<input type="radio" name="suku_bangsa" value="Bajawa" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Boti
											<input type="radio" name="suku_bangsa" value="Boti" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sumba
											<input type="radio" name="suku_bangsa" value="Sumba" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Manggarai
											<input type="radio" name="suku_bangsa" value="Manggarai" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Rote
											<input type="radio" name="suku_bangsa" value="Rote" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Timor
											<input type="radio" name="suku_bangsa" value="Timor" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jawa
											<input type="radio" name="suku_bangsa" value="Jawa" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Madura
											<input type="radio" name="suku_bangsa" value="Madura" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Bugis
											<input type="radio" name="suku_bangsa" value="Bugis" class="required radio5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Lainnya
											<input type="radio" name="suku_bangsa" value="lainnya" value="lainnya" class="required radio5 other5" onchange="getVals(this, 'suku_bangsa');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<input type="text" name="suku_bangsa_lainnya" id="lainnya5" class="form-control" placeholder="Lainnya" disabled="true">
									</div>
								</div>
								<div class="step">
									<h3 class="main_question"><strong>2/4</strong>Indeks Pelayanan Publik</h3>
									<h3 class="main_question"><strong>1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Sesuai
											<input type="radio" name="question_1" value="1" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Sesuai
											<input type="radio" name="question_1" value="2" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sesuai
											<input type="radio" name="question_1" value="3" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Sesuai
											<input type="radio" name="question_1" value="4" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<br>
									<h3 class="main_question"><strong>2. Bagaimana sikap petugas dalam memberikan pelayanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Baik
											<input type="radio" name="question_2" value="1" class="required" onchange="getVals(this, 'question_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Cukup Baik
											<input type="radio" name="question_2" value="2" class="required" onchange="getVals(this, 'question_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Baik
											<input type="radio" name="question_2" value="3" class="required" onchange="getVals(this, 'question_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Baik
											<input type="radio" name="question_2" value="4" class="required" onchange="getVals(this, 'question_2');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>3. Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Mudah 
											<input type="radio" name="question_3" value="1" class="required" onchange="getVals(this, 'question_3');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Mudah
											<input type="radio" name="question_3" value="2" class="required" onchange="getVals(this, 'question_3');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Mudah
											<input type="radio" name="question_3" value="3" class="required" onchange="getVals(this, 'question_3');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Mudah
											<input type="radio" name="question_3" value="4" class="required" onchange="getVals(this, 'question_3');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>4. Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Cepat
											<input type="radio" name="question_4" value="1" class="required" onchange="getVals(this, 'question_4');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Cepat
											<input type="radio" name="question_4" value="2" class="required" onchange="getVals(this, 'question_4');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Cepat
											<input type="radio" name="question_4" value="3" class="required" onchange="getVals(this, 'question_4');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Cepat
											<input type="radio" name="question_4" value="4" class="required" onchange="getVals(this, 'question_4');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>5. Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Sesuai
											<input type="radio" name="question_5" value="1" class="required" onchange="getVals(this, 'question_5');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Sesuai
											<input type="radio" name="question_5" value="2" class="required" onchange="getVals(this, 'question_5');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sesuai
											<input type="radio" name="question_5" value="3" class="required" onchange="getVals(this, 'question_5');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Sesuai
											<input type="radio" name="question_5" value="4" class="required" onchange="getVals(this, 'question_5');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>6. Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Sangat Mahal
											<input type="radio" name="question_6" value="1" class="required" onchange="getVals(this, 'question_6');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Cukup Mahal
											<input type="radio" name="question_6" value="2" class="required" onchange="getVals(this, 'question_6');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Wajar
											<input type="radio" name="question_6" value="3" class="required" onchange="getVals(this, 'question_6');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Gratis
											<input type="radio" name="question_6" value="4" class="required" onchange="getVals(this, 'question_6');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>7. Bagaimana pendapat Saudara tentang kompetensi/ kemampuan petugas dalam pelayanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Kompeten
											<input type="radio" name="question_7" value="1" class="required" onchange="getVals(this, 'question_7');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Kompeten
											<input type="radio" name="question_7" value="2" class="required" onchange="getVals(this, 'question_7');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kompeten
											<input type="radio" name="question_7" value="3" class="required" onchange="getVals(this, 'question_7');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Kompeten
											<input type="radio" name="question_7" value="4" class="required" onchange="getVals(this, 'question_7');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>8. Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak sopan dan ramah
											<input type="radio" name="question_8" value="1" class="required" onchange="getVals(this, 'question_8');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang sopan dan ramah
											<input type="radio" name="question_8" value="2" class="required" onchange="getVals(this, 'question_8');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sopan dan ramah
											<input type="radio" name="question_8" value="3" class="required" onchange="getVals(this, 'question_8');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat sopan dan ramah
											<input type="radio" name="question_8" value="4" class="required" onchange="getVals(this, 'question_8');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>9. Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Buruk
											<input type="radio" name="question_9" value="1" class="required" onchange="getVals(this, 'question_9');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Cukup
											<input type="radio" name="question_9" value="2" class="required" onchange="getVals(this, 'question_9');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Baik
											<input type="radio" name="question_9" value="3" class="required" onchange="getVals(this, 'question_9');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Baik
											<input type="radio" name="question_9" value="4" class="required" onchange="getVals(this, 'question_9');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>10. Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Ada
											<input type="radio" name="question_10" value="1" class="required" onchange="getVals(this, 'question_10');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Ada tetapi tidak berfungsi
											<input type="radio" name="question_10" value="2" class="required" onchange="getVals(this, 'question_10');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Berfungsi kurang maksimal
											<input type="radio" name="question_10" value="3" class="required" onchange="getVals(this, 'question_10');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Dikelola dengan baik
											<input type="radio" name="question_10" value="4" class="required" onchange="getVals(this, 'question_10');">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>

								<div class="step">
									<h3 class="main_question"><strong>3/4</strong>Indeks Persepsi Anti Korupsi</h3>			
									<h3 class="main_question"><strong>1. Apakah pelayanan oleh petugas di Pengadilan sesuai prosedur dan ketentuan yang berlaku?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak sesuai prosedur
											<input type="radio" name="question_11" value="1" class="required" onchange="getVals(this, 'question_11');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang sesuai prosedur
											<input type="radio" name="question_11" value="2" class="required" onchange="getVals(this, 'question_11');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering sesuai prosedur
											<input type="radio" name="question_11" value="3" class="required" onchange="getVals(this, 'question_11');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Selalu sesuai prosedur
											<input type="radio" name="question_11" value="4" class="required" onchange="getVals(this, 'question_11');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>2. Apakah dalam memperoleh layanan Pengadilan secara cepat dan mudah ada penyalahgunaan jabatan dari petugas untuk meminta imbalan tertentu?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">petugas melayani selalu meminta imbalan
											<input type="radio" name="question_12" value="1" class="required" onchange="getVals(this, 'question_12');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">petugas melayani sering meminta imbalan
											<input type="radio" name="question_12" value="2" class="required" onchange="getVals(this, 'question_12');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">petugas melayani jarang meminta imbalan
											<input type="radio" name="question_12" value="3" class="required" onchange="getVals(this, 'question_12');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">petugas melayani tanpa meminta imbalan
											<input type="radio" name="question_12" value="4" class="required" onchange="getVals(this, 'question_12');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>3. Pernahkah dihubungi oleh seseorang ( karyawan Pengadilan ) yang akan membantu dalam pengurusan surat / berkas perkara?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_13" value="1" class="required" onchange="getVals(this, 'question_13');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_13" value="2" class="required" onchange="getVals(this, 'question_13');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_13" value="3" class="required" onchange="getVals(this, 'question_13');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_13" value="4" class="required" onchange="getVals(this, 'question_13');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>4. Apakah selalu mudah dalam mendapatkan informasi tentang tarif/biaya baik melalui website ataupun petugas layanan di Pengadilan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak pernah
											<input type="radio" name="question_14" value="1" class="required" onchange="getVals(this, 'question_14');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_14" value="2" class="required" onchange="getVals(this, 'question_14');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_14" value="3" class="required" onchange="getVals(this, 'question_14');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_14" value="4" class="required" onchange="getVals(this, 'question_14');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>5. Apakah di Pengadilan selalu membayar sesuai tarif resmi tanpa ada biaya tambahan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak pernah
											<input type="radio" name="question_15" value="1" class="required" onchange="getVals(this, 'question_15');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_15" value="2" class="required" onchange="getVals(this, 'question_15');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_15" value="3" class="required" onchange="getVals(this, 'question_15');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_15" value="4" class="required" onchange="getVals(this, 'question_15');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>6. Apakah memberikan tanda terima kasih atas layanan yang diterima di Pengadilan ( meskipun tidak diminta )?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_16" value="1" class="required" onchange="getVals(this, 'question_16');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_16" value="2" class="required" onchange="getVals(this, 'question_16');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_16" value="3" class="required" onchange="getVals(this, 'question_16');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_16" value="4" class="required" onchange="getVals(this, 'question_16');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>7. Apakah menerima bukti transaksi keuangan / pembayaran yang sah setelah proses pembayaran di Pengadilan dilakukan? ( Untuk pelayanan yang dipungut biaya / PNBP )</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak pernah
											<input type="radio" name="question_17" value="1" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_17" value="2" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_17" value="3" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_17" value="4" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>8. Apakah pernah mengetahui ada praktek percaloan dalam pengurusan layanan di Pengadilan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_18" value="1" class="required" onchange="getVals(this, 'question_18');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_18" value="2" class="required" onchange="getVals(this, 'question_18');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_18" value="3" class="required" onchange="getVals(this, 'questiquestion_18on_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_18" value="4" class="required" onchange="getVals(this, 'question_18');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>9. Apakah pernah melihat dan atau mendengar masih terjadi praktek KKN di Pengadilan ?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_19" value="1" class="required" onchange="getVals(this, 'question_19');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_19" value="2" class="required" onchange="getVals(this, 'question_19');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_19" value="3" class="required" onchange="getVals(this, 'question_19');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_19" value="4" class="required" onchange="getVals(this, 'question_19');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>10. Apakah pernah mengurus perkara melalui Hakim / Panitera / Staff Pengadilan diluar persidangan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_20" value="1" class="required" onchange="getVals(this, 'question_20');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_20" value="2" class="required" onchange="getVals(this, 'question_20');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_20" value="3" class="required" onchange="getVals(this, 'question_20');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_20" value="4" class="required" onchange="getVals(this, 'question_20');">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<div class="submit step">
									<h3 class="main_question"><strong>4/4</strong>Summary</h3>
									<div class="summary">
										<ul>
											<li><strong></strong>
												<h5>Apakah anda yakin akan menyimpan jawaban?</h5>
											</li>
										</ul>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
								<button type="button" name="forward" class="forward">Next</button>
								<button type="submit" name="process" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/file-validator.js"></script>
	<script src="js/pw_strenght.js"></script>

	<!-- Wizard script -->
	<script src="js/registration_func.js"></script>

	<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "9XwwgTuanQ");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
	<script src="https://code.responsivevoice.org/responsivevoice.js?key=4rEZkvgc"></script>

	<script>
		$('.radio1').change(function() {
  		$('#lainnya1').prop('disabled', !$(this).is('.other1'));
  		$('#lainnya1').prop('required', $(this).is('.other1'));
		});
	</script>
	<script>
		$('.radio2').change(function() {
  		$('#lainnya2').prop('disabled', !$(this).is('.other2'));
		$('#lainnya2').prop('required', $(this).is('.other2'));
		});
	</script>
	<script>
		$('.radio3').change(function() {
  		$('#lainnya3').prop('disabled', !$(this).is('.other3'));
		$('#lainnya3').prop('required', $(this).is('.other3'));
		});
	</script>
	<script>
		$('.radio4').change(function() {
  		$('#lainnya4').prop('disabled', !$(this).is('.other4'));
		$('#lainnya4').prop('required', $(this).is('.other4'));
		});
	</script>
	<script>
		$('.radio5').change(function() {
  		$('#lainnya5').prop('disabled', !$(this).is('.other5'));
		$('#lainnya5').prop('required', $(this).is('.other5'));
		});
	</script>
</body>
</html>