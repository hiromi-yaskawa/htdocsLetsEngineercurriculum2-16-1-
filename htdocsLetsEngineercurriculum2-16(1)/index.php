<?php
$testFile ="test.txt";
$contents="今日も一日頑張りましょう。";

if(is_writable($testFile)){
//書き込み不可のときの処理
//対象のファイルを開く
$fp =fopen($testFile,"w");
//対象のファイルに書き込む
fwrite($fp,$contents);
//ファイルを閉じる
fclose($fp);
//書き込みした旨の表示
echo "あいうえおかきくけこ";
} else {
//書き込み不可のときの処理
echo "Merci beaucoup!!";
exit;
}
?>

<br>
<?php
$test_file ="text2.txt";
$contents="Hello!!";

if(is_readable($test_file)){
//読み込み不可のときの処理
//対象のファイルを開く
$fp = fopen($test_file,"r");
//開いたファイルから１行ずつ読み込む
while ($line =fgets($fp)){
//改行コード込みで１行ずつ出力
echo $line.'<br>';
}
//ファイルを閉じる
fclose($fp);
} else{
//読み込み不可のときの処理
echo "Best friend!!";
exit;
}
?>
