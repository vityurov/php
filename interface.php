<?
/*
 * Интерфейс определяет абстрактный дизайн, которому должен соответствовать применяющий его класс.
 * Интерфейс определяет методы без реализации. А класс затем применяет интерфейс и реализует эти методы.
 * Применение интерфейса гарантирует, что класс имеет определенный функционал, описываемый интерфейсом.
 */

interface Camera
{
    function makeVideo();
    function makePhoto();
}
interface Messenger
{
    function sendMessage($message);
}

class Mobile implements Camera, Messenger
{
    function makeVideo(){ echo "Запись видео";}
    function makePhoto(){ echo "Съемка фото";}
    function sendMessage($message) {echo "Отправка сообщения $message";}
}
$iphone12 = new Mobile();

$iphone12->makeVideo();
$iphone12->makePhoto();
$iphone12->sendMessage("123");
?>