<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"type="text/css"href="kakuninn.css">
    <title>掲示板</title>
</head>

<body>
<?php
mb_internal_encoding("UTF8");
$pdo=new PDO("mysql:dbname=lessonkuriki02;host=localhost;","root","mysql");
$stmt=$pdo->query("select * from 4each_keijiban");
?>
    
    <img src="4eachblog_logo.jpg"height="75px"width="150px">

<header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
</header>

<div class="main">
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>

        <form method="post"action="KAKU.php">
            <h2>入力フォーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text"class="text"size="35"name="HA_name">
            </div>
            <div>
                <label>タイトル</label>
                <br>
                <input type="text"class="text"size="35"name="HA_title">
            </div>
            <div>
                <label>コメント</label>
                <br>
                    <textarea cols="60"rows="10"name="HA_comments"></textarea>
            </div>
            <div>
                <input type="submit"class="aaa"value="送信する">
            </div>
        </form>
        
<?php
        
while($row = $stmt->fetch()){
echo"<div class='sita'>";
echo"<h3>".$row['title']."</h3>";
echo"<div class='contents'>";
echo $row['comments'];
echo"<div class='handlename'>posted by".$row['handlename']."</div>";
echo"</div>";
echo"</div>";
}
?>
        
    </div>
    <div class="right">
        <div class="migi">
            <h3>人気の記事</h3>
            <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタTop5</li>
            <li>HTMLの基礎</li>
            </ul>
        </div>
        <div class="migi">
            <h3>オススメリンク</h3>
            <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Edipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
            </ul>
        </div>
        <div class="migi">
            <h3>カテゴリ</h3>
            <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
            </ul>
        </div>
    </div>
</div>
<footer>copyright internous | 4each blog is the one wgich provides A to Z about programming.</footer>
</body>
</html>