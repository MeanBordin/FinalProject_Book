<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">ซื้อหนังสือ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            โปรโมชั่น
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mt-2 mb-1" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Search"  name="search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                    <h3 class="ms-3">
                        <a href="cart.php">
                            <i class="bi bi-bag-heart text-light"></i>
                        </a>
                    </h3>
                </form>
                <a href="logout.php" class="btn btn-secondary ms-3">logout</a>           
            </div>
        </div>
    </div>
</nav>
<div class="container">
<?php @include 'slider.php'?>
</div>
<?php 
    isset( $_POST['search'] ) ? $search = $_POST['search'] : $search = "";
    if( !empty( $search ) ) {
?>    
<div class="container mt-5">
    <div class="row">
        <?php
            $sql = "SELECT * FROM book WHERE ( book_name LIKE '%".$search."%' )";
            $result = mysqli_query($conn, $sql);
            $num_row = 1;
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-sm-3">
                    <div class="text-center">
                        <a href="book_detail.php?id=<?=$row['book_id']?>">
                            <img src="./uploads/<?=$row['book_img']?>" width="180px" height="220px" class="mt-2"><br>
                        </a>
                        <div class="mt-3 mb-5">
                            <label class="fw-bold">รหัสสินค้า : <?= $row['book_id']?></label><br>
                            <label class="fw-bold">ชื่อหนังสือ : <?=strtoupper($row['book_name'])?></label><br><br>
                            <label class="fw-bold text-success">ราคา : <?= $row['price'] ?>฿</label><br>
                            <a href="order.php?id=<?=$row['book_id']?>" class="btn btn-warning text-dark mt-2 rounded-pill">เพิ่มในตะกร้า</a>
                        </div>
                    </div>
                </div>
            <?php
                $num_row++;
            }
            ?>
            </div>
    </div>   
<?php } ?>