<?php
    require 'ketnoi.php';
    //lựa chọn máy chủ mysql
    $db = mysqli_select_db($ketnoi, 'test');
if($db==null){
    echo '<br>Không chọn được database';
}
$sql = "select * from spmoi";
$rp = $ketnoi->query($sql);
?>
<h1>Danh sách sản phẩm</h1>
<table border="2">
    <tr>
        <th>MÃ SẢN PHẨM</th>
        <th>Tên sản phẩm</th>
        <th>giá sản phẩm</th>
        <th>hình ảnh</th>
        <th>số lượng</th>
        <th>ngày nhập</th>
        <th>chức năng<th>
    </tr>
    
    <?php
    while($rs=$rp->fetch_assoc()){
            echo"<tr>";
                echo"<td>".$rs["MASP"]."</td>";
                echo"<td>".$rs["TENSP"]."</td>";
                echo"<td>".$rs["GIASP"]."</td>";
                echo"<td>".$rs["HINHANH"]."</td>";
                echo"<td>".$rs["SOLUONG"]."</td>";
                echo"<td>".$rs["NGAYNHAP"]."</td>";
                echo"<td><a href='them.php'>Thêm</a> | <a href='sua.php?MASP=".$rs['MASP']."'>Sửa</a> | <a href='xoa.php?MASP=".$rs['MASP']."'>Xóa</a> ";
            echo"</tr>";
        }
    ?>


    
</table>