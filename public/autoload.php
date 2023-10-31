<?php session_start(); ?>
<?php
    spl_autoload_register(function ($classe){
        
        $file = lcfirst($classe).".php";
        $folderApp = "../app/".lcfirst($classe).".php";
        $folderControllers = "../app/controllers/".lcfirst($classe).".php";
        $folderModels = "../app/models/".lcfirst($classe).".php";
        $folderDao = "../app/dao/".lcfirst($classe).".php";
        $folderViews = "../app/views/".lcfirst($classe).".php";
        $folderCore = "../app/core/".lcfirst($classe).".php";
        $folderConfig = "../app/config/".lcfirst($classe).".php";
        

        // autoloads 
            if(file_exists($file)){
                require_once $file;
            }

            if(file_exists($folderApp)){
                require_once $folderApp;
            }

            if(file_exists($folderControllers)){
                require_once $folderControllers;
            }

            if(file_exists($folderDao)){
                require_once $folderDao;
            }

            if(file_exists($folderModels)){
                require_once $folderModels;
            }

            if(file_exists($folderViews)){
                require_once $folderViews;
            }

            if(file_exists($folderCore)){
                require_once $folderCore;
            }

            if(file_exists($folderConfig)){
                require_once $folderConfig;
            }
            
        // end
    });
?>

