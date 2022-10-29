<?php @include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="h4 text-center alert alert-primary mb-4 mt-4" role="alert">
            เพิ่มข้อมูลหนังสือ
        </div>
        <form action="insert_book.php" method="POST" enctype="multipart/form-data">
            <label for="">ชื่อหนังสือ</label>
            <input type="text" name="book_name" class="form-control mb-4" placeholder="ชื่อหนังสือ">
            <label for="">ชนิดหนังสือ</label>
            <input type="text" name="book_type" class="form-control mb-4" placeholder="ประเภทหนังสือ">
            <label for="">ชื่อผู้แต่ง</label>
            <input type="text" name="book_name_writer" class="form-control mb-4" placeholder="ผู้แต่ง">
            <label for="">ราคา</label>
            <input type="text" name="price" class="form-control mb-4" placeholder="000.00">
            <label for="" class="mb-2">รูปหนังสือ</label>
            <input type="file" name="book_img" class="form-control">
            <div class="float-end">
                <button type="submit" name="submit" class="btn btn-primary mt-4 mb-4">submit</button>
                <button type="submit" class="btn btn-danger ms-2">
                    <a class="text-white text-decoration-none" href="#">Cancel</a>
                </button>
            </div>
        </form>
    </div>
</body>
</html>