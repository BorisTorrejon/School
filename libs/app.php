<?php
require_once './controllers/bug.php';
class App{
    function __construct()
    {
        $url = $_GET['url'];
        //remove unnecessary slashes
        $url = rtrim($url,'/');
        //create an array of the elements separated by a slash
        $url = explode('/',$url);
        $fileController = './controllers/'.$url[0].'.php';
        if (file_exists($fileController))
        {
            require_once $fileController;
            $controller = new $url[0];
            //if $url[1] is declared, invoke the function
            if(isset($url[1]))
            {
                $controller->{$url[1]}();
            };
        }else
        {
            $controller = new Bug();
        };
    }
}
?>