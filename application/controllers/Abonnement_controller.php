<?php
	class Abonnement_controller extends CI_Controller{
		

		public function create(){
			
			$data['title'] = 'Pour enregistrer un abonnement: ';/*ucfirst verifica daca are prima litera mare*/
			//$this-> form_validation ->set_rules('select1', 'Nom', 'required');
			//$this-> form_validation ->set_rules('select2', 'Prenom', 'required');
			
			$this-> form_validation ->set_rules('type', 'Type', 'required');
			$this-> form_validation ->set_rules('tarif', 'Tarif', 'required');
			$this-> form_validation ->set_rules('reduction', 'Reduction', 'required');
			$var= $this -> input ->post('idAbo');
			
			if($this->form_validation->run() === FALSE){
				redirect('abonne_controller/find_abonne',$data);
			} else{
				$this->abonnement_model -> create_abonnement();
				$this->abonnement_model -> create_avoir($var);
				//$this-> load ->view('abonne_views/create');
				redirect('presentation');
			}
		}

		public function check($idAbo){
			$data['avoir'] = $this ->abonnement_model ->check_abonnement($idAbo);
			$var= $this ->abonnement_model ->check_abonnement($idAbo);
			//die($idAbo);
			$data['idAbon']=$idAbo;
			if($var){
			$this->load->view('templates/header');
			$this->load->view('pages/abonnement',$data);
			$this->load->view('templates/footer');
			}
			else{
				//redirect('abonnement_controller/get_abo',$idAbo);
			$data['avoir'] = $this ->abonnement_model -> get_abonne($idAbo);
			$var = $data['avoir']->numeroAb;

			$data['abonnement'] = $this ->abonnement_model -> get_abonnement($var);
			//die($data['abonnement']);
			$this->load->view('templates/header');
			$this->load->view('pages/abonnement_true',$data);
			$this->load->view('templates/footer');

			}
			//redirect('tableabonne');
		}

			public function edit_abonnement(){
			//$data['title'] = 'Edit';/*ucfirst verifica daca are prima litera mare*/
			$data['abonnement'] = $this ->abonnement_model ->edit_abonnement();
			redirect('tableabonne');
		}

		public function delete($numeroAb){
			
			$this->abonnement_model-> delete_abonnement($numeroAb);
			redirect('abonne_controller/voir_abonnes');
		}
	}