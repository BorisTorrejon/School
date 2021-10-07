<?php
class Contact extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('contact/index');
    }
}
?>