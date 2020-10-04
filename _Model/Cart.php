<?php


class Cart
{
    public static function TotalCost() {
        $retval = 0;

        foreach (static::getItems() as &$item){
            $retval += $item->price;
        }

        return $retval;
    }

    public static function Initialize(){
        $_SESSION['items'] = array();
    }

    /**
     * @return mixed
     */
    public static function getItems()
    {
        if ($_SESSION['items'] = ''){
            $_SESSION['items'] = array();
        }

        return $_SESSION['items'];
    }

    public static function addItem($item){
        array_push($_SESSION['items'], $item);
    }

    public static function removeItem($item){
        if ($key = array_search($item->name, $_SESSION['items']) != false){
            unset($item);
        }
    }
}