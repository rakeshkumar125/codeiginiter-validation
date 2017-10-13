<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
        parent::__construct();
      //  $this->load->library(array('form_validation','session','base_user')); // load form lidation libaray & session library
      
    } 

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sign_up');
		$this->load->view('footer');
	}

	//function for add user 
	public function submit(){

	 			$this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[user.username]'); 
	 			$this->form_validation->set_rules('fname', 'First Name', 'trim|required'); 
	 			$this->form_validation->set_rules('email', 'Email ', 'trim|required|is_unique[user.email]');	
	 			$this->form_validation->set_rules('password', 'Password', 'trim|required');	
	 			$this->form_validation->set_rules('password_confirmation', 'Confirm Password', 'trim|required|matches[password]');	
		        
		         if ($this->form_validation->run() == FALSE) { 
		        	$errors = $this->form_validation->error_array();
		        	$json_error = array();
		        	foreach ($errors as $key => $value) {
		        		$json_error[] = array("error_field"=>$key,"error"=>$value);
		      		}
		      		$response_data= array("status"=>true,"data"=>$json_error);
		         } else{
		         	$this->load->model('user');
		         	$this->user->add_user($_POST);
		         	$json_error = false;
		         	$json_error[] = array("error_field"=>0,"error"=>"You Signup Successfully. Check yor mail inbox for confirmation mail.");
		         	$response_data = array("status"=>false,"data"=>$json_error); 
		         }
		       
		         echo json_encode($response_data);
			
	}


	public function login(){
		$this->form_validation->set_rules('login_email', 'Email addess or Username', 'trim|required'); 
	 	$this->form_validation->set_rules('login_password', 'Password', 'trim|required');
		 	if($this->form_validation->run() == false){

		 		$errors = $this->form_validation->error_array();
	        	$json_error = array();
	        	foreach ($errors as $key => $value) {
	        		$json_error[] = array("error_field"=>$key,"error"=>$value);
	      		}
	      		$response_data= array("status"=>true,"data"=>$json_error);

		 	} else {

		 		$this->load->model('user_model');
	         	$status = $this->user_model->user_login($_POST);
	         	//var_dump($status);
	         	if($status){
	         		$user_id = $this->user_model->get_idfrom_username($_POST['login_email']);	
	         		$this->session->set_userdata("user_id",$user_id);
	         		$json_error = false;
		         	$json_error[] = array("error_field"=>0,"error"=>"you login susscessfully. Now we redirect to Dashboard. ");
		         	$json_error[] = array("error_field"=>0,"link"=>base_url()."dashboard");
		         	$response_data = array("status"=>false,"data"=>$json_error);
	         	} else{
	         		$json_error[] = array("error_field"=>0,"error"=>"your Username Or Password may be wrong.");
		         	$response_data = array("status"=>false,"data"=>$json_error);
	         	}

	         	 
		 	
		 	}
 			
 			echo json_encode($response_data);

	}

	public function logout(){
		
		$this->session->sess_destroy();
		redirect(base_url().'sign-up'); 

	}

	public function edit_objective(){
	 	
		$this->load->model('user_model');
		$data['objective'] = $this->base_user->get_objective();
		$this->load->view('user/edit_objective',$data);

	}

	public function save_objective(){

		$this->form_validation->set_rules('user_objective', "Objective can't be empty", 'trim|required');
		if($this->form_validation->run() == false){

		 		$errors = $this->form_validation->error_array();
	        	$json_error = array();
	        	foreach ($errors as $key => $value) {
	        		$json_error[] = array("error_field"=>$key,"error"=>$value);
	      		}
	      		$response_data= array("status"=>true,"data"=>$json_error);

		 } else {

		 		$this->load->model('user_model');
	         	$data['user_id'] = $this->base_user->is_login();
				//$data['objective'] = $this->input->post('object');
				$data['user_objective'] = htmlentities($this->input->post('user_objective'), ENT_QUOTES | ENT_IGNORE, "UTF-8");
				$this->user_model->save_objective($data);
	         	$json_error = false;
	         	$json_error[] = array("error_field"=>0,"error"=>"Objective save successfully !");
	         	$response_data = array("status"=>false,"data"=>$json_error); 	

		 }

		 echo json_encode($response_data);
		/*
		echo $data['objective'];*/
	}


	public function add_education(){
		$this->load->view('user/education');
	}

	public function edit_strength(){
		$this->load->view('user/strenghts');
	}

	public function save_strength(){
		$this->form_validation->set_rules('question', "Title can't be empty", 'trim|required');
		$this->form_validation->set_rules('answer', "Strength can't be empty", 'trim|required');
		if($this->form_validation->run() == false){

		 		$errors = $this->form_validation->error_array();
	        	$json_error = array();
	        	foreach ($errors as $key => $value) {
	        		$json_error[] = array("error_field"=>$key,"error"=>$value);
	      		}
	      		$response_data= array("status"=>true,"data"=>$json_error);

		 } else {

		 		$this->load->model('user_model');
		 		
		 		if(strlen($this->input->post('id'))>0){
		 			$this->user_model->update_strength($this->input->post());
		 		} else{
		 			$this->user_model->save_strength($this->input->post());	
		 		}
	         	
	         	$json_error = false;
	         	$json_error[] = array("error_field"=>0,"error"=>"Objective save successfully !");
	         	$response_data = array("status"=>false,"data"=>$json_error); 

		 }

		 echo json_encode($response_data);
	}

	public function get_strength(){

			$this->load->model('user_model');
	        $data = $this->user_model->get_strength();
	        //print_r($data);
	        echo json_encode($data);
	}

	public function update_strength($id){
		$this->load->model('user_model');
		$data = $this->user_model->get_strength_byid($id);
		
		$this->load->view('user/edit_strenghts',$data[0]);
	}

	public function delete_strength($id){

			$this->load->model('user_model');
	        $data = $this->user_model->delete_strength($id);
	}

	public function delete_education($id){

			$this->load->model('user_model');
	        $data = $this->user_model->delete_education($id);
	}

	public function save_education(){
		$this->form_validation->set_rules('class', "Class can't be empty", 'trim|required');
		$this->form_validation->set_rules('institute', "Institute can't be empty", 'trim|required');
		$this->form_validation->set_rules('description', "Description can't be empty", 'trim|required');
		$this->form_validation->set_rules('start_year', "Choose start year", 'required');
		$this->form_validation->set_rules('end_year', "Choose end year", 'required');
		if($this->form_validation->run() == false){

		 		$errors = $this->form_validation->error_array();
	        	$json_error = array();
	        	foreach ($errors as $key => $value) {
	        		$json_error[] = array("error_field"=>$key,"error"=>$value);
	      		}
	      		$response_data= array("status"=>true,"data"=>$json_error);

		 } else {

		 		$this->load->model('user_model');
		 		
		 		if(strlen($this->input->post('id'))>0){
		 			$this->user_model->update_education($this->input->post());
		 		} else{
		 			$this->user_model->save_education($this->input->post());	
		 		}
	         	
	         	$json_error = false;
	         	$json_error[] = array("error_field"=>0,"error"=>"Objective save successfully !");
	         	$response_data = array("status"=>false,"data"=>$json_error); 

		 }

		 echo json_encode($response_data);	
	}

	public function save_skill(){
		$this->form_validation->set_rules('skill_name', "Skill can't be empty", 'trim|required');
		if($this->form_validation->run() == false){

		 		$errors = $this->form_validation->error_array();
	        	$json_error = array();
	        	foreach ($errors as $key => $value) {
	        		$json_error[] = array("error_field"=>$key,"error"=>$value);
	      		}
	      		$response_data= array("status"=>true,"data"=>$json_error);

		 } else {

		 		$this->load->model('user_model');
		 		
		 		if(strlen($this->input->post('id'))>0){
		 			//$this->user_model->update_education($this->input->post());
		 		} else{
		 			$this->user_model->save_skill($this->input->post());	
		 		}
	         	
	         	$json_error = false;
	         	$json_error[] = array("error_field"=>0,"error"=>"Objective save successfully !");
	         	$response_data = array("status"=>false,"data"=>$json_error); 

		 }

		 echo json_encode($response_data);	
	}


	public function get_education(){
		$this->load->model('user_model');
	    $data = $this->user_model->get_education();
	    echo json_encode($data);
	}

	public function user_skill(){
		$this->load->model('user_model');
		$user_skill_data = $this->user_model->user_skill();
		echo json_encode($user_skill_data);
	}

	public function update_education($id){
		$this->load->model('user_model');
		$data = $this->user_model->get_education_byid($id);
		$this->load->view('user/edit_education',$data[0]);		
	}

	public function add_skill(){
		
		$this->load->view('user/skill');		
	}

	public function skill_list(){
		$this->load->model('user_model');
		echo $this->user_model->skill_list();
	}


}
