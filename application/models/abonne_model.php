<?php
	class abonne_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_ab($idAbo = FALSE){
			if($idAbo=== FALSE){
				$query  = $this-> db ->get('abonne');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('abonne', array('idAbo'=>$idAbo));
				return $query->row_array(); 
		}

		public function create_abonne(){
			/*$nom=url_nom($this->input->post('nom'));*/
			$data = array(

				'nomAbo' => $this -> input ->post('nom'),
				'prenomAbo' => $this -> input ->post('prenom'),
				'dateNaissanceAbo' => $this -> input ->post('date'),
				'occupationAbo' => $this -> input ->post('occupation'),
				'villeAbo' => $this -> input ->post('ville'),
				'rueAbo' => $this -> input ->post('rue'),
				'codePostaleAbo' => $this -> input ->post('code'),
				'numTelAbo' => $this -> input ->post('numero'),
				'ajoute' =>false
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			return $this->db->insert('abonne', $data);
		}
		public function delete_abonne($idAbo){
			$this->db->where('idAbo', $idAbo);
			$this->db-> delete('abonne');
			return true;

		}
		public function get_abonne($idAbo){
			$this->db->where('idAbo', $idAbo);
			$result = $this->db->get('abonne');
			return $result->row(0);
		}

		public function edit_abonne(){
			$id =$this->input->post('id'); 

			$data = array(
				'nomAbo' => $this -> input ->post('nom'),
				'prenomAbo' => $this -> input ->post('prenom'),
				'dateNaissanceAbo' => $this -> input ->post('date'),
				'occupationAbo' => $this -> input ->post('occupation'),
				'villeAbo' => $this -> input ->post('ville'),
				'rueAbo' => $this -> input ->post('rue'),
				'codePostaleAbo' => $this -> input ->post('code'),
				'numTelAbo' => $this -> input ->post('numero'),
		
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			$this->db->where('idAbo', $id);
			return $this->db->update('abonne', $data);
		}

		
	}