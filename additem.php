<?php
include('_Data/CatalogManager.php');
include('_Model/Cart.php');

foreach ($_POST as $itemName){
    foreach ($itemName as $itemm)
    {
        if (($item = CatalogManager::findProduct($itemm)) != null){
            Cart::addItem($item);
        }
    }
}

include('template.php');