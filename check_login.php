<?php
    @include './localhost/connect.php';
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $password = hash('sha512', $password);

    $sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row > 0){
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $show = header('location:index.php');
    }else{
        $_SESSION['Error'] = "<p>Your username or password is invalid</p>";
        $show = header('location:login.php');
    }
    mysqli_close($conn);
?>