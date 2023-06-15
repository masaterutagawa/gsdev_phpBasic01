<?php

// データまとめ用の空文字変数
$str = '';

//ファイルを開く処理（rで読み取り専用）
$file = fopen('data/profile.csv', 'r');

// ファイルをロックする
flock($file, LOCK_EX);

// fgets()関数で1行ずつ取得し、$lineに格納
if ($file) {
    $aa = file_get_contents('data/profile.csv');
    echo $aa;
}

// ファイルのロックを解除する
flock($file, LOCK_UN);

// ファイルを閉じる
fclose($file);
?>




<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/import.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>PHP課題 2023年6月</title>
</head>

<body>
    <section id="content__wrapper">
        <h1>PHP練習</h1>
        <div class="your__question">
            <h2>ファイルの中身</h2>
            <p><?= "{$aa}" ?></p>
        </div><!-- /.your__question  -->
        </div><!-- /.your__question  -->
    </section><!-- /#content__wrapper -->

    <footer>
        <p class="copyright">(C) Gawasan</p>
    </footer>

</body>

</html>