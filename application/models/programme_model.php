<?php
	class programme_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_programme($idProgramme = FALSE){
			if($idProgramme=== FALSE){
				$query  = $this-> db ->get('programme');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('programme', array('idProgramme'=>$idProgramme));
				return $query->row_array(); 
		}

		public function get($idProgramme){
			$this->db->where('idProgramme', $idProgramme);
			$result = $this->db->get('programme');
			return $result->row(0);
		}

		public function edit_programme(){
			$id =$this->input->post('id'); 

			$data = array(
				'nomSalle' => $this -> input ->post('nomSalle'),
				'calendrier' => $this -> input ->post('calendrier'),
				'dateP' => $this -> input ->post('date')
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			$this->db->where('idProgramme', $id);
			return $this->db->update('programme', $data);
		}
	}