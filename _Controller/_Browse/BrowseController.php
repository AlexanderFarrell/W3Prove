<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Model/BrowseCategory.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/_Controller/PageController.php');

class BrowseController extends PageController
{
    public $category;

    /**
     * BrowseController constructor.
     * @param $category
     */
    public function __construct($category)
    {
        if (is_a($category, 'BrowseCategory')){
            $this->category = $category;
        }
        else{
            var_dump($category);
            throw new Exception("Need to pass a BrowseCategory Type as a parameter");
        }
    }

    public function SetupScreen()
    {
        TemplateManager::GetHeader()->setTitle("Online Store - " . $this->category->getName());
        $titleDisplay = TemplateManager::GetTitleDisplay();
        $titleDisplay->setTitleText($this->category->getName());
        $titleDisplay->setSubtitleText($this->category->getDescription());
    }

    public function GetDisplayScript()
    {
        return '/_Browse/browse.php';
    }

    public function Display()
    {
        $this->DisplayItems();
        //parent::Display(); // TODO: Change the autogenerated stub
    }

    private function DisplayItems(){
        foreach ($this->category->getItems() as $item){
            echo '<form action="additem.php" method="post">';
            echo $item->name;
            echo '<br>';
            echo $item->description;
            echo '<br>';
            echo $item->price;
            echo '<br>';
            echo '<input type="submit" name="' . $item->name . '[]" value="' . $item->name . '">';
            echo '</form>';
        }
    }
}