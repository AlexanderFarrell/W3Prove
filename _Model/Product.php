<?php


class Product
{
    public $name;
    public $price;
    public $description;
    public $imageLink;

    /**
     * Product constructor.
     * @param $name
     * @param $price
     * @param $description
     * @param $imageLink
     */
    public function __construct($name, $price, $description, $imageLink)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->imageLink = $imageLink;
    }
}