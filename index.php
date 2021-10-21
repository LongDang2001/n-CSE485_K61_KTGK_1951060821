<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <br> <br>
    <a href="addThuoc.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm Thuốc</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"> Tên loại thuôc </th>
                <th scope="col">Loại thuốc </th>
                <th scope="col">Mã Thuốc</th>
                <th scope="col">Giá mua vào </th>
                <th scope="col">Giá bán ra </th>
                <th scope="col">Tên công ty</th>
                <th scope="col">Ngày sản xuất </th>
                <th scope="col">Ngày hết hạn </th>
                <th scope="col"> Noi Sản xuất </th>
                <th scope="col"> Số lượng </th>
            </tr>
        </thead>
        <tbody>
            <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            <?php
            // Quy trình 4 bước
            // Bước 01: Đã tạo sẵn, gọi lại thôi
            
            // 1. Kết nối DB Server
            $conn = mysqli_connect('localhost', 'root', '', 'QuanLyThuoc');
            if (!$conn) {
                die("Không thể kết nối");
            }
            // Bước 02: Thực hiện TRUY VẤN
            $sql = "SELECT * FROM drugs";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['name'] . '</th>';
                    echo '<td>' . $row['type'] . '</td>';
                    echo '<td>' . $row['code'] . '</td>';
                    echo '<td>' . $row['cost_price'] . '</td>';
                    echo '<td>' . $row['selling_price'] . '</td>';
                    echo '<td>' . $row['company_name'] . '</td>';
                    echo '<td>' . $row['production_date'] .'</td>';
                    echo '<td>' . $row['expiration_date'] . '</td>';
                    echo '<td>' . $row['place'] . '</td>';
                    echo '<td>' . $row['quantity'] . '</td>';
                    echo '<td><a href="editThuoc.php?id=' . $row['id'] . '">  Sua Thuoc </a> </td>';
                    echo '<td><a href="deleteThuoc.php?id=' . $row['id'] . '"> Xoa Thuoc </a> </td>';

                    
                    echo '</tr>';
                }
            }
            ?>

            <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
        </tbody>
    </table>
    <br> <br>



    <php? ?>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>