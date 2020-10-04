<?php

require_once '_View/HeaderPage.php';
require_once '_View/TitleDisplay.php';
require_once '_View/Breadcrumb.php';

class TemplateManager
{
    private static $header;
    private static $titleDisplay;
    private static $breadcrumb;

    public static function GetHeader(){
        if (static::$header == null){
            static::$header = new HeaderPage("Online Store");
        }

        return static::$header;
    }

    /public static function GetTitleDisplay(){
        if (static::$titleDisplay == null){
            static::$titleDisplay = new TitleDisplay();
        }

        return static::$titleDisplay;
    }

    public static function GetBreadcrumb(){
        if (static::$breadcrumb == null){
            static::$breadcrumb = new Breadcrumb();
        }

        return static::$breadcrumb;
    }

    public function __construct()
    {
    }
}