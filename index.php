<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/import.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="./asset/js/form.js"></script>
    <title>PHP課題 2023年6月</title>
</head>

<body>

    <section id="content__wrapper">
        <h1>PHP練習</h1>
        <div class="your__question">
            <h2>プロフィール</h2>
            <form action="file_create.php" method="POST" id="form__customer__situation" enctype="multipart/form-data">
                <h3>お名前</h3>
                <p>姓 <input type="text" name="sei" id="" size="10"> 名 <input type="text" name="mei" id="" size="10"></p>
                <h3>生年月日</h3>
                <p><input type="date" name="birthday" id="" size="8"></p>
                <h3>プロフィール画像</h3>
                <p><input type="file" name="profile_image"></p>
        </div><!-- /.your__question  -->
        <div class="your__question">
            <h2>ストレングスファインダー</h2>
            <h3>第１位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第2位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第3位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第4位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第5位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第6位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第7位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第8位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第9位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>
            <h3>第10位の資質</h3>
            <select name="clifton_strengths[]" id="">
                <option value="">--選択してね--</option>
                <option value="分析思考">分析思考</option>
                <option value="原点思考">原点思考</option>
                <option value="未来志向">未来志向</option>
                <option value="着想">着想</option>
                <option value="収集心">収集心</option>
                <option value="内省">内省</option>
                <option value="学習欲">学習欲</option>
                <option value="戦略性">戦略性</option>
                <option value="適応性">適応性</option>
                <option value="運命思考">運命思考</option>
                <option value="成長促進">成長促進</option>
                <option value="共感性">共感性</option>
                <option value="調和性">調和性</option>
                <option value="包含">包含</option>
                <option value="個別化">個別化</option>
                <option value="ポジティブ">ポジティブ</option>
                <option value="親密性">親密性</option>
                <option value="活発性">活発性</option>
                <option value="指令性">指令性</option>
                <option value="コミュニケーション">コミュニケーション</option>
                <option value="競争性">競争性</option>
                <option value="最上志向">最上志向</option>
                <option value="自己確信">自己確信</option>
                <option value="自我">自我</option>
                <option value="社交性">社交性</option>
                <option value="達成欲">達成欲</option>
                <option value="アレンジ">アレンジ</option>
                <option value="信念">信念</option>
                <option value="公平性">公平性</option>
                <option value="慎重さ">慎重さ</option>
                <option value="規律性">規律性</option>
                <option value="目標志向">目標志向</option>
                <option value="責任感">責任感</option>
                <option value="回復志向">回復志向</option>
            </select>

        </div><!-- /.your__question  -->
        <div class="life__log">
            <h2>印象に残っている出来事その１</h2>
            <h3>どんな出来事でしたか？</h3>
            <p><input type="text" name="event[]" id=""></p>
            <h3>いつの出来事？</h3>
            <p><input type="number" name="age[]" id="" size="4"> 歳の時</p>
            <h3>印象に残っている理由</h3>
            <p><textarea id="message" name="event_reason[]" 　cols="60" rows="5"></textarea></p>
            <h3>この出来事に点数をつけると？</h3>
            <select name="influence[]" id="">
                <option value="">--選択してね--</option>
                <option value="100">100点</option>
                <option value="90">90点</option>
                <option value="80">80点</option>
                <option value="70">70点</option>
                <option value="60">60点</option>
                <option value="50">50点</option>
                <option value="40">40点</option>
                <option value="30">30点</option>
                <option value="20">20点</option>
                <option value="10">10点</option>
                <option value="0">0点</option>
                <option value="-10">-10点</option>
                <option value="-20">-20点</option>
                <option value="-30">-30点</option>
                <option value="-40">-40点</option>
                <option value="-50">-50点</option>
                <option value="-60">-60点</option>
                <option value="-70">-70点</option>
                <option value="-80">-80点</option>
                <option value="-90">-90点</option>
                <option value="-100">-100点</option>
            </select><br><br>
            <h3>点数をつけた理由</h3>
            <p><textarea id="message" name="influence_reason[]" 　cols="60" rows="5"></textarea></p>
        </div><!-- /.life__log  -->
        <div class="life__log">
            <h2>印象に残っている出来事その2</h2>
            <h3>どんな出来事でしたか？</h3>
            <p><input type="text" name="event[]" id=""></p>
            <h3>いつの出来事？</h3>
            <p><input type=" number" name="age[]" id="" size="4"> 歳の時</p>
            <h3>印象に残っている理由</h3>
            <p><textarea id="message" name="event_reason[]" 　cols="60" rows="5"></textarea></p>
            <h3>この出来事に点数をつけると？</h3>
            <select name="influence[]" id="">
                <option value="">--選択してね--</option>
                <option value="100">100点</option>
                <option value="90">90点</option>
                <option value="80">80点</option>
                <option value="70">70点</option>
                <option value="60">60点</option>
                <option value="50">50点</option>
                <option value="40">40点</option>
                <option value="30">30点</option>
                <option value="20">20点</option>
                <option value="10">10点</option>
                <option value="0">0点</option>
                <option value="-10">-10点</option>
                <option value="-20">-20点</option>
                <option value="-30">-30点</option>
                <option value="-40">-40点</option>
                <option value="-50">-50点</option>
                <option value="-60">-60点</option>
                <option value="-70">-70点</option>
                <option value="-80">-80点</option>
                <option value="-90">-90点</option>
                <option value="-100">-100点</option>
            </select><br><br>
            <h3>点数をつけた理由</h3>
            <p><textarea id="message" name="influence_reason[]" 　cols="60" rows="5"></textarea></p>
        </div><!-- /.life__log  -->
        <div class="life__log">
            <h2>印象に残っている出来事その3</h2>
            <h3>どんな出来事でしたか？</h3>
            <p><input type="text" name="event[]" id=""></p>
            <h3>いつの出来事？</h3>
            <p><input type=" number" name="age[]" id="" size="4"> 歳の時</p>
            <h3>印象に残っている理由</h3>
            <p><textarea id="message" name="event_reason[]" 　cols="60" rows="5"></textarea></p>
            <h3>この出来事に点数をつけると？</h3>
            <select name="influence[]" id="">
                <option value="">--選択してね--</option>
                <option value="100">100点</option>
                <option value="90">90点</option>
                <option value="80">80点</option>
                <option value="70">70点</option>
                <option value="60">60点</option>
                <option value="50">50点</option>
                <option value="40">40点</option>
                <option value="30">30点</option>
                <option value="20">20点</option>
                <option value="10">10点</option>
                <option value="0">0点</option>
                <option value="-10">-10点</option>
                <option value="-20">-20点</option>
                <option value="-30">-30点</option>
                <option value="-40">-40点</option>
                <option value="-50">-50点</option>
                <option value="-60">-60点</option>
                <option value="-70">-70点</option>
                <option value="-80">-80点</option>
                <option value="-90">-90点</option>
                <option value="-100">-100点</option>
            </select><br><br>
            <h3>点数をつけた理由</h3>
            <p><textarea id="message" name="influence_reason[]" 　cols="60" rows="5"></textarea></p>
        </div><!-- /.life__log  -->
        <div class="life__log">
            <h2>印象に残っている出来事その4</h2>
            <h3>どんな出来事でしたか？</h3>
            <p><input type="text" name="event[]" id=""></p>
            <h3>いつの出来事？</h3>
            <p><input type=" number" name="age[]" id="" size="4"> 歳の時</p>
            <h3>印象に残っている理由</h3>
            <p><textarea id="message" name="event_reason[]" 　cols="60" rows="5"></textarea></p>
            <h3>この出来事に点数をつけると？</h3>
            <select name="influence[]" id="">
                <option value="">--選択してね--</option>
                <option value="100">100点</option>
                <option value="90">90点</option>
                <option value="80">80点</option>
                <option value="70">70点</option>
                <option value="60">60点</option>
                <option value="50">50点</option>
                <option value="40">40点</option>
                <option value="30">30点</option>
                <option value="20">20点</option>
                <option value="10">10点</option>
                <option value="0">0点</option>
                <option value="-10">-10点</option>
                <option value="-20">-20点</option>
                <option value="-30">-30点</option>
                <option value="-40">-40点</option>
                <option value="-50">-50点</option>
                <option value="-60">-60点</option>
                <option value="-70">-70点</option>
                <option value="-80">-80点</option>
                <option value="-90">-90点</option>
                <option value="-100">-100点</option>
            </select><br><br>
            <h3>点数をつけた理由</h3>
            <p><textarea id="message" name="influence_reason[]" 　cols="60" rows="5"></textarea></p>
        </div><!-- /.life__log  -->
        <div class="life__log">
            <h2>印象に残っている出来事その5</h2>
            <h3>どんな出来事でしたか？</h3>
            <p><input type="text" name="event[]" id=""></p>
            <h3>いつの出来事？</h3>
            <p><input type=" number" name="age[]" id="" size="4"> 歳の時</p>
            <h3>印象に残っている理由</h3>
            <p><textarea id="message" name="event_reason[]" 　cols="60" rows="5"></textarea></p>
            <h3>この出来事に点数をつけると？</h3>
            <select name="influence[]" id="">
                <option value="">--選択してね--</option>
                <option value="100">100点</option>
                <option value="90">90点</option>
                <option value="80">80点</option>
                <option value="70">70点</option>
                <option value="60">60点</option>
                <option value="50">50点</option>
                <option value="40">40点</option>
                <option value="30">30点</option>
                <option value="20">20点</option>
                <option value="10">10点</option>
                <option value="0">0点</option>
                <option value="-10">-10点</option>
                <option value="-20">-20点</option>
                <option value="-30">-30点</option>
                <option value="-40">-40点</option>
                <option value="-50">-50点</option>
                <option value="-60">-60点</option>
                <option value="-70">-70点</option>
                <option value="-80">-80点</option>
                <option value="-90">-90点</option>
                <option value="-100">-100点</option>
            </select><br><br>
            <h3>点数をつけた理由</h3>
            <p><textarea id="message" name="influence_reason[]" 　cols="60" rows="5"></textarea></p>
        </div><!-- /.life__log  -->
        <div class="life__log">
            <h2>印象に残っている出来事その6</h2>
            <h3>どんな出来事でしたか？</h3>
            <p><input type="text" name="event[]" id=""></p>
            <h3>いつの出来事？</h3>
            <p><input type=" number" name="age[]" id="" size="4"> 歳の時</p>
            <h3>印象に残っている理由</h3>
            <p><textarea id="message" name="event_reason[]" 　cols="60" rows="5"></textarea></p>
            <h3>この出来事に点数をつけると？</h3>
            <select name="influence[]" id="">
                <option value="">--選択してね--</option>
                <option value="100">100点</option>
                <option value="90">90点</option>
                <option value="80">80点</option>
                <option value="70">70点</option>
                <option value="60">60点</option>
                <option value="50">50点</option>
                <option value="40">40点</option>
                <option value="30">30点</option>
                <option value="20">20点</option>
                <option value="10">10点</option>
                <option value="0">0点</option>
                <option value="-10">-10点</option>
                <option value="-20">-20点</option>
                <option value="-30">-30点</option>
                <option value="-40">-40点</option>
                <option value="-50">-50点</option>
                <option value="-60">-60点</option>
                <option value="-70">-70点</option>
                <option value="-80">-80点</option>
                <option value="-90">-90点</option>
                <option value="-100">-100点</option>
            </select><br><br>
            <h3>点数をつけた理由</h3>
            <p><textarea id="message" name="influence_reason[]" 　cols="60" rows="5"></textarea></p>
        </div><!-- /.life__log  -->
        <div id="reasonContainer"></div>
        <input type="submit" value="送信する">
        </form>
    </section><!-- /#content__wrapper -->

    <footer>
        <p class="copyright">(C) Gawasan</p>
    </footer>

</body>

</html>