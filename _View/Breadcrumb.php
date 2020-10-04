<?php

require_once('BreadcrumbItem.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Data/CatalogManager.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Model/Product.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Model/BrowseCategory.php');

class Breadcrumb
{
    private $items;

    /**
     * Breadcrumb constructor.
     */
    public function __construct()
    {
        /*$this->items = array(
            new BreadcrumbItem("Sapphire Collection", "browse"),
            new BreadcrumbItem("Ruby Collection", "browse"),
            new BreadcrumbItem("Amethyst Collection", "browse")
        );*/

        $this->items = array();

        array_push($this->items, new BreadcrumbItem('Home', 'home', null));

        foreach (CatalogManager::getCategories() as &$category){
            array_push($this->items, new BreadcrumbItem($category->getName(), 'browse', $category->getKey()));
        }

        array_push($this->items, new BreadcrumbItem('View Cart', 'cart', null));
    }

    public function Display(){
        echo '<div class="row">';

        foreach ($this->items as &$breadcrumbItem){
            $breadcrumbItem->Display();
        }

        echo '</div>';
    }
}
?>

