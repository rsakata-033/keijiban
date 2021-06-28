<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
    $stmt = $pdo->query("select*from 4each_keijiban");

   
    ?>

    <header>
        <div class="logo">
            <img src="4eachblog_logo.jpg">
        </div>

        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="main_contents">
            <h1>プログラミングに役立つ掲示板</h1>

            <div class="form">
            <form method="post" action="insert.php">
                <h2>入力フォーム</h2>
                <p>ハンドルネーム</p>
                <input type="text" name="handlename">
                <p>タイトル</p>
                <input type="text" name="title">
                <p>コメント</p>
                <textarea name="comments" rows="4" cols="40" ></textarea>
                <br>
                <input type="submit" value="投稿する">
            </form>
            </div>

            <?php

            while($row = $stmt->fetch()){

            echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                echo"<div class='contents'>";
                echo $row['comments'];
                 echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                echo"</div>";
            echo"</div>";
            }
            ?>
            





        </div>

        <div class="sidebar">
            <h1>人気の記事</h1>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>

            <h1>オススメリンク</h1>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketのダウンロード</li>
            </ul>

            <h1>カテゴリ</h1>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </main>

    <footer>
        <div class="foot">
            copyright © internous|4each blog the which provides A to Z about programming.
        </div>
    </footer>

</body>

</html>