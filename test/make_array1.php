<pre>
<?php
$friends = ['はるき', 'かおる', 'ひでと'];
//追加
$friends[] = 'まさとし';
//キーは飛ばして追加できる
$friends[6] = 'たろう';
//上書き
$friends[2] = '二郎';
var_dump($friends);
?>
</pre>
