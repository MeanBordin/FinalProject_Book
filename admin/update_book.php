<?php 
    @include '../localhost/connect.php';
    
    $bid = $_POST['book_id'];
    $bname = $_POST['book_name'];
    $btype = $_POST['type_name'];
    $bwriter = $_POST['name_writer'];
    $bprice = $_POST['price'];

    $sql = "UPDATE book 
            SET book_name='$bname', type_name='$btype', name_writer='$bwriter', price='$bprice'
            WHERE book_id='$bid' ";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='book_table.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขมูลได้');</script>";
    }
    mysqli_close($conn);
?>  
