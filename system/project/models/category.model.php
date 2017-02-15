<?php

class Category_Model extends model
{
    protected static $object_class = 'Category_Object';

    public static function getTopCategories()
    {
        // prepare the query
        $query = "
            SELECT `category`.*
            FROM `category`
            WHERE `category`.`parent_id` IS NULL
        ";
        // run the query (using db class)
        $resultset = db::query($query);
        
        // retrieve all the rows as objects of type set in static::$object_class
        $objects = static::fetchObjects($resultset);

        // return the objects
        return $objects;
    }
    
}