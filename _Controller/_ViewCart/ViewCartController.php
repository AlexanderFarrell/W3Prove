<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Controller/PageController.php');

class ViewCartController extends PageController
{
    public function SetupScreen()
    {
        // TODO: Implement SetupScreen() method.
    }

    public function GetDisplayScript()
    {
        return '_ViewCart/viewCart.php';
    }
}