<?php include_once "./db.php";
$movie=$_POST['movie'];
$movieName=$Movie->find($movie)['name'];
$date=$_POST['table'];
$H=date("G");
$start=($H>=14 && $date==date("Y-m-d"))?7-ceil((24-$H)/2):1;
for($i=$start;$i<=5;$i++){
    $qt=$Order->sum('qt',['movie'=>$movieName,'date'=>$date,'sessioin'=>$sess[$i]]);
    $lave=20-$qt;
    echo "<option value='{$sess[$i]}'>{$sess[$i]}剩餘座位$lave</option>";
}
?>
<!-- <option value=""></option> -->