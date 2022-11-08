<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">จัดการข้อมูล</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- start menu 1 -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              จัดการข้อมูลหนังสือ
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="book_table.php">ข้อมูลหนังสือ</a></li>
              <li><a class="dropdown-item" href="form_book.php">เพิ่มข้อมูลหนังสือ</a></li>
            </ul>
          </li>
          <!-- end menu 1 -->

          <!-- start menu 2 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              จัดการข้อมูลลูกค้า
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="customer_table.php">ข้อมูลลูกค้า</a></li>
            </ul>
          </li>
          <!-- end menu 2 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              จัดการข้อมูลออเดอร์
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="orders_table.php">ข้อมูลมูลออเดอร์</a></li>
            </ul>
          </li>
        </ul>
        <a href="logout.php" class="btn btn-secondary ms-3">logout</a>
      </div>
    </div>
  </div>
</nav>