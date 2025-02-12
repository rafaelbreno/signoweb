<?php


namespace SW\Model;


use App\Connection;

class Container
{
    public static function getModel($model)
    {
        $class = "\\App\\Models\\" . ucfirst($model);

        $conn = Connection::getDB($model);

        return new $class($conn);

    }
}