<?php
//4ex. 引数として受け取った数値すべてを合計して返却する関数sum。ただし引数はいくつでも送れるようにすること

//++++++++++++ここから+++++++++++++++++++++
$result = sum(1,2,3,4,5,40);
echo $result;// 15
//++++++++++++ここまでは変更しない+++++++++++++++++++++

function sum(...$score){
    $sumscore = 0;
    
    foreach ($score as $val){
        $sumscore += $val;
    }
    
    return $sumscore;
}
 
?>