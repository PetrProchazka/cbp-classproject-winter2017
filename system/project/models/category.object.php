<?php

class Category_Object
{
    /*
    // as the object is being created from the resultset, these properties
    // are automatically created and initialized with their values
    public $id = 1;
    public $parent_id = null;
    public $uri = 'pcs-laptops';
    public $name = 'PCs & Laptops';
    public $description = '...';
    */

    public function getUrl()
    {
        return url::to('category', array('id' => $this->id));
    }
    
}