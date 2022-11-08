<?php 
    @include '../localhost/connect.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM orders WHERE order_id='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="h4 text-center alert alert-primary mb-4 mt-4" role="alert">
            แก้ไขข้อมูลออเดอร์
        </div>
        <form action="update_order.php" method="POST">
            <label>รหัสรายการสั่งซื้อ</label>
            <input type="text" value="<?=$row['order_id']?>" name="order_id" class="form-control mb-4" readonly>
            <label>ชื่อ - นามสกุล</label>
            <input type="text" value="<?=$row['cus_name']?>" name="cus_name" class="form-control mb-4">
            <label>ที่อยู่</label>
            <input type="text" value="<?=$row['address']?>" name="address" class="form-control mb-4">
            <label>เบอร์โทรศัพท์</label>
            <input type="text" value="<?=$row['phone']?>" name="phone" class="form-control mb-4">
            <label>ราคารวม</label>
            <input type="text" value="<?=$row['total_price']?>" name="total_price" class="form-control mb-4">
            <label>สถานะ</label>
            <input type="text" value="<?=$row['status']?>" name="status" class="form-control mb-4">
            <label>วัน / เวลา สั่งซื้อ</label>
            <input type="text" value="<?=$row['date']?>" name="date" class="form-control mb-4">
                <button type="submit" name="submit" class="btn btn-primary mt-4 mb-4">submit</button>
                <button type="submit" class="btn btn-danger ms-2">
                    <a class="text-white text-decoration-none" href="orders_table.php">Cancel</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>