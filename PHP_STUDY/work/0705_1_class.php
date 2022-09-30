<?php
//ファイル名 Main.php
require "Book.php";

//Bookクラスをインスタンス化
$book = new Book();

$book ->title = "PHP入門";
$book ->auther = "○○書店";
$book ->price = "1500";

echo "$book->title\n";
echo "$book->auther\n";
echo "$book->price 円\n";

//Bookクラスをインスタンス化2
$book2 = new Book();

$book2 ->title = "PHP入門";
$book2 ->auther = "○○書店";
$book2 ->price = "1500";

echo "$book2->title\n";
echo "$book2->auther\n";
echo "$book2->price 円\n";
?>


<?php
// ファイル名 Book.php
class Book{
    //↓フィールド
    /*　タイトル　*/
    public $title;
    /*　著者　*/
    public $auther;
    /*　価格　*/
    public $price;
    //↑フィールド
}
?>