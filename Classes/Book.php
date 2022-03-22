<?php
require_once 'Classes/Product.php';

class Book extends Product
{
    public string $author;
    public int $pagesCount;

    public function __construct(string $name, float $price, string $author, int $pagesCount)
    {
        parent::__construct($name, $price);
        $this->author = $author;
        $this->pagesCount = $pagesCount;
    }


    public function getFullPrice(): float
    {
        return $this->price * 1.055;
    }
}