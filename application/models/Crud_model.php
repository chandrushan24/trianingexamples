<?php
class Crud_model extends CI_Model
{
     function saverecords($data){
        $this->db->insert('student_info',$data);
        return true;

    }   
}
?>