<?php 
    @include '../localhost/connect.php';
    
    $oid = $_POST['order_id'];
    $cname = $_POST['cus_name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $total_price = $_POST['total_price'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    $sql = "UPDATE orders 
            SET cus_name='$cname', address='$address', phone='$phone', total_price='$total_price', status='$status', date='date'
            WHERE order_id='$oid' ";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='orders_table.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขมูลได้');</script>";
    }
    mysqli_close($conn);
?>  
