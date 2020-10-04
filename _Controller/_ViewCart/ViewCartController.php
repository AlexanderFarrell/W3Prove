<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Controller/PageController.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Model/Cart.php');

class ViewCartController extends PageController
{
    public function SetupScreen()
    {
        TemplateManager::GetTitleDisplay()->setTitleText("Your Cart");
        TemplateManager::GetTitleDisplay()->setSubtitleText('Total is $' . Cart::TotalCost());
    }

    public function GetDisplayScript()
    {
        return '_ViewCart/viewCart.php';
    }
}