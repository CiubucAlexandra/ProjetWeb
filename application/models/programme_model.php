<?php
	class programme_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_posts($idProgramme = FALSE){
			if($idProgramme=== FALSE){
				$query  = $this-> db ->get('programme');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('programme', array('idProgramme'=>$idProgramme));
				return $query->row_array(); 
		}
	}