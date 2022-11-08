<?php 
    @include '../localhost/connect.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM customer WHERE customer_id='$id' ";
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
            เพิ่มข้อมูลลูกค้า
        </div>
        <form action="update_cus.php" method="POST">
            <label>รหัสลูกค้า</label>
            <input type="text" value="<?=$row['customer_id']?>" name="customer_id" class="form-control mb-4" readonly>
            <label>ชื่อจริง</label>
            <input type="text" value="<?=$row['first_name']?>" name="first_name" class="form-control mb-4">
            <label>นามสกุล</label>
            <input type="text" value="<?=$row['last_name']?>" name="last_name" class="form-control mb-4">
            <label>ชื่อผู้ใช้</label>
            <input type="text" value="<?=$row['username']?>" name="username" class="form-control mb-4">
            <label>อีเมล</label>
            <input type="email" value="<?=$row['email']?>" name="email" class="form-control mb-4">
            <div class="float-end">
                <button type="submit" name="submit" class="btn btn-primary mt-4 mb-4">submit</button>
                <button type="submit" class="btn btn-danger ms-2">
                    <a class="text-white text-decoration-none" href="book_table.php">Cancel</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>