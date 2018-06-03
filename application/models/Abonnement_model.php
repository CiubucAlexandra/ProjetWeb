<?php
	class abonnement_model extends CI_Model{
		public function __construct(){
					$this->load->database();
				}

		public function create_abonnement(){
					/*$nom=url_nom($this->input->post('nom'));*/
					$data = array(
						'numeroAb' => null ,
						'typeAb' => $this -> input ->post('type'),
						'tarifAb' => $this -> input ->post('tarif'),
						'reduction' => $this -> input ->post('reduction'),
						'idGroupe'=>$this-> input ->post('idGroupe')
					);
					$data = $this->security->xss_clean($data);
					$data = html_escape($data);
					return $this->db->insert('abonnement', $data);
				}
		public function create_avoir($idAbo){
					/*$nom=url_nom($this->input->post('nom'));*/
					$result = $this->db->get('abonnement');
					$row = $result->last_row();
					$data = array(
						'idAbo' =>  $idAbo,
						'numeroAb' => $row->numeroAb
					);
					$data = $this->security->xss_clean($data);
					$data = html_escape($data);
					return $this->db->insert('avoir', $data);
				}
		public function check_abonnement($idAbo=False){
			$result= $this->db->get_where('avoir',array('idAbo'=> $idAbo));
			if(empty($result->row_array())){
				return true;
			}
			else{
				return false;
			}
		}

		public function get_abonne($idAbo){
			$this->db->where('idAbo', $idAbo);
			$result = $this->db->get('avoir');
			return $result->row(0);
		}
		public function get_abonnement($numeroAb){
			$this->db->where('numeroAb', $numeroAb);
			$result = $this->db->get('abonnement');
			return $result->row(0);
		}
		public function edit_abonnement(){
			$id =$this->input->post('numeroAb'); 

			$data = array(
				'typeAb' => $this -> input ->post('type'),
				'tarifAb' => $this -> input ->post('tarif'),
				'reduction' => $this -> input ->post('reduction'),
				'idGroupe'=>$this-> input ->post('idGroupe')
			);
			$data = $this->security->xss_clean($data);
			$data = html_escape($data);
			$this->db->where('numeroAb', $id);
			return $this->db->update('abonnement', $data);
		}

		public function delete_abonnement($numeroAb){
			$this->db->where('numeroAb', $numeroAb);
			$this->db-> delete('avoir');
			$this->db->where('numeroAb', $numeroAb);
			$this->db-> delete('abonnement');
			return true;

		}
	}
