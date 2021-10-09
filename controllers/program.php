<?php
class Program extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function render()
    {
        $this->view->render('./program/index');
    }
}
?>