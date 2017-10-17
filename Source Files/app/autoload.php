<?php
    spl_autoload_register(function($class){
        $corePath = $GLOBALS["config"]["path"]["core"];
        $appPath = $GLOBALS ["config"]["path"]["core"];
        if(file_exists("{$corePath}abstracts/{$class}.php")){
            require_once "{$corePath}abstracts/{$class}.php";
        } else if (file_exists("{$corePath}classes/{$class}.php")){
            require_once "{$corePath}classes/{$class}.php";
        } else if (file_exists("{$corePath}interfaces/{$class}.php")){
            require_once "{$corePath}interfaces/{$class}.php";
        } else if (file_exists("{$appPath}libs/{$class}.php")){
            require_once "{$appPath}libs/{$class}.php";
        } else if (file_exists("{$appPath}models/{$class}.php")){
            require_once "{$appPath}models/{$class}.php";
        } else if (file_exists("{$appPath}interfaces/{$class}.php")){
            require_once "{$appPath}interfaces/{$class}.php";
        } else if (file_exists("{$appPath}abstracts/{$class}.php")){
            require_once "{$appPath}abstracts/{$class}.php";
        } else if (file_exists("{$appPath}controllers/{$class}.php")){
            require_once "{$appPath}controllers/{$class}.php";
        }
    });