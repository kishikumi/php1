<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="view.php" content="width=device-width, initial-scale=1.0">
    <title>データ一覧</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #001;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>送信されたデータ</h1>
        <pre>
<?php
// ファイルのパス
$file = "data.txt";

// ファイルの内容を表示
if (file_exists($file)) {
    echo htmlspecialchars(file_get_contents($file), ENT_QUOTES, "UTF-8");

} else {
    echo "データがありません。";
}
?>
        </pre>
        <a href="index.php">フォームに戻る</a>
    </div>
</body>
</html>
