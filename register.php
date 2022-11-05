<?php include '../admin/conndb.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="style/register.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php @include 'navbar.php'; ?>
    <div class="container mt-5">
        <form action="#" method="post">
            <h1 class="text-center mb-0">สมัครสมาชิก</h1>
            <div class="text-center">
                <img class="img-responsive center-block mb-5" src="../image/registration-2.png" width="400" height="250" alt="register">
            </div>
            &nbsp;ชื่อผู้ใช้
            <input class="form-control" name="username" type="text" placeholder="username" required><br>
            &nbsp;อีเมล
            <input class="form-control" name="email" type="email" placeholder="email" required><br>
            &nbsp;รหัสผ่าน
            <input class="form-control" name="password" type="password"  placeholder="password" required><br>
            <!-- buttom -->
            <div class="float-end">
                <input class="btn btn-warning me-2" name="submit" type="submit" value="สมัครสมาชิก">
                <input class="btn btn-danger" type="reset" value="ยกเลิก">
            </div>
        </form> 
    </div>
</body> 
</html>