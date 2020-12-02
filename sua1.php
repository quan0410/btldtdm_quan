<?php
require 'ketnoi.php';
//lựa chọn máy chủ mysql
$db = mysqli_select_db($ketnoi, 'test');
if($db==null){
echo '<br>Không chọn được database';
}
$a = $_POST['masp'];
$b = $_POST['tensp'];
$c = $_POST['giasp'];
$d = $_POST['hinhanh'];
$e = $_POST['soluong'];
$f = $_POST['ngaynhap'];
$sqll="UPDATE spmoi SET MASP ='$a', TENSP='$b',GIASP='$c',HINHANH='$d',SOLUONG='$e',NGAYNHAP='$f' where MASP='$a'" or die("Lỗi truy vấn!");
if($ketnoi->query($sqll)===true)
{
    header("location: admin.php");
}
else{
    echo"lỗi thêm dữ liệu".$ketnoi->error;
}
$ketnoi->close();

?>
