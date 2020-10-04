<?php


abstract class PageController
{
    abstract public function SetupScreen();
    abstract public function GetDisplayScript();

    public function Display(){
        echo file_get_contents('_Controller/' . $this->GetDisplayScript());
    }
}