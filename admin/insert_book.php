<?php 
    @include '../localhost/connect.php';

    $bname = $_POST['book_name'];
    $btype = $_POST['type_name'];
    $bwriter = $_POST['name_writer'];
    $bprice = $_POST['price'];

    // uploade image
   if (is_uploaded_file($_FILES['book_img']['tmp_name'])) {
        $new_image_name = 'bk_' . uniqid() . "." .pathinfo(basename($_FILES['book_img']['name']), PATHINFO_EXTENSION);
        // // check file type
        // $image_type = strtolower(pathinfo($new_image_name,PATHINFO_EXTENSION));
        // echo $image_type;
        // if ($image_type != 'jpeg' && $image_type != 'jpg' && $image_type != 'png') {
        //     echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        // }
        $uploads_path = '../uploads/' . $new_image_name;
        move_uploaded_file($_FILES['book_img']['tmp_name'], $uploads_path);
   } else {
        $new_image_name = "";
   }

    //insert data to database    
    $sql = "INSERT INTO book(book_name, type_name, name_writer, price, book_img) 
                        VALUES ('$bname', '$btype', '$bwriter', '$bprice', '$new_image_name')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='book_table.php';</script>";
    } else {
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
        echo "Error : {$sql} <br>" . mysqli_error($conn);
    }
?>