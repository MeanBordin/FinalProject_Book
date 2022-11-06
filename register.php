<?php include './localhost/connect.php'?>
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
    <?php @include 'navbar2.php'; ?>
    <div class="container mt-5 bg-light bordered rounded border">
        <form action="insert_register.php" method="post">
            <h1 class="text-center mb-0">สมัครสมาชิก</h1>
            &nbsp;ชื่อผู้ใช้
            <input class="form-control" name="username" type="text" maxlength="25" placeholder="username" required><br>
            &nbsp;ชื่อจริง
            <input class="form-control" name="firstname" type="text" placeholder="first name" required><br>
            &nbsp;นามสกุล
            <input class="form-control" name="lastname" type="text" placeholder="last name" required><br>
            &nbsp;อีเมล
            <input class="form-control" name="email" type="email" placeholder="email" required><br>
            &nbsp;รหัสผ่าน
            <input class="form-control" name="password" type="password" maxlength="10" placeholder="password" required><br>
            <!-- buttom -->
            <div class="float-end mt-5">
                <input class="btn btn-warning me-2" name="submit" type="submit" value="สมัครสมาชิก">
                <input class="btn btn-danger" type="reset" value="ยกเลิก">
            </div>
        </form> 
    </div>
</body> 
</html>