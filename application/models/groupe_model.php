<?php
	class groupe_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_groupe_voir($idGroupe = FALSE){
			if($idGroupe=== FALSE){
				$query  = $this-> db ->get('groupe');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('groupe', array('idGroupe'=>$idGroupe));
				return $query->row_array(); 
		}
		public function get_suivi($idGroupe = FALSE){
			if($idGroupe=== FALSE){
				$query  = $this-> db ->get('suivre');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('suivre', array('idGroupe'=>$idGroupe));
				return $query->row_array(); 
		}
		public function get_groupes($idGroupe = FALSE){
				if($idGroupe=== FALSE){
				$query  = $this-> db ->get('groupe');
				return $query->result_array(); 
			}
				$query  = $this-> db ->get_where('groupe', array('idGroupe'=>$idGroupe));
				return $query->row_array(); 
			
		}
		public function create_groupe(){
			$data = array(
				'idGroupe'=> null,
				'nomGroupe' => $this -> input ->post('nom'),
				'noPlaces' => $this -> input ->post('noPlaces'),
				'idEns' => $this -> input ->post('idEns')
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			$this->db->insert('groupe', $data);

			$data2 = array(
				'idProgramme'=> null,
				'nomSalle' => $this -> input ->post('nomSalle'),
				'calendrier' => $this -> input ->post('calendrier'),
				'dateP' => $this -> input ->post('date')
			);
			$data2 = $this->security->xss_clean($data2);
			$data2 = html_escape($data2);
			$this->db->insert('programme', $data2);

			$result1 = $this->db->get('groupe');
			$gr = $result1->last_row();
			$result2 = $this->db->get('programme');
			$pr = $result2->last_row();
			$data3 = array(
						'idGroupe' =>  $gr->idGroupe,
						'idProgramme' => $pr->idProgramme
					);
			$data3 = $this->security->xss_clean($data3);
			$data3 = html_escape($data3);
			return $this->db->insert('suivre', $data3);

		}
		public function get_groupe($idGroupe){
			$this->db->where('idGroupe', $idGroupe);
			$result = $this->db->get('groupe');
			return $result->row(0);
		}
		public function edit_groupe(){
			$id =$this->input->post('id'); 

			$data = array(
				'idGroupe'=> $id,
				'nomGroupe' => $this -> input ->post('nom'),
				'noPlaces' => $this -> input ->post('noPlaces'),
				'idEns' => $this -> input ->post('idEns')
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			$this->db->where('idGroupe', $id);
			return $this->db->update('groupe', $data);
		}
		public function delete_groupe($idGroupe){

			$this->db->where('idGroupe', $idGroupe);
			$result = $this->db->get('suivre');

			$idPr= $result->row(0)->idProgramme;
			$this->db->where('idGroupe', $idGroupe);
			$this->db-> delete('suivre');
			$this->db->where('idProgramme', $idPr);
			$this->db-> delete('programme');
			$this->db->where('idGroupe', $idGroupe);
			$this->db-> delete('groupe');
			return true;

		}
		

	}