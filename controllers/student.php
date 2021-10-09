<?php
class Student extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('student/index');
    }
    public function registerStudent(){
        echo "has creado un nuevo alumno";
        $this->model->insert();
    }
}
?>