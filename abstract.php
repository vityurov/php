<?php
/*
 * Абстрактный класс представляет частичную реализацию для классов-наследников.
 * Одной из ключевых особенностей абстрактных классов является то,
 * что мы не можем напрямую создать объекты абстрактного класса с помощью вызова его конструктора
 * Но другой особенностью абстрактных классов является то,
 * что они могут содержать абстрактные методы. Это методы, которые не имеют реализации.
 * Реализацию для них предоставляют классы-наследники.
 */

abstract class Messenger
{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function send($message);
    function close()
    {
        echo "Выход из мессенджера...";
    }
}

class EmailMessenger extends Messenger
{
    function send($message)
    {
        echo "$this->name отправляет сообщение: $message<br>";
    }
}
$outlook = new EmailMessenger("Outlook");
$outlook->send("Hello PHP 8");
$outlook->close();
?>