<?php
class Mission extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('mission/index');
    }
}
?>