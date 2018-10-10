<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employeecontrol extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() 
		{ 
			 parent::__construct(); 
			 $this->load->model('Employee');
			 $this->load->helper(array('form', 'url'));
			 $this->load->library('session');
         } 
	public function index()
	{
		$status="";
		$result = $this->Employee->get_employee_list();
		$data['records']=$result;
		
		$this->load->view('empolyee_details',$data);
	}
	public function delete_employee() 
	{
		$id = $this->input->post('employeeid');
		$data= $this->Employee->deleteemployee($id);
		if($data==true)
		{
			return "Employee details removed successfully";
		}
		else
		{
			return "Employee delete unsuccessfull";
		}
	}
	
	public function edit_employee() 
	{ 
        $emp_id = $this->uri->segment(3,0);
		 if($emp_id){
			$data['title']="City Edit";	
			$data['editcity']= TRUE;
			$data['emp_details'] = $this->Employee->getemployeeDetails($emp_id);
		}else{
			$data['title']="City Add";	
			$data['editcity']= FALSE;
		}
	    $this->load->view('empolyee_details_edit',$data);
     }
	public function add_employee() 
	{ 
        $data = array( 
            'e_id' => $this->input->post('eid'), 
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'doj' => date('Y-m-d',strtotime($this->input->post('date'))) 
         ); 
	     $det=$this->Employee->insert($data); 
		 if($det > 0)
		 {
			 $this->session->set_flashdata('message', 'Users has been created');
		 }
		 else
		 {
			 $this->session->set_flashdata('message', 'Users has not been created');
		 }
         redirect(base_url());
    }
	
	public function update_employee() 
	{ 
         $data = array( 
            'e_id' => $this->input->post('eid'), 
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'doj' => date('Y-m-d',strtotime($this->input->post('date'))) 
         ); 
	     $id = $this->input->post('id'); 
         $det=$this->Employee->update($data,$id); 
		 redirect(base_url());
    }

 }
