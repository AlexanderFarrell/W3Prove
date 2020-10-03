<?php


class CatalogManager
{
    private static $categories;

    /**
     * @return mixed
     */
    public static function getCategories()
    {
        if (self::$categories == null) {
            $e = new Product('E', 15, 'Description Here', 'e.jpg');
            $f = new Product('F', 25, 'Description Here', 'f.jpg');
            $g = new Product('G', 35, 'Description Here', 'g.jpg');
            $h = new Product('H', 50, 'Description Here', 'h.jpg');
            $ruby = new BrowseCategory('Ruby Collection', 'Red', array($e, $f, $g, $h), 'ruby');

            $i = new Product('I', 5, 'Description Here', 'i.jpg');
            $j = new Product('J', 10, 'Description Here', 'j.jpg');
            $k = new Product('K', 30, 'Description Here', 'k.jpg');
            $l = new Product('L', 55, 'Description Here', 'l.jpg');
            $amethyst = new BrowseCategory('Amethyst Collection', 'Mysterious Purple', array($i, $j, $k, $l), 'amethyst');

            self::$categories = array("ruby" => $ruby, "amethyst" => $amethyst);
        }

        return self::$categories;
    }

    /**
     * @param mixed $categories
     */
    public static function setCategories($categories)
    {
        self::$categories = $categories;
    }
}