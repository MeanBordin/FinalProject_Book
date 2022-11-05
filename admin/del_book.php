<?php 
    include '../localhost/connect.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM book WHERE book_id = '$id' ";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='book_table.php';</script>"; 
    }else{
        echo "Error : {$sql} <br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
    }

    mysqli_close($conn);
?>