<?php
class DB
{
  static $db = null;
  static function conn()
  {
    return self::$db ??= new PDO("mysql:host=localhost;dbname=c_module;charset=utf8mb4;", "root", "", [19 => 2, 3 => 2, 20 => false]);
  }
  static function __callStatic($name, $arguments)
  {
    $st = self::conn()->prepare($arguments[0]);
    $st->execute($arguments[1] ?? []);
    return match ($name) {
      "exec" => self::conn()->LastInsertId(),
      "fetch" => $st->fetch(),
      "fetchAll" => $st->fetchAll(),
      "run" => $st->rowCount(),
    };
  }
}
