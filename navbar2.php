<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../style/style.css">
    <?php @include 'style/css.php';?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/shops.png" width="50" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">โปรโมชั่น</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ติดต่อเรา</a>
                </li>
            </ul>
            <form class="d-flex mb-0">
                <button class="btn btn-primary me-2" type="submit">
                    <a class="text-light text-decoration-none" href="register.php">สมัครใหม่</a>
                </button>
                <button class="btn btn-warning me-2" type="submit">
                    <a class="text-dark text-decoration-none" href="login.php">เข้าสู่ระบบ</a>
                </button>
            </form>
            </div>
        </div>
    </nav>
</body>
</html>