<?php 
    include '../localhost/connect.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM customer WHERE customer_id = '$id' ";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='customer_table.php';</script>"; 
    }else{
        echo "Error : {$sql} <br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
    }

    mysqli_close($conn);
?>