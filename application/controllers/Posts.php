<?php
	class Posts extends CI_Controller{
		public function index(){
			
			$data['title'] = 'affichage programmes';/*ucfirst verifica daca are prima litera mare*/
			$data['program'] = $this ->programme_model -> get_posts();
			$this->load->view('templates/header');
			$this->load->view('posts/index',$data);
			$this->load->view('templates/footer');
		}
	}