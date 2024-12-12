<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームアプリ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #5b9bd5;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #5b9bd5;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #4a89c7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>フォーム入力</h1>
        <form action="submit.php" method="POST">
            <label for="name">名前</label>
            <input type="text" id="name" name="name" required>

            <label for="organization">所属</label>
            <input type="text" id="organization" name="organization" required>

            <label for="message">文章</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">送信</button>
        </form>
    </div>
</body>
</html>
