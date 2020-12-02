<?php

require 'ketnoi.php';
//lựa chọn máy chủ mysql
$db = mysqli_select_db($ketnoi, 'test');
if($db==null){
echo '<br>Không chọn được database';
}
$a = $_GET['MASP'];
$sqll="DELETE from spmoi where MASP ='$a'" or die("Lỗi truy vấn!");
if($ketnoi->query($sqll)===true)
{
    echo"đúng con mịa";
    header("location: admin.php");
}
else{
    echo"lỗi thêm dữ liệu".$ketnoi->error;
}
$ketnoi->close();

?>
