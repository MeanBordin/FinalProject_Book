<?php @include './localhost/connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head> 
<body>
    <?php @include 'navbar.php' ?>
    <div class="container ">
        <div class="alert mt-5 text-center" role="alert">
            <h3>รายละเอียดสินค้า</h3>
        </div>
        <div class="row mt-5">
            <?php
                $bk_id =$_GET['id'];
                $sql = "SELECT * FROM book WHERE book_id = '$bk_id'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result)
            ?>
            <div class="col-md-4">
                <img src="./uploads/<?=$row['book_img']?>" width="290px" height="100%">
            </div>
            <div class="col-md-4">
                <h1 class="text-dark fw-bold">
                    <?=strtoupper($row['book_name'])?>
                </h1>
                
                รหัสสินค้า : <?=$row['book_id']?> 
                
                <p>
                    ประเภทหนังสือ : <?=$row['type_name']?>
                </p>
                
                <p class="mt-3">
                    ผู้เขียน : <?=$row['name_writer']?>
                </p>
                
                <p class="mt-3">
                    <h4>
                        ราคา : <label class="text-danger fw-bold"><?=$row['price']?></label> บาท
                    </h4> 
                </p>
                <!-- <input type="number"><br>  -->
                <a href="order.php?id=<?=$row['book_id']?>" class="btn btn-warning mt-3 rounded-pill">
                    เพิ่มในตะกร้า
                </a>
            </div>
        </div>
            <?php 
                mysqli_close($conn)
            ?>
    </div>
</body>

</html>