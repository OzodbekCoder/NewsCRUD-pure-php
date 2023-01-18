<?php
spl_autoload_register(function ($class_name) {
    include "source/" . $class_name . ".php";
});
