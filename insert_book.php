<?php 
    @include 'connect.php';

    $bname = $_POST['book_name'];
    $btype = $_POST['book_type'];
    $bwriter = $_POST['book_name_writer'];
    $bprice = $_POST['price'];

    // uploade image
   if (is_uploaded_file($_FILES['book_img']['tmp_name'])) {
        $new_image_name = 'bk_' . uniqid() . "." .pathinfo(basename($_FILES['book_img']['name']), PATHINFO_EXTENSION);
        $uploads_path = './uploads/' . $new_image_name;
        move_uploaded_file($_FILES['book_img']['tmp_name'], $uploads_path);
   } else {
    $new_image_name = "";
   }

    //insert data to database    
    $sql = "INSERT INTO book(book_name, book_type, book_name_writer, price, book_img) 
                        VALUES ('$bname', '$btype', '$bwriter', '$bprice', '$new_image_name')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='form_book.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
?>