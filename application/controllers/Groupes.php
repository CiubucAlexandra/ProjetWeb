<?php
	class Groupes extends CI_Controller{
		public function voir_groupes(){
			
			$data['title'] = 'Notres groupes sont: ';
			$data['groupe'] = $this ->groupe_model -> get_groupe_voir();
			$data['enseignant'] = $this->ens_model -> get();
			$this->load->view('templates/header');
			$this->load->view('groupe/voir_groupes',$data);
			$this->load->view('templates/footer');
		}

		public function add_groupe(){
			$data['enseignant'] = $this->ens_model -> get_ens();
			$this-> form_validation ->set_rules('nom', 'Nom', 'required');
			$this-> form_validation ->set_rules('noPlaces', 'noPlaces', 'required');
			$this-> form_validation ->set_rules('idEns', 'Enseignant', 'required');
			$this-> form_validation ->set_rules('nomSalle', 'Nom salle', 'required');
			$this-> form_validation ->set_rules('calendrier', 'Oraire', 'required');
			$this-> form_validation ->set_rules('date', 'Date', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('groupe/add_groupe', $data);/* in view folder posts create.php*/
				$this->load->view('templates/footer');
			} else{
				$this->groupe_model -> create_groupe();
				//$this-> load ->view('groupe/voir_groupes');
				redirect('groupes/voir_groupes');
			}
		}
	
		public function get_groupe($idGroupe){
			//$data['title'] = 'Edit groupe:';
			$data['enseignant'] = $this ->ens_model -> get_ens();
			$data['groupe']= $this->groupe_model->get_groupe($idGroupe);
			$data['id']=$idGroupe;
			//print_r($data['enseignant']);
			$this->load->view('templates/header');
			$this->load->view('groupe/edit',$data);
			$this->load->view('templates/footer');
		}

		public function edit_groupe(){
			$this ->groupe_model ->edit_groupe();
			redirect('groupes');
		}
		public function delete_groupe($idGroupe){
			$this->groupe_model-> delete_groupe($idGroupe);
			redirect('groupes');
		}

		
	}