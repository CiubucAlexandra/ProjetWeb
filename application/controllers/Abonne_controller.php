<?php
	class Abonne_controller extends CI_Controller{
		public function voir_abonnes(){
			
			$data['title'] = 'Les abonnes de la base de donnes sont:';/*ucfirst verifica daca are prima litera mare*/
			$data['abonne'] = $this ->abonne_model -> get_ab();
			$this->load->view('templates/header');
			$this->load->view('abonne_views/all_abonnes',$data);
			$this->load->view('templates/footer');
		}
	


		public function create(){
			
			$data['title'] = 'Pour vous enregistrer vous devrez remplir le formulaire et passer au secretariat pour la validation du abonnement!(attention, vous avez un termen limite de 30 jours)';/*ucfirst verifica daca are prima litera mare*/
			$this-> form_validation ->set_rules('nom', 'Nom', 'required');
			$this-> form_validation ->set_rules('prenom', 'Preom', 'required');
			$this-> form_validation ->set_rules('date', 'Date', 'required');
			$this-> form_validation ->set_rules('occupation', 'Occupation', 'required');
			$this-> form_validation ->set_rules('ville', 'Ville', 'required');
			$this-> form_validation ->set_rules('rue', 'Rue', 'required');
			$this-> form_validation ->set_rules('code', 'Code', 'required');
			$this-> form_validation ->set_rules('numero', 'Numero', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('abonne_views/create',$data);/* in view folder posts create.php*/
				$this->load->view('templates/footer');
			} else{
				$this->abonne_model -> create_abonne();
				$this-> load ->view('abonne_views/create');
				redirect('abonne_controller/voir_abonnes');
			}
		}
		public function delete($idAbo){
			$this->abonne_model-> delete_abonne($idAbo);
			redirect('abonne_controller/voir_abonnes');
		}

		public function get($idAbo){
			$data['title'] = 'Edit';
			$data['abonne'] = $this ->abonne_model -> get_abonne($idAbo);
			$this->load->view('templates/header');
			$this->load->view('abonne_views/edit',$data);
			$this->load->view('templates/footer');
		}

		public function edit_abonne(){
			$data['title'] = 'Edit';/*ucfirst verifica daca are prima litera mare*/
			$data['abonne'] = $this ->abonne_model ->edit_abonne();
			redirect('tableabonne');
		}

		
	}