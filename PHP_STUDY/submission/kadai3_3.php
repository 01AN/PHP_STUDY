<?php
/*. 数値の入った配列を引数として受け取り、配列内の要素をすべて二倍にして配列として返却するdoubleArr関数。
ただし引数が配列でなかった場合はfalseを返却すること
３のイメージ
[2,3,4] => [4,6,8]*/
$result=doubleArr(array(1,2,3));
if(!$result){
    echo "因数が不正です";
    return;
}

foreach($result as $num){
    echo $num;
    echo "\n";
}

function doubleArr($array){
    if(is_array($array)){
        $arr = array();
        foreach($array as $val){
            $arr[] = $val * 2;
        }
        return $arr;
    }
    else{
        return false;
    }
}
?>