<?php
/**
 * Created by PhpStorm.
 *
 * describe:  index.php
 * User: hongwenwu
 * Date: 2019/11/5
 * Time: 18:11
 */
require_once 'Collection.php';
require_once 'Book.php';

$books = new Collection();
$books->addBook(new Book('book1','author1'));
$books->addBook(new Book('book2','author2'));
$books->addBook(new Book('book3','author3'));

foreach ($books as $key=>$book){
    echo $book->getAuthor()."=>".$book->getAuthor().PHP_EOL;
}

echo count($books);