<?php

// ファイルの読み込み
require_once('Models/Task.php');
require_once('index.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$currentTime = date("Y/m/d H:i:s");
// DBへのデータ保存
$task = new Task();
$tasks->create([$title, $contents, $currentTime]);

// リダイレクト
header('location:index.php');
exit;
?>