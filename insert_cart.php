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
    $_SESSION['order_id'] = $order_id;

    for ($i=0; $i <= (int)$_SESSION['intLine']; $i++) {
        if ($_SESSION["strProductID"][$i] != "") {
            $new_sql = "SELECT * FROM book WHERE book_id = '" . $_SESSION["strProductID"][$i] ."' ";
        
            $result = mysqli_query($conn, $new_sql);
            $new_row = mysqli_fetch_array($result);
            
            $price = $new_row['price'];
            $total = $_SESSION["strQty"][$i] * $price;

            $sql_sum = "INSERT INTO order_detail(order_id, book_id, order_price, amount_qty, total)
                        VALUES('$order_id', '". $_SESSION["strProductID"][$i] ."', '$price', '".$_SESSION["strQty"][$i]."', '$total')";
            
            $result = mysqli_query($conn, $sql_sum);
            if ($result) {
                $sql_update = "UPDATE book SET amount = amount - '". $_SESSION["strQty"][$i] ."' 
                               WHERE book_id = '". $_SESSION["strProductID"][$i] ."' ";
                mysqli_query($conn, $sql_update);

                // echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
                echo "<script>window.location='report.php';</script>";
            } 
        }
    }
    mysqli_close($conn);
    unset($_SESSION['intLine']);
    unset($_SESSION["strProductID"][$i]);
    unset($_SESSION["strQty"][$i]);
    unset($_SESSION["sum_price"]);
    // session_destroy();
 
?>