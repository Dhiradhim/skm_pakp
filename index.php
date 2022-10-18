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
	
	<nav>
		<ul class="cd-primary-nav">
			<li><a href="index.html" class="animated_link">Home</a></li>
			<li><a href="quotation-wizard-version.html" class="animated_link">Quote Version</a></li>
			<li><a href="review-wizard-version.html" class="animated_link">Review Version</a></li>
			<li><a href="registration-wizard-version.html" class="animated_link">Registration Version</a></li>
			<li><a href="about.html" class="animated_link">About Us</a></li>
			<li><a href="contacts.html" class="animated_link">Contact Us</a></li>
		</ul>
	</nav>
	<!-- /menu -->
	
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="index.html" id="logo"><img src="img/logo.png" alt="" width="49" height="35"></a>
					<div id="social">
						<ul>
							<li><a href="#0"><i class="icon-facebook"></i></a></li>
							<li><a href="#0"><i class="icon-twitter"></i></a></li>
							<li><a href="#0"><i class="icon-google"></i></a></li>
							<li><a href="#0"><i class="icon-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img src="img/a.jpg" alt="" class="img-fluid"></figure>
						<h2>SURVEI KEPUASAN MASYARAKAT</h2>
						<h2>DAN</h2>
						<h2>INDEKS PERSEPSI KORUPSI</h2>
						<p>Survei kepuasan masyarakat digunakan untuk mengukur kepuasan masyarakat pengguna layanan di lingkungan Pengadilan Agama Kupang Kelas IA. Indeks persepsi korupsi sebagai wujud dukungan dan peran aktif Pengadilan Agama Kupang Kelas IA dalam kegiatan pencegahan dan pemberantasan korupsi.</p>
						<a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
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
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="jenis_kelamin" onchange="getVals(this, 'jenis_kelamin');">
												<option value="">Jenis Kelamin</option>
												<option value="Laki-Laki">Laki-Laki</option>                    
												<option value="Perempuan">Perempuan</option>                    
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="pendidikan" onchange="getVals(this, 'pendidikan');">
												<option disabled selected value="">Pendidikan</option>
												<option value="sd">SD (Sekolah Dasar)/Sederajat</option>                   
												<option value="smp">SMP (Sekolah Menengah Pertama)/Sederajat</option>                   
												<option value="sma">SMA (Sekolah Menengah Atas)/Sederajat</option>                   
												<option value="diploma">D1/D2/D3/D4 (Diploma)</option>                   
												<option value="s1">S1 (Sarjana)</option>                   
												<option value="s2">S2 (Magister)</option>                   
												<option value="s3">S3 (Doktor)</option>                   
											</select>
										</div>
									</div>
									<div class="form-group">
										<input type="text" name="usia" class="form-control required" placeholder="Usia" onchange="getVals(this, 'usia');">
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="pekerjaan" onchange="getVals(this, 'pekerjaan');">
												<option disabled selected value="">Pekerjaan</option>                             
												<option value="PNS / TNI / POLRI">PNS / TNI / POLRI</option>                             
												<option value="Pegawai Swasta">Pegawai Swasta</option>                             
												<option value="Wiraswasta / Pengusaha">Wiraswasta / Pengusaha</option>                             
												<option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>                             
												<option value="Lainnya">Lainnya</option>                            
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="pihak" onchange="getVals(this, 'pihak');">
												<option disabled selected value="">Untuk Pihak Siapa Saudara/i Menggunakan Layanan?</option>                             
												<option value="Diri Sendiri">Diri Sendiri (Pribadi/Instansi)</option>                             
												<option value="Orang Lain">Orang Lain (Kuasa/Kuasa Hukum/Pengacara)</option>                                                       
											</select>
										</div>
									</div>
									<div class="form-group">
										<input type="text" name="instansi" class="form-control" placeholder="Nama Instansi" onchange="getVals(this, 'instansi');">
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="pihak2" onchange="getVals(this, 'pihak2');">
												<option disabled selected value="">Keterkaitan Saudara/i dengan Layanan Peradilan</option>                             
												<option value="Pemohon / Termohon / Penggugat / Tergugat">Pemohon / Termohon / Penggugat / Tergugat</option>                             
												<option value="Kuasa Hukum / Penasehat Hukum">Kuasa Hukum / Penasehat Hukum</option>                                                       
												<option value="Saksi">Saksi</option>                                                       
												<option value="Lainnya">Lainnya</option>                                                       
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="layanan" onchange="getVals(this, 'layanan');">
												<option disabled selected value="">Jenis Layanan / Keperluan</option>                             
												<option value="Gugatan">Gugatan</option>                             
												<option value="Permohonan">Permohonan</option>                                                       
												<option value="Upaya Hukum">Upaya Hukum (Banding/Kasasi/PK)</option>                                                       
												<option value="Lainnya">Lainnya</option>                                                       
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="suku" onchange="getVals(this, 'suku');">
												<option disabled selected value="">Suku Bangsa</option>                             
												<option value="Alor">Alor</option>                             
												<option value="Flores">Flores</option>                                                     
												<option value="Bajawa">Bajawa</option>                                                     
												<option value="Boti">Boti</option>                                                     
												<option value="Sumba">Sumba</option>                                                     
												<option value="Ende">Ende</option>                                                     
												<option value="Manggarai">Manggarai</option>                                                     
												<option value="Rote">Rote</option>                                                     
												<option value="Lamaholot">Lamaholot</option>                                                     
												<option value="Makassar">Makassar</option>                                                     
												<option value="Bugis">Bugis</option>                                                     
												<option value="Jawa">Jawa</option>                                                     
												<option value="Lainnya">Lainnya</option>                                                     
											</select>
										</div>
									</div>
								</div>
								
								<div class="step">
									<h3 class="main_question"><strong>2/4</strong>Indeks Pelayanan Publik</h3>
									<h3 class="main_question"><strong>1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Sesuai
											<input type="radio" name="question_1[]" value="1" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Sesuai
											<input type="radio" name="question_1[]" value="2" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sesuai
											<input type="radio" name="question_1[]" value="3" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Sesuai
											<input type="radio" name="question_1[]" value="4" class="required" onchange="getVals(this, 'question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<br>
									<h3 class="main_question"><strong>2. Bagaimana sikap petugas dalam memberikan pelayanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Baik
											<input type="radio" name="question_2[]" value="1" class="required" onchange="getVals(this, 'question_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Cukup Baik
											<input type="radio" name="question_2[]" value="2" class="required" onchange="getVals(this, 'question_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Baik
											<input type="radio" name="question_2[]" value="3" class="required" onchange="getVals(this, 'question_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Baik
											<input type="radio" name="question_2[]" value="4" class="required" onchange="getVals(this, 'question_2');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>3. Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Mudah 
											<input type="radio" name="question_3[]" value="1" class="required" onchange="getVals(this, 'question_3');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Mudah
											<input type="radio" name="question_3[]" value="2" class="required" onchange="getVals(this, 'question_3');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Mudah
											<input type="radio" name="question_3[]" value="3" class="required" onchange="getVals(this, 'question_3');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Mudah
											<input type="radio" name="question_3[]" value="4" class="required" onchange="getVals(this, 'question_3');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>4. Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Cepat
											<input type="radio" name="question_4[]" value="1" class="required" onchange="getVals(this, 'question_4');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Cepat
											<input type="radio" name="question_4[]" value="2" class="required" onchange="getVals(this, 'question_4');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Cepat
											<input type="radio" name="question_4[]" value="3" class="required" onchange="getVals(this, 'question_4');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Cepat
											<input type="radio" name="question_4[]" value="4" class="required" onchange="getVals(this, 'question_4');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>5. Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Sesuai
											<input type="radio" name="question_5[]" value="1" class="required" onchange="getVals(this, 'question_5');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Sesuai
											<input type="radio" name="question_5[]" value="2" class="required" onchange="getVals(this, 'question_5');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sesuai
											<input type="radio" name="question_5[]" value="3" class="required" onchange="getVals(this, 'question_5');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Sesuai
											<input type="radio" name="question_5[]" value="4" class="required" onchange="getVals(this, 'question_5');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>6. Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Sangat Mahal
											<input type="radio" name="question_6[]" value="1" class="required" onchange="getVals(this, 'question_6');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Cukup Mahal
											<input type="radio" name="question_6[]" value="2" class="required" onchange="getVals(this, 'question_6');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Mahal
											<input type="radio" name="question_6[]" value="3" class="required" onchange="getVals(this, 'question_6');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Gratis
											<input type="radio" name="question_6[]" value="4" class="required" onchange="getVals(this, 'question_6');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>7. Bagaimana pendapat Saudara tentang kompetensi/ kemampuan petugas dalam pelayanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Kompeten
											<input type="radio" name="question_7[]" value="1" class="required" onchange="getVals(this, 'question_7');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang Kompeten
											<input type="radio" name="question_7[]" value="2" class="required" onchange="getVals(this, 'question_7');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kompeten
											<input type="radio" name="question_7[]" value="3" class="required" onchange="getVals(this, 'question_7');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Kompeten
											<input type="radio" name="question_7[]" value="4" class="required" onchange="getVals(this, 'question_7');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>8. Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak sopan dan ramah
											<input type="radio" name="question_8[]" value="1" class="required" onchange="getVals(this, 'question_8');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Kurang sopan dan ramah
											<input type="radio" name="question_8[]" value="2" class="required" onchange="getVals(this, 'question_8');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sopan dan ramah
											<input type="radio" name="question_8[]" value="3" class="required" onchange="getVals(this, 'question_8');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat sopan dan ramah
											<input type="radio" name="question_8[]" value="4" class="required" onchange="getVals(this, 'question_8');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>9. Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Buruk
											<input type="radio" name="question_9[]" value="1" class="required" onchange="getVals(this, 'question_9');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Cukup
											<input type="radio" name="question_9[]" value="2" class="required" onchange="getVals(this, 'question_9');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Baik
											<input type="radio" name="question_9[]" value="3" class="required" onchange="getVals(this, 'question_9');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sangat Baik
											<input type="radio" name="question_9[]" value="4" class="required" onchange="getVals(this, 'question_9');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>10. Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak Ada
											<input type="radio" name="question_10[]" value="1" class="required" onchange="getVals(this, 'question_10');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Ada tetapi tidak berfungsi
											<input type="radio" name="question_10[]" value="2" class="required" onchange="getVals(this, 'question_10');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Berfungsi kurang maksimal
											<input type="radio" name="question_10[]" value="3" class="required" onchange="getVals(this, 'question_10');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Dikelola dengan baik
											<input type="radio" name="question_10[]" value="4" class="required" onchange="getVals(this, 'question_10');">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>

								<div class="step">
									<h3 class="main_question"><strong>3/4</strong>Indeks Persepsi Anti Korupsi</h3>			
									<h3 class="main_question"><strong>1. Apakah pelayanan oleh petugas di Pengadilan sesuai prosedur dan ketentuan yang berlaku?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak sesuai prosedur
											<input type="radio" name="question_11[]" value="1" class="required" onchange="getVals(this, 'question_11');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang sesuai prosedur
											<input type="radio" name="question_11[]" value="2" class="required" onchange="getVals(this, 'question_11');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering sesuai prosedur
											<input type="radio" name="question_11[]" value="3" class="required" onchange="getVals(this, 'question_11');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Selalu sesuai prosedur
											<input type="radio" name="question_11[]" value="4" class="required" onchange="getVals(this, 'question_11');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>2. Apakah dalam memperoleh layanan Pengadilan secara cepat dan mudah ada penyalahgunaan jabatan dari petugas untuk meminta imbalan tertentu?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">petugas melayani selalu meminta imbalan
											<input type="radio" name="question_12[]" value="1" class="required" onchange="getVals(this, 'question_12');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">petugas melayani sering meminta imbalan
											<input type="radio" name="question_12[]" value="2" class="required" onchange="getVals(this, 'question_12');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">petugas melayani jarang meminta imbalan
											<input type="radio" name="question_12[]" value="3" class="required" onchange="getVals(this, 'question_12');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">petugas melayani tanpa meminta imbalan
											<input type="radio" name="question_12[]" value="4" class="required" onchange="getVals(this, 'question_12');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>3. Pernahkah dihubungi oleh seseorang ( karyawan Pengadilan ) yang akan membantu dalam pengurusan surat / berkas perkara?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_13[]" value="1" class="required" onchange="getVals(this, 'question_13');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_13[]" value="2" class="required" onchange="getVals(this, 'question_13');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_13[]" value="3" class="required" onchange="getVals(this, 'question_13');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_13[]" value="4" class="required" onchange="getVals(this, 'question_13');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>4. Apakah selalu mudah dalam mendapatkan informasi tentang tarif/biaya baik melalui website ataupun petugas layanan di Pengadilan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak pernah
											<input type="radio" name="question_14[]" value="1" class="required" onchange="getVals(this, 'question_14');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_14[]" value="2" class="required" onchange="getVals(this, 'question_14');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_14[]" value="3" class="required" onchange="getVals(this, 'question_14');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_14[]" value="4" class="required" onchange="getVals(this, 'question_14');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>5. Apakah di Pengadilan selalu membayar sesuai tarif resmi tanpa ada biaya tambahan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak pernah
											<input type="radio" name="question_15[]" value="1" class="required" onchange="getVals(this, 'question_15');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_15[]" value="2" class="required" onchange="getVals(this, 'question_15');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_15[]" value="3" class="required" onchange="getVals(this, 'question_15');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_15[]" value="4" class="required" onchange="getVals(this, 'question_15');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>6. Apakah memberikan tanda terima kasih atas layanan yang diterima di Pengadilan ( meskipun tidak diminta )?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_16[]" value="1" class="required" onchange="getVals(this, 'question_16');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_16[]" value="2" class="required" onchange="getVals(this, 'question_16');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_16[]" value="3" class="required" onchange="getVals(this, 'question_16');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_16[]" value="4" class="required" onchange="getVals(this, 'question_16');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>7. Apakah menerima bukti transaksi keuangan / pembayaran yang sah setelah proses pembayaran di Pengadilan dilakukan? ( Untuk pelayanan yang dipungut biaya / PNBP )</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Tidak pernah
											<input type="radio" name="question_17[]" value="1" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_17[]" value="2" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_17[]" value="3" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_17[]" value="4" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>8. Apakah pernah mengetahui ada praktek percaloan dalam pengurusan layanan di Pengadilan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_18[]" value="1" class="required" onchange="getVals(this, 'question_18');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_18[]" value="2" class="required" onchange="getVals(this, 'question_18');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_18[]" value="3" class="required" onchange="getVals(this, 'questiquestion_18on_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_18[]" value="4" class="required" onchange="getVals(this, 'question_18');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>9. Apakah pernah melihat dan atau mendengar masih terjadi praktek KKN di Pengadilan ?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_19[]" value="1" class="required" onchange="getVals(this, 'question_19');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_19[]" value="2" class="required" onchange="getVals(this, 'question_19');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_19[]" value="3" class="required" onchange="getVals(this, 'question_19');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_19[]" value="4" class="required" onchange="getVals(this, 'question_19');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>10. Apakah pernah mengurus perkara melalui Hakim / Panitera / Staff Pengadilan diluar persidangan?</strong></h3>
									<div class="form-group">
										<label class="container_check version_2">Selalu
											<input type="radio" name="question_20[]" value="1" class="required" onchange="getVals(this, 'question_20');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Sering
											<input type="radio" name="question_20[]" value="2" class="required" onchange="getVals(this, 'question_20');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Jarang
											<input type="radio" name="question_20[]" value="3" class="required" onchange="getVals(this, 'question_20');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">Tidak ada
											<input type="radio" name="question_20[]" value="4" class="required" onchange="getVals(this, 'question_20');">
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

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->
	
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
	<script src="js/quotation_func.js"></script>
	<script src="js/registration_func.js"></script>

	<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "9XwwgTuanQ");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
	<script src="https://code.responsivevoice.org/responsivevoice.js?key=4rEZkvgc"></script>

</body>
</html>