<?php
    $servername = "127.0.0.1:3325";
    $username = "root";
	$password ="";
	$ketnoi = new mysqli($servername,$username,$password);
if($ketnoi->connect_error){
    die("loi ket noi:". $ketnoi->connect_error);
}
echo"kết nối thành công";
?>
