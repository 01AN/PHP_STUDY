<?php
//２重ループを使い、0から99までを表示するプログラムを書きなさい
//ただし、一列に表示する数字の数は１０個とし、それ以降は改行すること
//※２重ループとはループ文の中にさらにループ文を記載すること
for ($i = 1; $i <= 100; $i++)

if ($i % 10 == 0){
   echo "$i\n";
}else {
    echo "$i";
    echo " ";
}
?>
