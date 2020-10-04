<?php


class Cart
{
    private static $items = array();

    public static function TotalCost() {
        $retval = 0;

        foreach (static::$items as &$item){
            $retval += $item->price;
        }

        return $retval;
    }

    /**
     * @return mixed
     */
    public static function getItems()
    {
        return self::$items;
    }

    public static function addItem($item){
        array_push(static::$items, $item);
        echo var_dump(static::getItems());
    }

    public static function removeItem($item){
        if ($key = array_search($item->name, static::$items) != false){
            unset($item);
        }
    }
}