<?php


class BrowseCategory
{
    private $name;
    private $description;
    private $items;
    private $key;

    /**
     * BrowseCategory constructor.
     * @param $name
     * @param $description
     * @param $items
     */
    public function __construct($name, $description, $items, $key)
    {
        $this->name = $name;
        $this->description = $description;
        $this->items = $items;
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }
}