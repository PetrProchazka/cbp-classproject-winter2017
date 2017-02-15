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

    public static function getSubcategories($parent_category_id)
    {
        // prepare the query
        $query = "
            SELECT `category`.*
            FROM `category`
            WHERE `category`.`parent_id` = ?
        ";
        // run the query (using db class)
        $resultset = db::query($query, array($parent_category_id));
        
        // retrieve all the rows as objects of type set in static::$object_class
        $objects = static::fetchObjects($resultset);

        // return the objects
        return $objects;
    }
    
    /**
     * retrieves 1 object of the class Category_Object
     * based on it's id column
     */
    public static function retrieveById($id)
    {
        $query = "
            SELECT `category`.*
            FROM `category`
            WHERE `category`.`id` = ?
        ";
        $resultset = db::query($query, array(
            $id // 1st item of the array - will replace the 1st ? in the query
        ));

        $object = static::fetchObject($resultset);

        return $object;
    }
}