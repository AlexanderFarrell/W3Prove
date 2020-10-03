<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '\_Controller\PageController.php');

class HomeController extends PageController
{
    public function SetupScreen()
    {
        TemplateManager::GetTitleDisplay()->setTitleText("Welcome");
        TemplateManager::GetTitleDisplay()->setSubtitleText("We hope you enjoy our collections.");
    }

    public function GetDisplayScript()
    {
        return "_Home\home.php";
    }
}