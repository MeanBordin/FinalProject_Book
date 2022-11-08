<?php
    @include './localhost/connect.php';
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $password = hash('sha512', $password);

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row > 0){
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $show = header('location:book_table.php');
    }else{
        $_SESSION['Error'] = "<p>Your username or password is invalid</p>";
        $show = header('location:book_table.php');
    }
    mysqli_close($conn);
?>