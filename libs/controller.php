<?php
class Controller
{
    function __construct()
    {
        $this->view = new View();
    }
    //create the connection to database
    function loadModel($model)
    {
        $url='./models/'.$model.'model.php';
        if(file_exists($url))
        {
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName();
        };
    }
}
?>