<?php 
   class Employee extends CI_Model {
	
      function __construct() 
	  { 
         parent::__construct();
		 $this->load->database(); 
		 $this->table = "employee_table";
		 $this->primary = "id";		
      } 
	  public function update($data,$old_roll_no) 
	  { 
         $this->db->set($data); 
         $this->db->where("id", $old_roll_no); 
         $this->db->update($this->table, $data); 
      } 
      public function deleteemployee($id)
      {
         $update_data = array(
			'status' =>'0'
			);
	    $this->db->where($this->primary, $id);
    	$this->db->update($this->table, $update_data);
	    return $this->db->trans_status();
	  }
	
	  public function getemployeeDetails($id)
      {
		$this->db->where('id', $id);
		$user_query = $this->db->get($this->table);
		$user_data = $user_query->row();
		return $user_data;
      }
      public function insert($data) 
	  { 
         if ($this->db->insert($this->table, $data)) { 
            $id=$this->db->insert_id();
			return true;
         }
		 else
			 
		 {
			 return false;
		 }
      } 
	  public function get_employee_list()
		{
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where('status','1');
			$this->db->order_by("id", "desc");
			$query = $this->db->get();
			return $query->result();
			}
			
} 
?> 