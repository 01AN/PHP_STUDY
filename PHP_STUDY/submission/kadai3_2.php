<?php
//2. 引数として受け取った値が数値であればtrueをそれ以外ならfalseを返却するisNumber関数
$val = 12;
    if (isNumber($val)){
        echo "valは数字です";
    }else {
        echo "valは数字ではありません";
    }

function isNumber($val){
    $data = is_numeric($val);
    return $data == " true";
}
?>