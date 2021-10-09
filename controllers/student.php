<?php
class Student extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje="";
    }
    function render()
    {
        $this->view->render('./student/index');
    }
    public function registerStudent(){
        $matricula  = $_POST['matricula'];
        $name       = $_POST['name'];
        $surname    = $_POST['surname'];
        
        if ($this->model->insert([
            'matricula' => $matricula,
            'name'      => $name,
            'surname'   => $surname
        ]))
        {
            $mensaje= "Alumno Creado con exito.";
        }
        else
        {
            $mensaje= "La Matricula ya Existe.";
        };
        $this->view->mensaje=$mensaje;
        $this->render();
    }
}
?>