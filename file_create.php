<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // POSTメソッドでのみ実行される処理を記述

    // var_dump($_POST);
    // var_dump($_POST['age']);
    // var_dump($_FILES);

    // データの受け取り-基本情報
    $sei = $_POST['sei'];
    $mei = $_POST['mei'];
    $birthday = $_POST['birthday'];

    // データの受け取り-ストレングスファインダー
    $clifton_strengths = $_POST['clifton_strengths'];

    // データの受け取り-ライフログ情報
    $event = $_POST['event'];
    $age = $_POST['age'];
    $event_reason = $_POST['event_reason'];
    $influence = $_POST['influence'];
    $influence_reason = $_POST['influence_reason'];


    // $_FILESからファイル名を取得する
    $profileFileName = $_FILES['profile_image']['name'];

    // $_FILESからファイルの一時保存先を取得する
    $tmpName = $_FILES['profile_image']['tmp_name'];

    // 拡張子を抽出
    $extension = pathinfo($profileFileName, PATHINFO_EXTENSION);

    // 誕生日の表記を0000年00月00日に変換
    $formattedBirthday = date('Y年m月d日', strtotime($birthday));

    ### プロフィール写真保存処理 ###

    // 新しいファイル名を作成

    $newProfileFileName = uniqid(mt_rand()) . '.' . $extension;

    // ファイルの保存先
    $uploadDir = "uploadfile/";

    // ファイルの保存先のパスを作成
    $uploadPath = "uploadfile/{$newProfileFileName}";

    // ファイルを移動
    $result = move_uploaded_file($tmpName, $uploadPath);

    ### csvファイル保存処理 ###

    // ファイルに保存するデータ
    $testPro = $sei . "\n";

    //ファイルを開く処理（wで上書き）
    $file = fopen('data/profile.csv', 'w');

    // ファイルをロックする
    flock($file, LOCK_EX);

    // ファイルにデータを書き込む
    fwrite($file, $testPro);

    // ファイルのロックを解除する
    flock($file, LOCK_UN);

    // ファイルを閉じる
    fclose($file);
} else {
    // POSTメソッド以外の場合の処理（エラー処理など）
    echo "エラー: フォームの送信方法が正しくありません。";
}

// XSS対応化関数
function h($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

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
            <h2>お名前</h2>
            <p><?= h("{$sei} {$mei}"); ?></p>
            <h2>顔写真</h2>
            <p>
                <?php
                if ($result) {
                    echo '<img src="' . $uploadPath . '" alt="" width="200px">';
                } elseif ($_FILES['profile_image']['error'] !== UPLOAD_ERR_OK) {
                    $MSG = 'アップロード失敗！エラーコード：' . $_FILES['profile_image']['error'];
                    echo $MSG;
                } else {
                    $MSG = '画像を選択してください';
                    echo $MSG;
                }
                ?>
            </p>
            <h2>生年月日</h2>
            <p><?= "{$formattedBirthday}" ?></p>
        </div><!-- /.your__question  -->
        <div class="your__question">
            <h2>ストレングスファインダー上位10位の資質</h2>
            <dl>
                <dt>第1位</dt>
                <dd><?= "{$clifton_strengths[0]}" ?></dd>
                <dt>第2位</dt>
                <dd><?= "{$clifton_strengths[1]}" ?></dd>
                <dt>第3位</dt>
                <dd><?= "{$clifton_strengths[2]}" ?></dd>
                <dt>第4位</dt>
                <dd><?= "{$clifton_strengths[3]}" ?></dd>
                <dt>第5位</dt>
                <dd><?= "{$clifton_strengths[4]}" ?></dd>
                <dt>第6位</dt>
                <dd><?= "{$clifton_strengths[5]}" ?></dd>
                <dt>第7位</dt>
                <dd><?= "{$clifton_strengths[6]}" ?></dd>
                <dt>第8位</dt>
                <dd><?= "{$clifton_strengths[7]}" ?></dd>
                <dt>第9位</dt>
                <dd><?= "{$clifton_strengths[8]}" ?></dd>
                <dt>第10位</dt>
                <dd><?= "{$clifton_strengths[9]}" ?></dd>
            </dl>
            <p></p>
        </div><!-- /.your__question  -->


        <div class="your__question">
            <h2>ライフイベント</h2>
            <canvas id="lifeLineChart"></canvas>
            <table>
                <tbody>
                    <tr>
                        <th>どんな出来事でしたか？</th>
                        <th>いつの出来事？</th>
                        <th>印象に残っている理由</th>
                        <th>この出来事に点数をつけると？</th>
                        <th>点数をつけた理由</th>
                    </tr>
                    <tr>
                        <td><?= "{$event[0]}" ?></td>
                        <td><?= "{$age[0]}歳の時" ?></td>
                        <td><?= "{$event_reason[0]}" ?></td>
                        <td><?= "{$influence[0]}点" ?></td>
                        <td><?= "{$influence_reason[0]}" ?></td>
                    </tr>
                    <tr>
                        <td><?= "{$event[1]}" ?></td>
                        <td><?= "{$age[1]}歳の時" ?></td>
                        <td><?= "{$event_reason[1]}" ?></td>
                        <td><?= "{$influence[1]}点" ?></td>
                        <td><?= "{$influence_reason[1]}" ?></td>
                    </tr>
                    <tr>
                        <td><?= "{$event[2]}" ?></td>
                        <td><?= "{$age[2]}歳の時" ?></td>
                        <td><?= "{$event_reason[2]}" ?></td>
                        <td><?= "{$influence[2]}点" ?></td>
                        <td><?= "{$influence_reason[2]}" ?></td>
                    </tr>
                    <tr>
                        <td><?= "{$event[3]}" ?></td>
                        <td><?= "{$age[3]}歳の時" ?></td>
                        <td><?= "{$event_reason[3]}" ?></td>
                        <td><?= "{$influence[3]}点" ?></td>
                        <td><?= "{$influence_reason[3]}" ?></td>
                    </tr>
                    <tr>
                        <td><?= "{$event[4]}" ?></td>
                        <td><?= "{$age[4]}歳の時" ?></td>
                        <td><?= "{$event_reason[4]}" ?></td>
                        <td><?= "{$influence[4]}点" ?></td>
                        <td><?= "{$influence_reason[4]}" ?></td>
                    </tr>
                    <tr>
                        <td><?= "{$event[5]}" ?></td>
                        <td><?= "{$age[5]}歳の時" ?></td>
                        <td><?= "{$event_reason[5]}" ?></td>
                        <td><?= "{$influence[5]}点" ?></td>
                        <td><?= "{$influence_reason[5]}" ?></td>
                    </tr>

                </tbody>
            </table>
        </div><!-- /.your__question  -->


    </section><!-- /#content__wrapper -->

    <script>
        // JSON形式に変換する
        var ageData = <?php echo json_encode($age); ?>;
        var influenceData = <?php echo json_encode($influence); ?>;
        // 姓名を取得する
        var userName = '<?php echo h("{$sei} {$mei}"); ?>';

        // グラフを描画する
        var ctx = document.getElementById('lifeLineChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ageData,
                datasets: [{
                    label: `${userName}さんのライフラインチャート`,
                    data: influenceData,
                    borderColor: '#f88',
                }],
            },
            options: {
                y: {
                    min: -100,
                    max: 100,
                },
            },
        });
    </script>

    <footer>
        <p class="copyright">(C) Gawasan</p>
    </footer>

</body>

</html>