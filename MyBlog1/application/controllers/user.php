<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index(){
		$this->load->view('index');
		
	}

	/*public function login(){
		$this->load->view('login');	
		
	}
	public function dologin(){
		$email=$this->input->post('email');
		$pwd=$this->input->post('pwd');
		$data=array(
		'name'=>$email,
		'pwd'=>$pwd
		);
		$this->load->model('user_model');
		$result = $this->user_model->get_by_name_and_pwd($data);
		if($result){
			$this -> session -> set_userdata('login_user',$result);
			redirect('user/index');
		}else{
			redirect('user/login');
		}
		
	}
	*/
	pubilc function login(){
		$this->load->view('login');

	}
	public function do_login(){
		$email=$this->input->post('email');
		$pwd=$this->input->post('pwd');
		$data=array(
			'name'=>$email,
			'pwd'=>$pwd

			);
		public function get_by_name_and_pwd($email,$pwd){

		};






	}











	public function reg(){
		
		$this -> load -> view('reg');
	}
	public function doreg(){
		$email=$this->input->post('email');
		$name=$this->input->post('name');
		$sex=$this->input->post('gender');
		$pwd=$this->input->post('pwd');
		$location=$this->input->post('province');
		$data=array(
		"email"=>$email,
		"name"=>$name,
		"sex"=>$sex,
		"pwd"=>$pwd,
		"location"=>$location
		
		);
	$this->load->model('user_model');
	$this->user_model->insert($data);
	redirect('user/login');
	}
	public function blog(){
		
		$this->load->model('user_model');
		$result = $this->user_model->get_blog();
		$blog = array('blog' => $result);
		
		$this -> load -> view('index',$blog);
	}
	
	
	
}