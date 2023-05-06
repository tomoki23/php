<?php
//指定日時のタイムスタンプ作成
$blog = mktime(15, 30, 0, 5, 6, 2023);

if ($blog > time() - 86400) {
    echo "NEW";
}
