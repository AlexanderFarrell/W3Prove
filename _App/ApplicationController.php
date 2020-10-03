<?php

require_once('_Controller/_Home/HomeController.php');

class ApplicationController
{
    private static $currentScreen;
    const templatePhp = "index.php";

    public static function SwitchScreen($newPageController) {
        //if (is_subclass_of($newPageController, 'Page Controller')){
            static::$currentScreen = $newPageController;
        //}
        //else {
        //    throw new Exception("Object passed is not a PageController");
        //}

        /*$path = '_Controller\\' . $newScreenFilename;

        //if (file_exists($path)) {
            self::$currentScreen = $path;

            //$loadedTemplate = file_get_contents(self::templatePhp);

            //echo file_get_contents(self::templatePhp);
            //include("../index.php");

            //echo $loadedTemplate;

        //} else {
         //   throw new Exception("File " . $newScreenFilename . " does not exist. Path: " . $path);
        //}*/
    }

    /**
     * @return string
     */
    public static function getCurrentScreen()
    {
        if (static::$currentScreen == null){
            static::$currentScreen = new HomeController();
        }

        return static::$currentScreen;
    }
}