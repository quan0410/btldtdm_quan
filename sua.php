<?php
    require 'ketnoi.php';
    //lựa chọn máy chủ mysql
    $db = mysqli_select_db($ketnoi, 'test');
    if($db==null){
    echo '<br>Không chọn được database';
    }
    $a = $_GET['MASP'];
    $sql = "select * from spmoi where MASP='$a'";
    $rp = $ketnoi->query($sql);
    $rs=$rp->fetch_assoc()
?>
    <h1>Cập nhật dữ liệu </h1>
    <form action="sua1.php" method="post">
    Mã sản phẩm: <input type="text" name="masp" value="<?php echo $rs['MASP']; ?>"><br>
    Tên sản phẩm: <input type="text" name="tensp" value="<?php echo $rs['TENSP']; ?>"><br>
    Gía sản phẩm: <input type="text" name="giasp" value="<?php echo $rs['GIASP']; ?>"><br>
    Hình ảnh: <input type="text" name = "hinhanh" value="<?php echo $rs['HINHANH']; ?>"><br>
    Số lượng: <input type="text" name = "soluong" value="<?php echo $rs['SOLUONG']; ?>"><br>
    Ngày nhập: <input type="text" name = "ngaynhap" value="<?php echo $rs['NGAYNHAP']; ?>"><br>
    <input type="submit" value="Cập nhật">
    </form>