<?php
include './localhost/connect.php';
session_start();
$sql = "SELECT * FROM orders WHERE order_id = '" . $_SESSION['order_id'] . "' ";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_fetch_array($result);
$total_price = $result2['total_price'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <a href="index.php" class="btn btn-primary mt-5 mb-5">กลับไปหน้าหลัก</a>
        <div class="card p-3">
            <div class="row mt-4">
                <div class="col">
                    <h3 class="text-center">ใบเสร็จชำระเงิน</h3>
                    <div class="row">
                        <div class="col ms-5 mt-3">
                            เลขที่สั่งซื้อ : <?= $result2['order_id']; ?><br><br>
                            ชื่อ - นาสกุล : <?= $result2['cus_name']; ?> <br>
                            ที่อยู่ : <?= $result2['address']; ?> <br>
                            เบอร์โทรศัพท์ : <?= $result2['phone']; ?>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col mt-3">
                            วันที่ : <?= $result2['date'] ?>
                        </div>
                        <div class="col mt-3">
                            <button class="btn" onclick="window.print()">
                                <h4>
                                    <i class="bi bi-printer-fill"></i>
                                </h4>พิมพ์
                            </button>
                        </div>
                        <div class="row mt-4">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">รหัสหนังสือ</th>
                                        <th scope="col">ชื่อหนังสือ</th>
                                        <th scope="col">ราคา</th>
                                        <th scope="col">จำนวน</th>
                                        <th scope="col">ราคาทั้งหมด</th>
                                    </tr>
                                    <?php
                                    $sql = "SELECT * FROM order_detail o, book b 
                                                WHERE o.book_id = b.book_id 
                                                AND o.order_id = '" . $_SESSION['order_id'] . "' ";

                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td><?= $row['book_id'] ?></td>
                                        <td><?= $row['book_name'] ?></td>
                                        <td><?= $row['order_price'] ?></td>
                                        <td><?= $row['amount_qty'] ?></td>
                                        <td><?= $row['total'] ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="float-end me-5">
                        <h6>
                            รวมเป็นเงิน <?php echo number_format($total_price, 2) ?> บาท
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>