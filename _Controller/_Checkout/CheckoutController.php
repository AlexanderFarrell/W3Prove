<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Controller/PageController.php');

class CheckoutController extends PageController
{
    public function SetupScreen()
    {
        // TODO: Implement SetupScreen() method.
    }

    public function GetDisplayScript()
    {
        return "checkout.php";
    }
}