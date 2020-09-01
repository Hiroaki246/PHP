<?php
require_once("./init.php");

if(isset($_SESSION["user"]["name"])){ //login.phpにアクセスした時に、nameに値が入っていれば
    header("location:index.php"); //index.phpにリダイレクト
    exit();
}
elseif(!empty($_POST["user"]["name"])&&!empty($_POST["user"]["color"])){ //name,color共に値が入っているの時
    $_SESSION["user"] = $_POST["user"]; //POSTされたuserキーの要素(name,color)をログインユーザーとして保持
    header("location:index.php");
    exit();
}
// var_dump($_SESSION);
// unset($_SESSION);
// var_dump($_SESSION);
$title = "Login";
// require_once "./logout.php"; //require は、同じファイルでも何度も取り込む
require_once("./temp.php");
?>

<div class="box">
    <div class="login-box">
        <h1 class="login-ttl">LoginPage</h1>
        <form class="login-form" action="login.php" method="post">
        <div class="form-group">
            <label class="login-form__label">Your Name</label>
            <input class="login-form__input" type="text" name="user[name]" />
        </div>
        <div class="form-group">
            <label class="login-form__label">Choise Your Color</label>
            <select class="login-form__select" name="user[color]">
            <option value="black">Black</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
            </select>
        </div>
        <button class="login__submit" type="submit">Entering a room</button>
        </form>
    </div>
</div>
</body>
</html>