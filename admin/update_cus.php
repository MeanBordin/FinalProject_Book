<?php 
    @include '../localhost/connect.php';
    
    $cid = $_POST['customer_id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "UPDATE customer 
            SET first_name='$fname', last_name='$lname', username='$username', email='$email'
            WHERE customer_id='$cid' ";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='customer_table.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขมูลได้');</script>";
    }
    mysqli_close($conn);
?>  
