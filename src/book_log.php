<?php

echo '読書ログを登録してください' . PHP_EOL;
//下記2つは標準入力を読み取るコード
// echo fgets(STDIN);
//$変数名:変数
//trim():半角スペース、タブがホワイトスペースになる
echo '書籍名：' . PHP_EOL;
$title = trim(fgets(STDIN));

echo '著者名：' . PHP_EOL;
$author = trim(fgets(STDIN));

echo '読書状況（未読,読んでいる,読了）：' . PHP_EOL;
$status = trim(fgets(STDIN));

echo '評価（5点満点の整数）：' . PHP_EOL;
$score = trim(fgets(STDIN));

echo '感想：' . PHP_EOL;
$summary = trim(fgets(STDIN));

echo '登録が完了しました' . PHP_EOL . PHP_EOL;

echo '読書ログを表示します' . PHP_EOL;
//「 . 」で"書籍名：{$title}"と同じく変数と文字列を連結できる。
echo '書籍名：' . $title . PHP_EOL;
echo '著者名：' . $author . PHP_EOL;
echo '読書状況（未読,読んでいる,読了）：' . $status . PHP_EOL;
echo '評価（5点満点の整数）：' . $score . PHP_EOL;
echo '感想：' . $summary . PHP_EOL;

// echo '書籍名；銀河鉄道の夜' . PHP_EOL;
// echo '著者名：宮沢賢治' . PHP_EOL;
// echo '読書状況：読了' . PHP_EOL;
// echo '評価：5' . PHP_EOL;
// echo '感想：ほんとうの幸せとは何だろうかと考えさせられる作品だった。' PHP_EOL;
