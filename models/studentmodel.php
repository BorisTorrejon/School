<?php
include_once './models/student.php';
class StudentModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($data)
    {
        //insert in database
        try
        {
            //bring PDO
            $query = $this->db->connect()->prepare(
                'INSERT INTO STUDENTS 
                (STU_ID, STU_NAME, STU_SURNAME) 
                VALUES 
                (:matricula,:names,:surname)'
            );
            $query->execute([
                'matricula' =>$data['matricula'],
                'names'     =>$data['name'],
                'surname'   =>$data['surname']
            ]);
            return true;
        }catch(PDOException)
        {
            return false;
        };
    }
    public function get()
    {
        $students=[];
        try
        {
            $query = $this->db->connect()->query(
                'SELECT * FROM STUDENTS;'
            );
            while($row = $query->fetch()){
                //create object student
                $student = new StudentM();
                $student->matricula = $row['stu_id'];
                $student->name = $row['stu_name'];
                $student->surname = $row['stu_surname'];
                array_push($students,$student);
            }
            return $students;
        }catch(PDOException $e)
        {
            return [];
        };
    }

}
?>