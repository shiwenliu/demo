<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends  CI_Model{
	public function get_by_name_and_pwd($email,$pwd){
		$data()=array(){
			email=$email;
			pwd=$pwd;


		}
		
		return $this->db->get_where('t_user',$data)-> row();
	}
	public function insert($data){
		return $this->db->insert('t_user',$data);
	}
	public function get_blog(){
		return $this->db->get('t_blog')->result();
		
	}
	public function save("t_user",$user){


	}
}