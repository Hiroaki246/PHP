<?php
$path = "./chat.json"; //パスを文字列として代入
$messages = json_decode(file_get_contents($path)); //"./chat.json"内の情報を取得し、PHPの変数に変換