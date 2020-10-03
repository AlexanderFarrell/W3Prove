<?php

require_once('ApplicationController.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\_Controller\_Browse\BrowseController.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\_Controller\_Home\HomeController.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\_Controller\_Checkout\CheckoutController.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\_Controller\_ViewCart\ViewCartController.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\_Data\CatalogManager.php');

if (isset($_GET['newscreen'])){
    $selection = $_GET['newscreen'];

    $pageController = "";
    switch ($selection) {
        case 'browse':
            $categories = CatalogManager::getCategories();
            $pageController = new BrowseController(CatalogManager::getCategories()[$_GET['category']]);
            break;
        case 'cart':
            $pageController = new ViewCartController();
            break;
        case 'checkout':
            $pageController = new CheckoutController();
            break;
        default:
            $pageController = new HomeController();
            break;
    }

    ApplicationController::SwitchScreen($pageController);
}
