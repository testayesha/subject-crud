<?php 
   class sub_model extends CI_Model
{
  function all()
  {
    return $qury = $this->db->select('s.*,b.*')

    ->join('branch as b','s.branch_id = b.branch_id')
    ->get('subject as s')
    ->result_array();

   //  return $subject = $this->db->get('subject')->result_array();
  }
    



    public function insertsubject($data) 
    {
      return  $this->db->insert('subject' , $data);
    }  

    public function editsubject($subject_code)
    {
      $query = $this->db->get('subject' , $subject_code);
        return $query->row();
    }
   
  
    function update($subject_code, $formArray)
    {
       $this->db->where('subject_code', $subject_code);
       $this->db->update('subject', $formArray);
 
    }
    function get($subject_code)
    {
       $this->db->where('subject_code', $subject_code);
       return $sub = $this->db->get('subject')->row_array();
    }
    function delete($subject_code)
    {
       $this->db->where('subject_code', $subject_code);
       $this->db->delete('subject');
    }
    function get_branch()
    {
       $qury = $this->db->get('branch');
       return $qury->result_array();
    } 
    function get_sub_type()
    {
       $qury = $this->db->get('subject');
       return $qury->result_array();
    } 

}


?>