<?php
	class Ens_controller extends CI_Controller{
		public function voir_ens(){//nu e moficata
			
			$data['title'] = 'Notres groupes sont: ';/*ucfirst verifica daca are prima litera mare*/
			$data['enseignant'] = $this ->ens_model -> get();
			$this->load->view('templates/header');
			$this->load->view('pages/voir_ens',$data);
			$this->load->view('templates/footer');
		}

		public function add_ens(){
			$data['title'] = 'Pour ajouter un ensegniant vous devrez remplir le formulaire:';
			$this-> form_validation ->set_rules('nom', 'Nom', 'required');
			$this-> form_validation ->set_rules('prenom', 'Preom', 'required');
			$this-> form_validation ->set_rules('ville', 'Ville', 'required');
			$this-> form_validation ->set_rules('rue', 'Rue', 'required');
			$this-> form_validation ->set_rules('code', 'Code', 'required');
			$this-> form_validation ->set_rules('numero', 'Numero', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/add_ens',$data);/* in view folder posts create.php*/
				$this->load->view('templates/footer');
			} else{
				$this->ens_model -> create_ens();
				redirect('all_ens');
			}
			
		}

		public function get_ens_edit(){
			$data['enseignant'] = $this ->ens_model -> get_ens();
			$this->load->view('templates/header');
			$this->load->view('groupe/edit',$data);
			$this->load->view('templates/footer');
		}

		public function get_ens($idEns){
			//$data['title'] = 'Edit';
			$data['enseignant'] = $this ->ens_model -> get_ens_by_id($idEns);
			$this->load->view('templates/header');
			$this->load->view('pages/edit_ens',$data);
			$this->load->view('templates/footer');
		}


		public function update(){
			$data['enseignant'] = $this ->ens_model ->edit_ens();
			redirect('all_ens');
		}
		public function delete_ens($idEns){
			$groupes = $this->groupe_model->get_groupes();

			foreach($groupes as $gr){
				if($gr['idEns']==$idEns){
					$result=true;
				}
			}

			if($result){
				setcookie("groupeExist",$idEns,time()+5,'/');
				redirect('all_ens');
			}else{

			$data['enseignant'] = $this->ens_model->delete_ens($idEns);

			redirect('all_ens');
			}

		}
	}