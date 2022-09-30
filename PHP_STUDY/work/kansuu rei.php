<?php
$result = add(3,5);
echo $result;

echo hoge();

sendMessage("test");

fuga();

baz();

function add($x, $y) {
    return $x + $y;
}

function hoge() {
    return "hoge";
}

function sendMessage($message) {
    echo $message;
}

function fuga() {
    echo "fuga";
}

function baz() {
    return;
    echo "baz";
}
?>