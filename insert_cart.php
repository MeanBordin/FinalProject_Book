<?php
    session_start();
    include 'localhost/connect.php';

    $cus_name = $_POST['cus_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO orders(cus_name, address, phone, total_price, status)
                        VALUES('$cus_name', '$address', '$phone', '" . $_SESSION["sum_price"] ."', '1')";
    
    mysqli_query($conn, $sql);
    $order_id = mysqli_insert_id($conn);

    for ($i=0; (int)$_SESSION['intLine']; $i++) {
        if ($_SESSION["strProductID"][$i] != "") {
            $new_sql = "SELECT * FROM book WHERE book_id = '" . $_SESSION["strProductID"][$i] ."' ";
        
            $result = mysqli_query($conn, $new_sql);
            $new_row = mysqli_fetch_array($result);
            
            $price = $new_row['price'];
            $total = $_SESSION["strQty"][$i] * $price;

            $sql_sum = "INSERT INTO order_detail(order_id, book_id, order_price, amount, total)
                        VALUES('$order_id', '". $_SESSION["strProductID"][$i] ."', '$price', '".$_SESSION["strQty"][$i]."', '$total')";
            
            $result = mysqli_query($conn, $sql_sum);
            if ($result) {
                $sql_update = "UPDATE book SET amount = amount - '". $_SESSION["strProductID"][$i] ."' 
                               WHERE book_id = '". $_SESSION["strProductID"][$i] ."' ";
                mysqli_query($conn, $sql_update);

                echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
                echo "<script>window.location='index.php';</script>";
            } else {
                echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
                echo "Error : {$sql} <br>" . mysqli_error($conn);
            } 
        }
    }
    mysqli_close($conn);
    session_destroy();
?>