<?php
	class Programmes extends CI_Controller{
		public function progr(){
			$data['title'] = 'latest posts';/*ucfirst verifica daca are prima litera mare*/
			$data['programme'] = $this ->programme_model -> get_programme();
			$data['groupes'] = $this->groupe_model -> get_groupe_voir();
			$data['suivis'] = $this->groupe_model -> get_suivi();
			$this->load->view('templates/header');
			$this->load->view('programmes/programmes',$data);
			$this->load->view('templates/footer');
		}
		public function get_programme($idProgramme){
				$data['programme'] = $this ->programme_model -> get($idProgramme);
			$this->load->view('templates/header');
			$this->load->view('programmes/edit',$data);
			$this->load->view('templates/footer');
		}
		public function update_programme(){
			$data['programme'] = $this ->programme_model ->edit_programme();
			redirect('programmes/progr');
		}

	}