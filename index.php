<?php @include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php @include 'navbar.php' ?>   
    <div class="container mt-5">
        <div class="row">
            <?php
            $sql = "SELECT * FROM book ORDER BY book_id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-sm-3">
                    <div class="text-center">
                        <a href="book_detail.php">
                            <img src="uploads/<?= $row['book_img']?>" width="180px" height="220px" class="mt-2"><br>
                        </a>
                        <div class="mt-3 mb-5">
                            <label class="fw-bold">รหัสสินค้า : <?= $row['book_id']?></label><br>
                            <label class="fw-bold"><?=strtoupper($row['book_name'])?></label><br><br>
                            <label class="fw-bold text-success">ราคา <?= $row['price'] ?> ฿</label><br>
                            <a href="#" class="btn btn-outline-warning text-dark mt-2">ซื้อหนังสือ</a>
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