<?php
require_once("./init.php");

require_once("./chat_data.php");

// var_dump($path);
// echo "<br>";
// var_dump($messages);

// $user = ["name" => "Tom","color" => "blue","message" => "Hello PHP"];
// $userName = $user["name"];
// $userColor = $user["color"];
// $userMessage = $user["message"];

// var_dump($_POST["message"]);

if(empty($_SESSION["user"]["name"])){ //name,colorのキーを持つ配列userからnameキーにアクセス
  header("location:login.php");
  exit();
}
else{
  $user = $_SESSION["user"];
}


$title = "Chat";
$userName = $user["name"];
$userColor = $user["color"];

// unset($_SESSION);
// var_dump($_SESSION);
// unset($user);

var_dump($user);
// require_once("./logout.php"); //require_once は、既に取り込まれたファイルは2回目以降は取り込まない
require_once("./temp.php");
?>

    <div class="box">
        <div class="head">
        <h1 class="chat-ttl" style="color: <?= $userColor ?>">ChatPage</h1>
          <a href="./logout.php">Log Out</a>
        </div>
        <div class="chat-box">
          <div class="chat-info">
            <p>Name</p>
            <p><?= $userName ?></p>
            <p>Color</p>
            <p><?= $userColor ?></p>
          </div>
          <ul class="chat-list">
            <!-- 後で実際のチャットの一覧表示 -->
            <?php if($messages < 1): ?>
              <p>There's no chat. Please enter the room and greet us!</p>
            <?php else: ?>
              <?php foreach($messages as $msg): ?>
              <li style="color:<?= $msg->color ?>">
                <p><?= $msg->name ?></p>
                <p><?= $msg->message ?></p>
              </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
    <div class="foot">
      <form class="chat-form" action="input.php" method="post" class="chat-form">
      <input type="hidden" name="message[name]" value="<?= $userName ?>">  
      <input type="hidden" name="message[color]" value="<?= $userColor ?>">  
      <input class="chat-input" type="text" name="message[message]" />
        <button class="chat-button" type="submit">Entering a room</button>
      </form>
    </div>
  </body>
</html>
