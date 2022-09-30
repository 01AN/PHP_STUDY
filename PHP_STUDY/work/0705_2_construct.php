//ファイル名 Main.php
<?php
require "Book.php";

//Bookクラスをインスタンス化
$book = new Book("PHP入門","○○書店","1500");

echo "$book->title\n";
echo "$book->auther\n";
echo "$book->price 円\n";

//Bookクラスをインスタンス化2
$book2 = new Book("java入門","××書店","2000");

echo "$book2->title\n";
echo "$book2->auther\n";
echo "$book2->price 円\n";
?>

//ファイル名 Book.php
<?php
class Book{
    
    //↓フィールド
    /*　タイトル　*/
    public $title;
    /*　著者　*/
    public $auther;
    /*　価格　*/
    public $price;
    //↑フィールド
    
    /*
    コンストラクタ
    */

    function __construct($title,$auther,$price){
        echo "new したよ\n";
        $this->title = $title;
        $this->auther = $auther;
        $this->price = $price;
    }
}
?>