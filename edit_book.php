<?php 
    @include 'connect.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM book WHERE book_id='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container">
        <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert">
            แก้ไขข้อมูลสินค้า 
        </div>
        <form action="update_book.php" method="POST" enctype="multipart/form-data">
            <label>รหัสสินค้า</label>
            <input class="form-control mb-4" type="text" value="<?=$row['book_id']?>" readonly>
            <label>ชื่อหนังสือ</label>
            <input class="form-control mb-4" type="text" value="<?=$row['book_name']?>">
            <label>ประเภทหนังสือ</label>
            <input class="form-control mb-4" type="text" value="<?=$row['book_type']?>">
            <label>ผู้แต่ง</label>
            <input class="form-control mb-4" type="text" value="<?=$row['book_name_writer']?>">
            <label>ราคา</label>
            <input class="form-control mb-4" type="text" value="<?=$row['price']?>">
            <label>รูปสินค้า</label>
            <input class="form-control mb-4" type="file" value="<?=$row['book_img']?>">
            <button type="submit" class="btn btn-success mt-4 mb-4">Update</button>
            <button type="submit" class="btn btn-danger ms-2">
                <a class="text-white text-decoration-none" href="form_book.php">Cancel</a>
            </button>
        </form>
    </div>
</body>
</html>