//ファイル名　Main.php
<?php
require "Book.php";

//Bookクラスをインスタンス化
$book = new Book("PHP入門","○○書店","1500");

//$book->title = "javaaaaaaaaaaa";

echo $book->getTitle() . "\n";
echo $book->getAuther() . "\n";
echo $book->getPrice() . "\n";
?>


//ファイル名　Book.php
<?php
class Book{
    
    //↓フィールド
    /*　タイトル　*/
    private $title;
    /*　著者　*/
    private $auther;
    /*　価格　*/
    private $price;
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
    
    function getTitle(){
        return $this->title;
    }
    
    function getAuther(){
        return $this->auther;
    }
    
    function getPrice(){
        return $this->price;
    }
}
?>

