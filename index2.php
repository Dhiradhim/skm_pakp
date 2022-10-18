<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Wilio | Survey, Quotation, Review and Register form Wizard</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
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
						<figure><img src="img/info_graphic_5.svg" alt="" class="img-fluid"></figure>
						<h2>Review Wizard</h2>
						<p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel. Adhuc invidunt duo ex. Eu tantas dolorum ullamcorper qui.</p>
						<a href="#0" class="btn_1 rounded">Purchase this template</a>
						<a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
					</div>
					<div class="copy">© 2018 Wilio</div>
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
						<form id="wrapped" method="POST">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
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
								<h3 class="main_question"><strong>3/4</strong>Indeks Pelayanan Publik</h3>			
									<h3 class="main_question"><strong>11. Apakah pelayanan oleh petugas di Pengadilan sesuai prosedur dan ketentuan yang berlaku?</strong></h3>
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

									<h3 class="main_question"><strong>12. Apakah dalam memperoleh layanan Pengadilan secara cepat dan mudah ada penyalahgunaan jabatan dari petugas untuk meminta imbalan tertentu?</strong></h3>
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

									<h3 class="main_question"><strong>13. Pernahkah dihubungi oleh seseorang ( karyawan Pengadilan ) yang akan membantu dalam pengurusan surat / berkas perkara?</strong></h3>
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

									<h3 class="main_question"><strong>14. Apakah selalu mudah dalam mendapatkan informasi tentang tarif/biaya baik melalui website ataupun petugas layanan di Pengadilan?</strong></h3>
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

									<h3 class="main_question"><strong>15. Apakah di Pengadilan selalu membayar sesuai tarif resmi tanpa ada biaya tambahan?</strong></h3>
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

									<h3 class="main_question"><strong>16. Apakah memberikan tanda terima kasih atas layanan yang diterima di Pengadilan ( meskipun tidak diminta )?</strong></h3>
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

									<h3 class="main_question"><strong>17. Apakah menerima bukti transaksi keuangan / pembayaran yang sah setelah proses pembayaran di Pengadilan dilakukan? ( Untuk pelayanan yang dipungut biaya / PNBP )</strong></h3>
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
											<input type="radio" name="question_1700[]" value="4" class="required" onchange="getVals(this, 'question_17');">
											<span class="checkmark"></span>
										</label>
									</div>

									<h3 class="main_question"><strong>18. Apakah pernah mengetahui ada praktek percaloan dalam pengurusan layanan di Pengadilan?</strong></h3>
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

									<h3 class="main_question"><strong>19. Apakah pernah melihat dan atau mendengar masih terjadi praktek KKN di Pengadilan ?</strong></h3>
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

									<h3 class="main_question"><strong>20. Apakah pernah mengurus perkara melalui Hakim / Panitera / Staff Pengadilan diluar persidangan?</strong></h3>
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
								<div class="step">
									<h3 class="main_question"><strong>4/8</strong>Indeks Pelayanan Publik</h3>
									<div class="form-group rating_wp clearfix">
												<label class="rating_type">9. Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-9-4" name="rating_input_9" value="4 Stars" onchange="getVals(this, 'rating_input_9');">
												<label for="rating-input-9-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-9-3" name="rating_input_9" value="3 Stars" onchange="getVals(this, 'rating_input_9');">
												<label for="rating-input-9-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-9-2" name="rating_input_9" value="2 Stars" onchange="getVals(this, 'rating_input_9');">
												<label for="rating-input-9-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-9-1" name="rating_input_9" value="1 Star" onchange="getVals(this, 'rating_input_9');">
												<label for="rating-input-9-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">10. Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-10-4" name="rating_input_10" value="4 Stars" onchange="getVals(this, 'rating_input_10');">
												<label for="rating-input-10-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-10-3" name="rating_input_10" value="3 Stars" onchange="getVals(this, 'rating_input_10');">
												<label for="rating-input-10-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-10-2" name="rating_input_10" value="2 Stars" onchange="getVals(this, 'rating_input_10');">
												<label for="rating-input-10-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-10-1" name="rating_input_10" value="1 Star" onchange="getVals(this, 'rating_input_10');">
												<label for="rating-input-10-1" class="rating-star"></label>
												</span>
											</div>
								</div>
								
								<div class="step">
									<h3 class="main_question"><strong>5/8</strong>Indeks Pelayanan Anti Korupsi</h3>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">1. Apakah pelayanan oleh petugas di Pengadilan sesuai prosedur dan ketentuan yang berlaku?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-11-4" name="rating_input_11" value="4 Stars" onchange="getVals(this, 'rating_input_11');">
												<label for="rating-input-11-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-11-3" name="rating_input_11" value="3 Stars" onchange="getVals(this, 'rating_input_11');">
												<label for="rating-input-11-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-11-2" name="rating_input_11" value="2 Stars" onchange="getVals(this, 'rating_input_11');">
												<label for="rating-input-11-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-11-1" name="rating_input_11" value="1 Star" onchange="getVals(this, 'rating_input_11');">
												<label for="rating-input-11-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">2. Apakah dalam memperoleh layanan Pengadilan secara cepat dan mudah ada penyalahgunaan jabatan dari petugas untuk meminta imbalan tertentu?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-12-4" name="rating_input_12" value="4 Stars" onchange="getVals(this, 'rating_input_12');">
												<label for="rating-input-12-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-12-3" name="rating_input_12" value="3 Stars" onchange="getVals(this, 'rating_input_12');">
												<label for="rating-input-12-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-12-2" name="rating_input_12" value="2 Stars" onchange="getVals(this, 'rating_input_12');">
												<label for="rating-input-12-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-12-1" name="rating_input_12" value="1 Star" onchange="getVals(this, 'rating_input_12');">
												<label for="rating-input-12-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">3. Pernahkah dihubungi oleh seseorang ( karyawan Pengadilan ) yang akan membantu dalam pengurusan surat / berkas perkara?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-13-4" name="rating_input_13" value="4 Stars" onchange="getVals(this, 'rating_input_13');">
												<label for="rating-input-13-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-13-3" name="rating_input_13" value="3 Stars" onchange="getVals(this, 'rating_input_13');">
												<label for="rating-input-13-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-13-2" name="rating_input_13" value="2 Stars" onchange="getVals(this, 'rating_input_13');">
												<label for="rating-input-13-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-13-1" name="rating_input_13" value="1 Star" onchange="getVals(this, 'rating_input_13');">
												<label for="rating-input-13-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">4. Apakah selalu mudah dalam mendapatkan informasi tentang tarif/biaya baik melalui website ataupun petugas layanan di Pengadilan?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-14-4" name="rating_input_14" value="4 Stars" onchange="getVals(this, 'rating_input_14');">
												<label for="rating-input-14-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-14-3" name="rating_input_14" value="3 Stars" onchange="getVals(this, 'rating_input_14');">
												<label for="rating-input-14-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-14-2" name="rating_input_14" value="2 Stars" onchange="getVals(this, 'rating_input_14');">
												<label for="rating-input-14-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-14-1" name="rating_input_14" value="1 Star" onchange="getVals(this, 'rating_input_14');">
												<label for="rating-input-14-1" class="rating-star"></label>
												</span>
											</div>
								</div>
								
								<div class="step">
									<h3 class="main_question"><strong>6/8</strong>Indeks Pelayanan Anti Korupsi</h3>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">5. Apakah di Pengadilan selalu membayar sesuai tarif resmi tanpa ada biaya tambahan?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-15-4" name="rating_input_15" value="4 Stars" onchange="getVals(this, 'rating_input_15');">
												<label for="rating-input-15-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-15-3" name="rating_input_15" value="3 Stars" onchange="getVals(this, 'rating_input_15');">
												<label for="rating-input-15-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-15-2" name="rating_input_15" value="2 Stars" onchange="getVals(this, 'rating_input_15');">
												<label for="rating-input-15-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-15-1" name="rating_input_15" value="1 Star" onchange="getVals(this, 'rating_input_15');">
												<label for="rating-input-15-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">6. Apakah memberikan tanda terima kasih atas layanan yang diterima di Pengadilan ( meskipun tidak diminta )?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-16-4" name="rating_input_16" value="4 Stars" onchange="getVals(this, 'rating_input_16');">
												<label for="rating-input-16-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-16-3" name="rating_input_16" value="3 Stars" onchange="getVals(this, 'rating_input_16');">
												<label for="rating-input-16-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-16-2" name="rating_input_16" value="2 Stars" onchange="getVals(this, 'rating_input_16');">
												<label for="rating-input-16-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-16-1" name="rating_input_16" value="1 Star" onchange="getVals(this, 'rating_input_16');">
												<label for="rating-input-16-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">7. Apakah menerima bukti transaksi keuangan / pembayaran yang sah setelah proses pembayaran di Pengadilan dilakukan ? ( Untuk pelayanan yang dipungut biaya / PNBP )</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-17-4" name="rating_input_17" value="4 Stars" onchange="getVals(this, 'rating_input_17');">
												<label for="rating-input-17-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-17-3" name="rating_input_17" value="3 Stars" onchange="getVals(this, 'rating_input_17');">
												<label for="rating-input-17-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-17-2" name="rating_input_17" value="2 Stars" onchange="getVals(this, 'rating_input_17');">
												<label for="rating-input-17-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-17-1" name="rating_input_17" value="1 Star" onchange="getVals(this, 'rating_input_17');">
												<label for="rating-input-17-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">8. Apakah pernah mengetahui ada praktek percaloan dalam pengurusan layanan di Pengadilan?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-18-4" name="rating_input_18" value="4 Stars" onchange="getVals(this, 'rating_input_18');">
												<label for="rating-input-18-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-18-3" name="rating_input_18" value="3 Stars" onchange="getVals(this, 'rating_input_18');">
												<label for="rating-input-18-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-18-2" name="rating_input_18" value="2 Stars" onchange="getVals(this, 'rating_input_18');">
												<label for="rating-input-18-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-18-1" name="rating_input_18" value="1 Star" onchange="getVals(this, 'rating_input_18');">
												<label for="rating-input-18-1" class="rating-star"></label>
												</span>
											</div>
								</div>

								<div class="step">
									<h3 class="main_question"><strong>7/8</strong>Indeks Pelayanan Anti Korupsi</h3>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">9. Apakah pernah melihat dan atau mendengar masih terjadi praktek KKN di Pengadilan?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-19-4" name="rating_input_19" value="4 Stars" onchange="getVals(this, 'rating_input_19');">
												<label for="rating-input-19-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-19-3" name="rating_input_19" value="3 Stars" onchange="getVals(this, 'rating_input_19');">
												<label for="rating-input-19-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-19-2" name="rating_input_19" value="2 Stars" onchange="getVals(this, 'rating_input_19');">
												<label for="rating-input-19-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-19-1" name="rating_input_19" value="1 Star" onchange="getVals(this, 'rating_input_19');">
												<label for="rating-input-19-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group rating_wp clearfix">
												<label class="rating_type">10. Apakah pernah mengurus perkara melalui Hakim / Panitera / Staff Pengadilan diluar persidangan?</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-20-4" name="rating_input_20" value="4 Stars" onchange="getVals(this, 'rating_input_20');">
												<label for="rating-input-20-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-20-3" name="rating_input_20" value="3 Stars" onchange="getVals(this, 'rating_input_20');">
												<label for="rating-input-20-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-20-2" name="rating_input_20" value="2 Stars" onchange="getVals(this, 'rating_input_20');">
												<label for="rating-input-20-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-20-1" name="rating_input_20" value="1 Star" onchange="getVals(this, 'rating_input_20');">
												<label for="rating-input-20-1" class="rating-star"></label>
												</span>
											</div>
								</div>

								<div class="step">
									<h3 class="main_question"><strong>8/8</strong>Your review and comments</h3>
									<div class="form-group add_top_30">
										<textarea name="review_message" class="form-control review_message required" placeholder="Write your review here..." onkeyup="getVals(this, 'review_message');"></textarea>
									</div>
								</div>

								<div class="step">
									<h3 class="main_question"><strong>4/5</strong>Please fill with your details</h3>
									<div class="form-group">
										<input type="text" name="firstname" class="form-control required" placeholder="First Name">
									</div>
									<div class="form-group">
										<input type="text" name="lastname" class="form-control required" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control required" placeholder="Your Email">
									</div>
									<div class="form-group">
										<input type="text" name="telephone" class="form-control" placeholder="Telephone">
									</div>
									<div class="form-group terms">
										<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
											<input type="checkbox" name="terms" value="Yes" class="required">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<!-- /step-->
								<div class="submit step">
									<h3 class="main_question"><strong>5/5</strong>Summary</h3>
									<div class="summary">
										<ul>
											<li><strong>1</strong>
												<h5>How do you describe your overall satisfaction?</h5>
												<ul>
													<li><label>Service provided</label> <span id="rating_input_1" class="float-right"></span></li>
													<li><label>Product's quality</label> <span id="rating_input_2" class="float-right"></span></li>
													<li><label>Support</label> <span id="rating_input_3" class="float-right"></span></li>
													<li><label>General satisfaction</label> <span id="rating_input_4" class="float-right"></span></li>
												</ul>
											</li>
											<li><strong>2</strong>
												<h5>Your review and comments</h5>
												<p id="review_message"></p>
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

	<!-- Wizard script -->
	<script src="js/review_func.js"></script>

	<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "9XwwgTuanQ");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

</body>
</html>