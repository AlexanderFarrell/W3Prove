<?php
session_start();

try {
    require_once("_Model/Cart.php");
    Cart::Initialize();
    include("template.php");
} catch (Exception $e){
    echo $e->getMessage();
}