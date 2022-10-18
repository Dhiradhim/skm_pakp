<?php
include "koneksi.php";
$jenis_kelamin=$_POST['jenis_kelamin'];
$pendidikan=$_POST['pendidikan'];
$pekerjaan=$_POST['pekerjaan'];
$usia=$_POST['usia'];
if ($pekerjaan=='lainnya'){
    $pekerjaan=$_POST['pekerjaan_lainnya'];
}
$pihak=$_POST['pihak'];
if ($pihak=='lainnya'){
    $pihak=$_POST['pihak_lainnya'];
}
$keterkaitan=$_POST['keterkaitan'];
if ($keterkaitan=='lainnya'){
    $keterkaitan=$_POST['keterkaitan_lainnya'];
}
$instansi=$_POST['instansi'];
$jenis_layanan=$_POST['jenis_layanan'];
if ($jenis_layanan=='lainnya'){
    $jenis_layanan=$_POST['jenis_layanan_lainnya'];
}
$suku_bangsa=$_POST['suku_bangsa'];
if ($suku_bangsa=='lainnya'){
    $suku_bangsa=$_POST['suku_bangsa_lainnya'];
}
$question_1=$_POST['question_1'];
$question_2=$_POST['question_2'];
$question_3=$_POST['question_3'];
$question_4=$_POST['question_4'];
$question_5=$_POST['question_5'];
$question_6=$_POST['question_6'];
$question_7=$_POST['question_7'];
$question_8=$_POST['question_8'];
$question_9=$_POST['question_9'];
$question_10=$_POST['question_10'];
$question_11=$_POST['question_11'];
$question_12=$_POST['question_12'];
$question_13=$_POST['question_13'];
$question_14=$_POST['question_14'];
$question_15=$_POST['question_15'];
$question_16=$_POST['question_16'];
$question_17=$_POST['question_17'];
$question_18=$_POST['question_18'];
$question_19=$_POST['question_19'];
$question_20=$_POST['question_20'];


$query = "INSERT into responden (jenis_kelamin,pendidikan,pekerjaan,usia,pihak,keterkaitan,instansi,jenis_layanan,suku_bangsa,question_1,question_2,question_3,question_4,question_5,question_6,question_7,question_8,question_9,question_10,question_11,question_12,question_13,question_14,question_15,question_16,question_17,question_18,question_19,question_20) values ('$jenis_kelamin','$pendidikan','$pekerjaan','$usia','$pihak','$keterkaitan','$instansi','$jenis_layanan','$suku_bangsa','$question_1','$question_2','$question_3','$question_4','$question_5','$question_6','$question_7','$question_8','$question_9','$question_10','$question_11','$question_12','$question_13','$question_14','$question_15','$question_16','$question_17','$question_18','$question_19','$question_20')";
$sql=mysqli_query($con, $query);
//echo $query;
echo '<script type="text/javascript">alert("Data anda sudah tersimpan, terimakasih."); </script>';
echo '<script>window.location.href="index.php"</script>';
?>

