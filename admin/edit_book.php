<?php 
    @include '../localhost/connect.php';

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
    <title>BookStore</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container">
        <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert">
            แก้ไขข้อมูลสินค้า 
        </div>
        <form action="update_book.php" method="POST" enctype="multipart/form-data">
            <label>รหัสสินค้า</label>
            <input class="form-control mb-4" type="text" name="book_id" value="<?=$row['book_id']?>" readonly>
            <label>ชื่อหนังสือ</label>
            <input class="form-control mb-4" type="text" name="book_name" value="<?=$row['book_name']?>">
            <label>ประเภทหนังสือ</label>
            <!-- <input class="form-control mb-4" type="text" value="<?=$row['type_name']?>"> -->
            <select name="type_name" class="form-control mb-4">
                <option value="<?=$row['type_name']?>" selected>
                    <?=$row['type_name']?>
                </option>
                <option value="การ์ตูน">การ์ตูน</option>
                <option value="นิยาย">นิยาย</option>
                <option value="เทคโนโลยี">เทคโนโลยี</option>
                <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
                <option value="ภาษาอังกฤษ">ภาษาอังกฤษ</option>
            </select>
            <label>ผู้แต่ง</label>
            <input class="form-control mb-4" type="text" name="name_writer" value="<?=$row['name_writer'];?>" required>
            <label>ราคา / เล่ม</label>
            <input class="form-control mb-4" type="text" name="price" value="<?=$row['price'];?>" required>
            <label>จำนวนที่วางขาย</label>
            <input type="text" name="amount" class="form-control mb-4" placeholder="00000 เล่ม" value="<?=$row['amount'];?>" required>
            <!-- <label>รูปสินค้า</label>
            <input class="form-control mb-4" type="file" value="<?=$row['book_img']?>"> -->
            <div class="float-end">
                <button type="submit" class="btn btn-warning mt-4 mb-4">Update</button>
                <button type="submit" class="btn btn-danger ms-2">
                    <a class="text-white text-decoration-none" href="book_table.php">Cancel</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>