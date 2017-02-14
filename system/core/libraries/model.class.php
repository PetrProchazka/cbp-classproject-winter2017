<?php

class model
{
    protected static $object_class = 'stdClass';

    public static function fetchObjects($statement)
    {
        $statement->setFetchMode(PDO::FETCH_CLASS, static::$object_class);

        return $statement->fetchAll();
    }
}