<?php
// ファイルの読み込み
require_once('Models/Spot.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$id = $_POST['id'];

// DBへのデータ保存
$task = new Task();
$task->update([$title, $contents, $id]);

// リダイレクト
header('location:show.blade.php');
exit;
