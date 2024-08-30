<?php

function controllers__autoload($className) {
    include 'controllers/'. $className . '.php';
}

spl_autoload_register("controllers__autoload");