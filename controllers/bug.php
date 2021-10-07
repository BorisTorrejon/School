<?php
class Bug extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->message = "Ah ocurrido un error fatal";
        $this->view->render('bug/index');
    }
}
?>