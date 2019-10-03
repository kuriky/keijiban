<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"type="text/css"href="kakuninn.css">
    <title>掲示板</title>
</head>

<body>
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

        <form method="post"action="kakuninn.php">
            <h2>入力フォーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text"class="text"size="35"name="handlename">
            </div>
            <div>
                <label>タイトル</label>
                <br>
                <input type="text"class="text"size="35"name="title">
            </div>
            <div>
                <label>コメント</label>
                <br>
                    <textarea cols="60"rows="10"name="comments"></textarea>
            </div>
            <div>
                <input type="submit"class="aaa"value="送信する">
            </div>
        </form>

        <div class="sita">
            <h3>タイトル</h3>
            記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身
            <br>
            posted by 通りすがり
        </div>
        <div class="sita">
            <h3>タイトル</h3>
            記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身
            <br>
            posted by 通りすがり
        </div>
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