<?php
session_start();
include 'db.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $stmt = $conn->prepare("SELECT * FROM user WHERE username=? AND password=SHA1(?)");
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);
    $stmt->execute();
    $res = $stmt->get_result();
    if($res->num_rows){
        $_SESSION['user'] = $_POST['username'];
        header("Location: index.php");
    }
    else{
        setcookie("error", "password error");
        header('Location: login.php');
    }
}
else{
    if($_COOKIE['error']){
        setcookie('error', '');
        echo $_COOKIE['error'];
    }
?>
<a href="register.php">注册</a><br>
<form action="login.php" method="post">
用户名：<input type="text" name="username">
密码：<input type="text" name="password">
<input type="submit" value="登录">
</form>
<?php
}