<?php 
    include 'connect.php';
    
    $bname = $_POST['book_name'];
    $btype = $_POST['book_type'];
    $bwriter = $_POST['book_name_writer'];
    $bprice = $_POST['price'];
    
//     if (is_uploaded_file($_FILES['book_img']['tmp_name'])) {
//         $new_image_name = 'bk_' . uniqid() . "." .pathinfo(basename($_FILES['book_img']['name']), PATHINFO_EXTENSION);
//         $uploads_path = './uploads/' . $new_image_name;
//         move_uploaded_file($_FILES['book_img']['tmp_name'], $uploads_path);
//    } else {
//         $new_image_name = "";
//    }

    $sql = "UPDATE book 
                SET book_name = '$banem', 
                    book_type = '$btype', 
                    book_name_writer = '$bwriter', 
                    price = '$bprice'";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='book_table.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขมูลได้');</script>";
    }
    mysqli_close($conn);
?>  
