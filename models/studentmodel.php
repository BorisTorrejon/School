<?php
class StudentModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($data)
    {
        //insert in database
        //bring PDO
        $query = $this->db->connect()->prepare(
            'INSERT INTO STUDENTS 
            (STU_ID, STU_NAME, STU_SURNAME) 
            VALUES 
            (:matricula,:names,:surname)');
        $query->execute([
            'matricula' =>$data['matricula'],
            'names'     =>$data['name'],
            'surname'   =>$data['surname']
        ]);

    }
}
?>