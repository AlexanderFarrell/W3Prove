<?php


class BreadcrumbItem
{
    public $itemLabel;
    public $pageToGoTo = "browse";
    public $additionalGet;

    /**
     * BreadcrumbItem constructor.
     * @param $itemLabel
     * @param $pageToGoTo
     * @param $additionalGet
     */
    public function __construct($itemLabel, $pageToGoTo, $additionalGet)
    {
        $this->itemLabel = $itemLabel;
        $this->pageToGoTo = $pageToGoTo;
        $this->additionalGet = $additionalGet;
    }

    public function Display(){
        $additional = ($this->additionalGet) ? '&category=' . $this->additionalGet : '';
        echo '<div class="col-sm-3 buttonBackgroundColor breadcrumbItem">
<a href="template.php?newscreen=' . $this->pageToGoTo . $additional . '">' . $this->itemLabel . '</a></div>';
    }
}