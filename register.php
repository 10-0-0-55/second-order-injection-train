<?php
session_start();
include 'db.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!is_numeric($_POST['age'])){
        setcookie('error', 'age must be number');
        header("Location: register.php");
        die();
    }
    $stmt = $conn->prepare("SELECT * FROM user WHERE username=?");
    $stmt->bind_param("s", $_POST['username']);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();
    if($res->num_rows){
        setcookie("error", "username already in use");
    }
    else{
        $stmt = $conn->prepare("INSERT INTO user(username, age, password) VALUES(?,{$_POST['age']},sha1(?))");
        $stmt->bind_param('ss', $_POST['username'], $_POST['password']);
        $stmt->execute();
        header("Location: login.php");
    }
}
else{
    if($_COOKIE['error']){
        setcookie('error', '');
        echo $_COOKIE['error'];
    }
?>
<form action="register.php" method="post">
用户名：<input type="text" name="username">
密码：<input type="text" name="password">
年龄：<input type="text" name="age">
<input type="submit" value="注册">
</form>
<?php
}