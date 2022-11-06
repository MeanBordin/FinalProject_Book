<?php
    @include './localhost/connect.php';

    $username = $_POST['username'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = hash('sha512', $password);

    $sql = "INSERT INTO customer(first_name, last_name, username, email, password)
            VALUES('$fname', '$lname', '$username', '$email', '$password')";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>window.location='index.php';</script>";
    }else{
        echo "Error : " . $sql . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถบันทึกมูลได้');</script>";
    }
    mysqli_close($conn);
?>