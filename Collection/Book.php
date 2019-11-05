<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Book.php
 * User: hongwenwu
 * Date: 2019/11/5
 * Time: 18:10
 */

class Book
{
    private $author;
    private $title;
    public function __construct(string $title, string $author)
    {
        $this->author = $author;
        $this->title = $title;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
}