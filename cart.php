<?php
session_start();
@include './localhost/connect.php';
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
    <?php @include 'navbar.php' ?><br><br>
    <div class="container mt-4">
        <h2 class="my-4">ตะกร้าสินค้า</h2>
        <form action="insert_cart.php" method="post">
            <div class="row">
                <div class="col-md-10">
                    <table class="table table-striped table-bordered table-responsive">
                        <tr class="text-center">
                            <th>#</th>
                            <th>ชื่อหนังสือ</th>
                            <th>ราคา</th>
                            <th>จำนวน</th>
                            <th>รวม</th>
                            <th>เพิ่ม / ลด</th>
                            <th>ยกเลิก</th>
                        </tr>
                        <?php
                        $total = 0;
                        $sum_price = 0;
                        $num_row = 1;
                        for ($i = 0; $i <= (int)$_SESSION['intLine']; $i++) {
                            if ($_SESSION["strProductID"][$i] != "") {
                                
                                $new_sql = "SELECT * FROM book WHERE book_id = '" . $_SESSION["strProductID"][$i] . "' ";
                                
                                $new_result = mysqli_query($conn, $new_sql);
                                $row_book = mysqli_fetch_array($new_result);

                                $_SESSION["price"] = $row_book['price'];
                                $total = $_SESSION["strQty"][$i];
                                $sum = $total * $row_book['price'];
                                $sum_price = $sum_price + $sum;

                                $_SESSION["sum_price"] = $sum_price;
                        ?>
                                <tr>
                                    <td><?= $num_row ?></td>
                                    <td>
                                        <img src="uploads/<?= $row_book['book_img'] ?>" width="60px" height="80px" class="me-2">
                                        <?= $row_book['book_name'] ?>
                                    </td>
                                    <td class="text-center"><?= $row_book['price'] ?></td>
                                    <td class="text-center"><?= $total ?></td>
                                    <td class="text-center"><?= $sum ?></td>
                                    <td class="text-center">
                                        <a href="order.php?id=<?= $row_book['book_id'] ?>" class="btn btn-outline-secondary rounded-circle">+</a>
                                        <?php if ($_SESSION["strQty"][$i] > 1) { ?>
                                            <a href="order_del.php?id=<?= $row_book['book_id'] ?>" class="btn btn-outline-secondary rounded-circle">-</a>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-white text-decoration-none btn btn-danger" href="delete.php?Line=<?= $i ?>">
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
                            <td colspan="6">
                                ราคารวมทั้งหมด
                            </td>
                            <td class="text-end"><?= $sum_price ?> บาท</td>
                        </tr>
                    </table>
                    <div class="mb-2">
                        <button class="btn btn-outline-warning text-dark float-end" type="submit">
                            สั่งซื้อ
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary text-dark float-end me-2">
                            เลือกสินค้า
                        </a>
                    </div>
                </div>
                <h3 class="mb-3 mt-2">ข้อมูลการสั่งซื้อ</h3>
                <label for="" class="mt-3">ชื่อจริง-นามสกุล</label>
                <input type="text" name="cus_name" class="form-control" style="width: 700px;">
                <label for="" class="mt-3">เบอร์โทรศัพท์</label>
                <input type="text" name="phone" class="form-control" style="width: 700px;">
                <label for="" class="mt-3">ที่อยู่</label>
                <textarea name="address" class="form-control" cols="30" rows="10" style="width: 700px; height: 100px;"></textarea>
            </div>
        </form>
    </div>
</body>

</html>