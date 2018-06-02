<?php
	class login_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_posts($id = FALSE){
			if($idAbo=== FALSE){
				$query  = $this-> db ->get('abonne');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('abonne', array('idAbo'=>$idAbo));
				return $query->row_array(); 
		}

		public function login(){
			/*get inputs*/
			$user=$this->input->post('user');
			$user= html_escape($user);
			$pass=$this->input->post('pass');
			$pass_enc=md5($pass);
			$this->db->where('emailUser', $user);
			$this->db->where('motPass', $pass_enc);
			$result= $this->db->get('user_app');
			
			if($result->num_rows()==1){
				return true;
			}
			else{
				return false;
			}
		}

		public function checkEmail($email){
			$requette=$this->db->get_where('user_app', array('emailUser'=>$email));
			
			if(empty($requette->row_array())){
				return true;
			}else{
				return false;
			}

		}
		public function create_user(){
			$var=md5($this -> input ->post('pass'));
			$data = array(
				'motPass'=> $var,
				'emailUser' => $this -> input ->post('email'),
				'nomUser' => $this -> input ->post('email'),
				'prenomUser' => $this -> input ->post('prenom'),
				'villeUser' => $this -> input ->post('ville'),
				'rueUser' => $this -> input ->post('rue'),
				'codePostaleUser' => $this -> input ->post('code')
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			return $this->db->insert('user_app', $data);
		}


		
	}