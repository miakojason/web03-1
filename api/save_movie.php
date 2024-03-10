<?php include_once "./db.php";
if (isset($_FILES['trailer']['tmp_name'])) {
    move_uploaded_file($_FILES['trailer']['tmp_name'], "../img/" . $_FILES['trailer']['name']);
    $_POST['img'] = $_FILES['trailer']['name'];
}
if (isset($_FILES['poster']['tmp_name'])) {
    move_uploaded_file($_FILES['poster']['tmp_name'], "../img/" . $_FILES['poster']['name']);
    $_POST['img'] = $_FILES['poster']['name'];
}
$_POST['ondate'] = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
unset($_POST['year'],$_POST['month'],$_POST['day']);
if(!isset($_POST['id'])){
$_POST['rank']=$Movie->max('id')+1;
}
$Movie->save($_POST);
to("../back.php?do=movie");