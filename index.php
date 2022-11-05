<?php @include './localhost/connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- navbar -->
    <?php @include 'navbar.php' ?>   
    <div class="container mt-5">
        <!-- slider -->
        <!-- <?php @include 'slider.php'?> -->
        
        <!-- grid -->
        <div class="row">
            <?php
            $sql = "SELECT * FROM book ORDER BY book_id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a href="book_detail.php?id=<?=$row['book_id']?>">
                            <img src="uploads/<?= $row['book_img']?>" width="180px" height="220px" class="mt-2"><br>
                        </a>
                        <div class="mt-3 mb-5">
                            <label class="fw-bold">รหัสสินค้า : <?= $row['book_id']?></label><br>
                            <label class="fw-bold">ชื่อหนังสือ : <?=strtoupper($row['book_name'])?></label><br><br>
                            <label class="fw-bold text-success">ราคา : <?= $row['price'] ?>฿</label><br>
                            <a href="order.php?id=<?=$row['book_id']?>" class="btn btn-warning text-dark mt-2 rounded-pill">เพิ่มในตะกร้า</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>