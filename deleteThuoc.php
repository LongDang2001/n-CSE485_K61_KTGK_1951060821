<?php
    $conn = mysqli_connect('localhost', 'root', '', 'QuanLyThuoc');
    if (!$conn) {
        die("Không thể kết nối");
    }
    
    $id = $_GET['id'];
    // select  den table cua employee va xoa du lieu
    $sql = "DELETE FROM drugs where id = $id ";
    $resuld = mysqli_query($conn, $sql);

    if($resuld == true) {
        echo "Da Xoa Duoc ";
        header('location: index.php');
    } else {
        echo " Ko xoa Dc";
        header('location: index.php');
    }


?>