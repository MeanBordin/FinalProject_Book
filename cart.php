<?php
    session_start();
    @include './localhost/connect.php';
    // $bk_id =$_GET['id'];
    // $sql = "SELECT * FROM book WHERE book_id = '$bk_id'";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);
    // echo $row['book_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php @include 'navbar.php'?><br><br>  
    <div class="container mt-4">
        <h2 class="my-4">ตะกร้าสินค้า</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="col-md-10">
                    <table class="table table-striped table-bordered table-responsive">
                        <tr class="text-center">
                            <th>#</th>
                            <th>ชื่อหนังสือ</th>
                            <th>ราคา</th>
                            <th>จำนวน</th>
                            <th>เพิ่ม / ลด</th>
                            <th>รวม</th>
                            <th>ยกเลิก</th>
                        </tr>
                        <?php
                            $total = 0;
                            $sum_price = 0;
                            $num_row = 1;
                            for ($i = 0; $i <= (int)$_SESSION['intLine']; $i++) {
                                if ($_SESSION["strProductID"][$i] != ""){
                                    $new_sql = "SELECT * FROM book WHERE book_id = '" . $_SESSION["strProductID"][$i] . "' ";
                                    $new_result = mysqli_query($conn, $new_sql);
                                    $row_book = mysqli_fetch_array($new_result);

                                    $_SESSION["price"] = $row_book['price'];
                                    $total = $_SESSION["strQty"][$i];
                                    $sum = $total * $row_book['price'];
                                    $sum_price = $sum_price + $sum;
                                    $sum_price = number_format($sum_price ,2);
                                    // echo $i;
                        ?>
                        <tr>
                            <td><?=$num_row?></td>
                            <td>
                            <img src="uploads/<?=$row_book['book_img']?>" width="60px" height="80px" class="me-2">
                                <?=$row_book['book_name']?>
                              </td>
                            <td class="text-center"><?=$row_book['price']?></td>
                            <td class="text-center"><?=$total?></td>
                            <td class="text-center"><?=$sum?></td>
                            <td class="text-center">
                                <a href="" class="btn btn-outline-secondary rounded-circle">+</a>
                                <a href="" class="btn btn-outline-secondary rounded-circle">-</a>
                            </td>
                            <td class="text-center">
                                <a  class="text-white text-decoration-none btn btn-danger" 
                                href="delete.php?Line=<?=$i?>">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <?php 
                            $num_row++;
                                }
                            } 
                        ?>
                        <tr>
                            <td colspan="6" >
                                ราคารวมทั้งหมด
                            </td>
                            <td class="text-end"><?=$sum_price?> บาท</td>
                        </tr>
                    </table>
                    <a href="#" class="btn btn-outline-success float-end ms-2">
                        ยืนยัน
                    </a>
                    <a href="index.php" class="btn btn-outline-warning text-dark float-end">
                        เลือกสินค้า
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>