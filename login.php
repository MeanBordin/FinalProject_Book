<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="style/register.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php @include 'navbar2.php';?>
    <div class="container mt-5 bg-light p-5 rounded">
        <form action="check_login.php" method="post">
            <div class="text-center">
                <img class="img-responsive center-block mt-4 mb-5" src="img/registration-2.png" width="300" height="250" alt="register">
            </div>
            &nbsp;ชื่อผู้ใช้
            <input class="form-control" name="username" type="text" placeholder="username" required><br>
            &nbsp;รหัสผ่าน
            <input class="form-control" name="password" type="password"  placeholder="password" required><br>
            <!-- buttom -->
            <div class="float-end">
                <input class="btn btn-primary me-2" name="submit" type="submit" value="เข้าสู่ระบบ">
                <input class="btn btn-danger" type="reset" value="ยกเลิก">
            </div>
            <small>
                <a href="register.php">register</a>
            </small>
        </form> 
    </div>
</body>
</html>