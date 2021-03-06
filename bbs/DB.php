<?php

class DB
{
    private static $db = null;

    private static function getDB()
    {
        if(is_null(self::$db)) { //db가 생성 안되어있다면
            self::$db = new \PDO(
                "mysql:host=www.yydhsoft.com; dbname=machine; charset=utf8mb4;",
                "machine",
                "1234"
            );
        }
        return self::$db;
    }

    public static function execute($sql , $data = [])
    {
        $q = self::getDB()->prepare($sql);
        $q->execute($data);
        return $q;
    }

    public static function fetch($sql , $data =[] , $mode = \PDO::FETCH_OBJ) {
        return self::execute($sql , $data)->fetch($mode);
    }
    public static function fetchAll($sql , $data =[] , $mode = \PDO::FETCH_OBJ) {
        return self::execute($sql , $data)->fetchAll($mode);
    }

}