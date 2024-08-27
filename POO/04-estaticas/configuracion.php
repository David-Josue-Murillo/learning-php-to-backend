<?php

class Configuracion {
    public static $color;
    public static $newsLetter;
    public static $entorno;

    public static function setColor($color) {
        self::$color = $color;
    }

    public static function getColor() {
        return self::$color;
    }

    public static function setNewsLetter($newsLetter) {
        self::$newsLetter = $newsLetter;
    }

    public static function getNewsLetter() {
        return self::$newsLetter;
    }

    public static function setEntorno($entorno) {
        self::$entorno = $entorno;
    }  

    public static function getEntorno() {
        return self::$entorno;
    }
}