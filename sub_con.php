<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

 class sub_con extends CI_Controller 
 {     
      
      function __construct()
      {
        parent::__construct(); 
        $this->load->model("sub_model");
    
      }

   public function create()
   {
      $this->load->view('include/header');
       $this->load->view('Users/subject'); 

   }
        public function store() {
          $page_data['get_branch'] = $this->sub_model->get_branch();
          $page_data['get_sub_type'] = $this->sub_model->get_sub_type();
          // $page_data['get_section'] = $this->sub_model->get_section();
        
          $this->load->model('sub_model');
                // $page_data['get_branch'] = $this->section_model->get_branch();
                // $page_data['get_s'] = $this->section_model->get_section();
                $this->form_validation->set_rules('subject_name' , 'subject_name' , 'required');
                $this->form_validation->set_rules('branch_id' , 'branch_id' , 'required');
                $this->form_validation->set_rules('subject_author' , 'subject_author' , 'required');
                $this->form_validation->set_rules('subject_type', 'subject_type', 'required');
      
            
                if($this->form_validation->run() == False)
      {
      
        $this->load->view('Users/subject',$page_data);
      } else {
      
      // save in database//
                  $data = array();
                  
                $formArray['section_name'] = $this->input->post('section_name');
                   $formArray['subject_author'] = $this->input->post('subject_author');
                   $formArray['branch_id'] = $this->input->post('branch_id');
                   $formArray['subject_type'] = $this->input->post('subject_type');

                  //  print_r($formArray);exit;
                   
      
                  $data =[
                    'subject_name' =>$this->input->post('subject_name'),
                      'branch_id' =>$this->input->post('branch_id'),
                      'subject_author' =>$this->input->post('subject_author'),
                      'subject_type' =>$this->input->post('subject_type'),
                    // print_r()
                  ];   

                
                  $this->load->model('section_model');
                  // print_r($data);exit;
                  $this->sub_model->insertsubject($data);

                  redirect(base_url('sub_con/list_sub')); 
                } 
                
              
              }
       
       
       
       
       
        public function list_sub()
{
  $this->load->model('sub_model');
  $subject = $this->sub_model->all();
  $data = array();
  $data['subject'] = $subject;
  
  $this->load->view('Users/list_sub', $data);
} 




     
  public function edit($subject_code)
  {
    $this->load->model('sub_model');
    $sub = $this->sub_model->editsubject($subject_code);
    $data = array();
    
    $data['sub'] = $sub;
   
    $this->form_validation->set_rules('branch_name', 'branch_name', 'required');
    $this->form_validation->set_rules('subject_name', 'subject_name', 'required');
    $this->form_validation->set_rules('subject_author', 'subject_author', 'required');
    $this->form_validation->set_rules('subject_type', 'subject_type', 'required');

    if( $this->form_validation->run()==false){

      
      $this->load->view('Users/edit_sub' , $data);

    }else{
        $formArray = array();
        $formArray['branch_name']=$this->input->post('branch_name');
        $formArray['subject_name']=$this->input->post('subject_name');
        $formArray['subject_author']=$this->input->post('subject_author');
        $formArray['subject_type']=$this->input->post('subject_type');
        $this->sub_model->update($subject_code,$formArray);
        redirect(base_url() . 'sub_con/list_sub');
    }





  }
       
 

  function delete($subject_code)
  {
      $this->load->model('fee_type_model');
      $sub = $this->sub_model->get($subject_code);
      if (empty($sub)) {
      
          redirect(base_url(). 'sub_con/list_sub');
      }
      $this->sub_model->delete($subject_code);
    
      redirect(base_url(). 'sub_con/list_sub');
  }

}
 
     
            
          

        

?>