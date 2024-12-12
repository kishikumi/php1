<?php
// データを受け取る
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$organization = htmlspecialchars($_POST['organization'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
$date = date('Y-m-d H:i:s');

// 保存するファイルのパス
$file = 'data.txt';

// 保存する内容
$entry = "日時: $date\n名前: $name\n所属: $organization\n文章: $message\n\n";

// ファイルに保存
file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

// 完了メッセージとリダイレクト
echo "<p>データが送信されました。</p>";
echo '<a href="index.php">フォームに戻る</a>';
?>
