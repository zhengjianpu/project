<?php

$bdd = Database::getDb();

class Database {

    private static $_db;

    const DB_LOGIN = 'root';
    const DB_PASSWORD = 'root';

    public static function getDb() {
        if (!self::$_db) {
            self::$_db = new PDO('mysql:host=localhost;dbname=php_project', self::DB_LOGIN, self::DB_PASSWORD
                , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        }

        return self::$_db;
    }
} 