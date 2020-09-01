<?php
if((mb_strlen($_POST["message"]["message"]) != 0 ) 
&& (mb_strlen($_POST["message"]["message"]) >= 5 ) 
&& (mb_strlen($_POST["message"]["message"]) < 140 )){
    $msg = $_POST["message"]; //index.phpからPOSTされた配列を取得
    $new_chat = (object)$msg; //jsonで扱えるようobject型にキャスト
    require_once("./chat_data.php");
    array_push($messages, $new_chat); //$messageの最後尾に$new_chatの要素を追加
    $messages = json_encode($messages); //jsonの文字列に変換し、$messageに代入
    file_put_contents($path,$messages); //$pathの要素を$messageの要素で上書き    
}

header("location:index.php"); //index.phpにリダイレクト(ページを転送)
exit(); //input.phpの処理終了を意味する。リダイレクト後は直後で必ず記載すること