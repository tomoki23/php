<?php
$age = 23;
if ($age >= 20) {
    echo "お買い上げありがとうございます！";
} else {
    echo "購入できません";
}

echo "<br>";

if ($age < 20) {
    echo "購入できません";
} else if ($age <= 25) {
    echo "年齢確認が必要です";
} else {
    echo "購入できます";
}
