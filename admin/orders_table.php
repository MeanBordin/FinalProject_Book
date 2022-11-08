<?php @include '../localhost/connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Bs icon svg -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
    <?php @include 'navbar.php' ?>
    <div class="container">
        <div class="h4 text-center alert alert-info mb-4 mt-4" role="alert">
            แสดงข้อมูลสินค้า
        </div>
        <a href="form_book.php" class="btn btn-primary float-end mb-3 mt-5">
            <i class="bi bi-plus-circle"></i> เพิ่มสินค้า
        </a>
        <table class="table table-striped table-hover table-bordered ">
            <tbody class="table-striped">
                <tr class="text-center">
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Book ID</th>
                    <th>Order price</th>
                    <th>Amount</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </tbody>
            <?php
            $sql = "SELECT * FROM order_detail";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr class="text-center">
                    <td><?= $row['id'] ?></td>
                    <td><?= $row["order_id"] ?></td>
                    <td><?= $row['book_id'] ?></td>
                    <td><?= $row["order_price"] ?></td>
                    <td><?= $row["amount_qty"] ?></td>
                    <td><?= $row["total"] ?></td>
                    <td>
                        <!-- <a 
                        class="text-light text-decoration-none btn btn-primary"
                        href="#<?= $row['book_id'] ?>">
                            <i class="bi bi-eye"></i></i> 
                        </a> -->
                        <a class="text-light text-decoration-none btn btn-secondary" href="edit_book.php?id=<?= $row['book_id'] ?>">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <a class="text-white text-decoration-none btn btn-danger" href="del_book.php?id=<?= $row['book_id'] ?>" onclick="clikComfirm(this.href);return false;">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>
    <script>
        function clikComfirm(mypage) {
            let ok = confirm('คุณต้องการลบข้อมูลหรือไม่');
            if (ok) {
                window.location = mypage
            }
        }
    </script>
</body>

</html>