<?php  
session_start();  
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login" background="images/bg.jpg">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required />
              </div>
              <div>
              <select class="form-control col-md-5" name="tahun" required>
													<option value="" hidden>Pilih Tahun</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
							</select>
              <br>
              <br>
              </div>
              <br>
              <div>
                <input class="btn btn-dark submit" type="submit" value="Login" name="login">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2022 - SKM IPAK Pengadilan Agama Kupang</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

<?php     
include("../koneksi.php");  
  
if(isset($_POST['login']))  
{  
    $username=$_POST['username'];  
    $password=md5($_POST['password']);   
    $sql = "select *, count(*) as data from user WHERE username='$username' AND password='$password'";
    $run =  mysqli_query($con, $sql);  
	  $xrun = mysqli_fetch_assoc($run);
    $count = $xrun['data'];

    if($count > 0)  
    {
      echo "<script>alert('Login Berhasil')</script>";
      $_SESSION['username']=$xrun['username'];
      $_SESSION['tahun']=$_POST['tahun'];
      
      echo "<script>window.open('index.php','_self')</script>";  
    }  
    else  
    {  
      echo "<script>alert('Username atau Password SALAH!')</script>";
      echo "<script>window.history.back()</script>";  
      // echo $sql;
    }  
}  
?>  