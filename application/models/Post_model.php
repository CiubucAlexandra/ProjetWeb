<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_posts($idAbo = FALSE){
			if($idAbo=== FALSE){
				$query  = $this-> db ->get('abonne');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('abonne', array('idAbo'=>$idAbo));
				return $query->row_array(); 
		}
	}