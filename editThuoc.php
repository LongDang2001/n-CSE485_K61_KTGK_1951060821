<main class="container">
    <h2> Update Thuoc </h2>

    <?php
    // ket noi toi server de hien thi du lieu: 
    include 'config.php';
    $id = $_GET['id']; // nho la dau ngoac vuong 

    $sql = "SELECT * FROM drugs where id = $id";
    // cach de hien thi hac voi echo: 
    $resuld = mysqli_query($conn, $sql);
    if ($resuld == true) {
        $count = mysqli_num_rows($resuld);
        if (mysqli_num_rows($resuld) == 1) {
            $row = mysqli_fetch_assoc($resuld);

            $name = $row['name'];
            $type = $row['type'];
            $code = $row['code'];
            $cost_price = $row['cost_price'];
            $selling_price = $row['selling_price'];
            $company_name = $row['company_name'];
            $production_date = $row['production_date'];
            $expiration_date = $row['expiration_date'];
            $place = $row['place'];
            $quantity = $row['quantity'];
        } else {
            header('location: index.php');
        }
    }

    ?>

    <form action="" method="POST">
        <table>
            <tr>
                <td> Ten Thuoc </td>
                <th>
                    <input type="text" name="name_thuoc" value="<?php echo $name ?>">
                </th>
            </tr>

            <tr>
                <td> Loại Thuốc </td>
                <th>
                    <input type="text" name="type_thuoc" value="<?php echo $type ?>">
                </th>
            </tr>

            <tr>
                <td> Ma Code</td>
                <th>
                    <input type="text" name="code" value="<?php echo $code ?>">
                </th>
            </tr>

            <tr>
                <td> cost price </td>
                <th>
                    <input type="text" name="cost_price" value="<?php echo $cost_price ?>">
                </th>
            </tr>

            <tr>
                <td> selling price </td>
                <th>
                    <input type="text" name="selling_price" value="<?php echo $selling_price ?>">
                </th>
            </tr>
            <tr>
                <td> company name </td>
                <th>
                    <input type="text" name="company_name" value="<?php echo $company_name ?>">
                </th>
            </tr>
            <tr>
                <td> production date </td>
                <th>
                    <input type="text" name="production_date" value="<?php echo $production_date ?>">
                </th>
            </tr>

            <tr>
                <td> place </td>
                <th>
                    <input type="text" name="place" value="<?php echo $place ?>">
                </th>
            </tr>

            <tr>
                <td> quantity </td>
                <th>
                    <input type="text" name="quantity" value="<?php echo $quantity ?>">
                </th>
            </tr>


            <tr>
                <td>
                    <input type="hidden" name="ids" value="<?php echo $id; ?>">
                    <input type="submit" name="submit" value="update Admin" class="btn btn-primary bg-primary">
                </td>
            </tr>
        </table>

    </form>
</main>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $code = $_POST['code'];
    $cost_price = $_POST['cost_price'];
    $selling_price = $_POST['selling_price'];
    $company_name = $_POST['company_name'];
    $production_date = $_POST['production_date'];
    $expiration_date = $_POST['expiration_date'];
    $place = $_POST['place'];
    $quantity = $_POST['quantity'];


    $sql = "UPDATE drugs SET

        name_thuoc = '$name',
        type_thuoc= '$type',
        code = '$code',
        cost_price = '$cost_price',
        selling_price = '$selling_price',
        company_name = '$company_name',
        production_date= '$production_date',
        expiration_date = '$expiration_date',
        place= '$place',
        quantity = '$quantity' ";
       

    $resuld = mysqli_query($conn, $sql);

    if ($resuld == true) {
        header('location: index.php');
    } else {

        header('location: index.php');
    }
}

?>