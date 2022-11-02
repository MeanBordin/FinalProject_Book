<?php @include 'connect.php' ?>
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
    <div class="container">
        <div class="row mt-5">
            <?php
                $bk_id =$_GET['id'];
                $sql = "SELECT * FROM book WHERE book_id = '$bk_id'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4">
                Column
            </div>
            <div class="col-md-6">
                Column
            </div>
        </div>
        <?php 
            } 
            mysqli_close($conn)
        ?>
    </div>
</body>

</html>