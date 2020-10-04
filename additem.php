<?php
include('_Data/CatalogManager.php');
include('_Model/Cart.php');

echo var_dump($_POST);
foreach ($_POST as $itemName){
    echo 'worked';
    foreach ($itemName as $itemm)
    {
        if (($item = CatalogManager::findProduct($itemm)) != null){
            echo 'foundItem';
            Cart::addItem($item);
        }
    }

}

include('template.php');