<?php
$host="localhost"; //pemanggilan localhost
$username="root"; // username dalam mysql
$password=""; //password dalam mysql jika ada
$databasename="akademik1"; //nama database
$con=@mysqli_connect($host,$username,$password,$databasename); //membuat koneksi dengan database
if (!$con) { //pengecekan apakah terhubung atau tidak
 echo "Error: " . mysqli_connect_error();
exit();
}
?>