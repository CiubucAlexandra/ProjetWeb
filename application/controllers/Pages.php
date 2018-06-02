<?php
	class Pages extends CI_Controller{
		public function view($page='home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){/*verifica daca acest fisier are un view care exista*/
				show_404();
			}

			$data['title'] = ucfirst($page);/*ucfirst verifica daca are prima litera mare*/
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page,$data);
			$this->load->view('templates/footer');
		}
	}