<?php
class Student extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('student/index');
    }
    public function registerStudent(){
        $matricula  = $_POST['matricula'];
        $name       = $_POST['name'];
        $surname    = $_POST['surname'];
        $this->model->insert([
            'matricula' => $matricula,
            'name'      => $name,
            'surname'   => $surname
        ]);
    }
}
?>