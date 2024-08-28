<?php

function app__autoload($className) {
    require_once 'clases/' . $className . '.php';
}

spl_autoload_register("app__autoload");