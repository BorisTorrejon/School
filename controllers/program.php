<?php
class Program extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('program/index');
    }
}
?>