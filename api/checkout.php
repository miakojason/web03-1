<?php include_once "./db.php";
sort($_POST['seats']);
$_POST['seats']=serialize($_POST['seats']);
$id=$Orders->max('id')+1;
$_POST['no']=date("Ymd").sprintf("%04d",$id);
$Orders->save($_POST);
echo $_POST['no'];