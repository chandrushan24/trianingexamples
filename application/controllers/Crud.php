<?php
class Crud extends CI_Controller
{

    public function index()
	{
		$this->load->view('insert');
	}
     public function __construct()   
    {
         parent::__construct();
         $this->load->database();
         $this->load->model('crud_model');
         $this->load->helper('url');
        }
        
        public function savedata()
        {
        $this->load->view('insert');
        if($this->input->post('save')){
             $data['student_id']=$this->input->post('student_id');
             $data['student_name']=$this->input->post('student_name');
             $data['student_age']=$this->input->post('student_age');
             $data['student_gender']=$this->input->post('student_gender'); 
             $response = $this->crud_model->saverecords($data);
             if($response==true){
                echo "Inserted succesffully"; 
             }else{
                echo "Insert failed";
             }
            }
    }
}
?>