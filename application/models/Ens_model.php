<?php
	class ens_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get($idEns = FALSE){
			if($idEns=== FALSE){
				$query  = $this-> db ->get('enseignant');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('enseignant', array('idEns'=>$idEns));
				return $query->row_array(); 
		}

		public function create_ens(){
			/*$nom=url_nom($this->input->post('nom'));*/
			$data = array(
				'idEns' =>null,
				'nomEns' => $this -> input ->post('nom'),
				'prenomEns' => $this -> input ->post('prenom'),
				'villeEns' => $this -> input ->post('ville'),
				'rueEns' => $this -> input ->post('rue'),
				'codePostaleEns' => $this -> input ->post('code'),
				'numTelEns' => $this -> input ->post('numero')
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			return $this->db->insert('enseignant', $data);
		}
		public function get_ens(){
			//$this->db->where('idEns', $idEns);
			$result = $this->db->get('enseignant');
			return $result->result_array();
		}
		public function get_ens_by_id($idEns){
			$this->db->where('idEns', $idEns);
			$result = $this->db->get('enseignant');
			return $result->row(0);
		}

		public function edit_ens(){
			$id =$this->input->post('id'); 

			$data = array(
				'nomEns' => $this -> input ->post('nom'),
				'prenomEns' => $this -> input ->post('prenom'),
				'villeEns' => $this -> input ->post('ville'),
				'rueEns' => $this -> input ->post('rue'),
				'codePostaleEns' => $this -> input ->post('code'),
				'numTelEns' => $this -> input ->post('numero')
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			$this->db->where('idEns', $id);
			return $this->db->update('enseignant', $data);
		}
		public function delete_ens($idEns){
			$this->db->where('idEns', $idEns);
			$this->db-> delete('enseignant');
			return true;
		}
	}
