<?php


class Cart
{
    private static $items = array();

    public static function TotalCost() {

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
    }

    public static function removeItem($item){
        if ($key = array_search($item->name, static::$items) != false){
            unset($item);
        }
    }
}