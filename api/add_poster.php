<?php include_once "./db.php";
if (isset($_FILES['poster']['tmp_name'])) {
    move_uploaded_file($_FILES['poster']['tmp_name'], "../img/" . $_FILES['poster']['name']);
    $_POST['img'] = $_FILES['poster']['name'];
}
$_POST['rank'] = $Poster->max('id');
$_POST['ani'] = rand(1, 3);
$Poster->save($_POST);
to("../back.php?do=poster");
