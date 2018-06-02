<?php
	class Programmes extends CI_Controller{
		public function progr(){
			
			$data['title'] = 'latest posts';/*ucfirst verifica daca are prima litera mare*/
			$data['programme'] = $this ->programme_model -> get_posts();
			$this->load->view('templates/header');
			$this->load->view('programmes/programmes',$data);
			$this->load->view('templates/footer');
		}
	}