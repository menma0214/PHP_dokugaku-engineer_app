<?php

echo '読書ログを登録してください' . PHP_EOL;
echo '書籍名：';
//下記2つは標準入力を読み取るコード
// echo fgets(STDIN);
//変数 = $変数名
$title = fgets(STDIN);

echo '登録が完了しました' . PHP_EOL . PHP_EOL;

echo '読書ログを表示します' . PHP_EOL;
echo '書籍名：' . $title . PHP_EOL;

// echo '書籍名；銀河鉄道の夜' . PHP_EOL;
// echo '著者名：宮沢賢治' . PHP_EOL;
// echo '読書状況：読了' . PHP_EOL;
// echo '評価：5' . PHP_EOL;
// echo '感想：ほんとうの幸せとは何だろうかと考えさせられる作品だった。' PHP_EOL;
