<?php
	class User_controller extends CI_Controller{

		public function voir_user(){
			
			$data['title'] = 'users';/*ucfirst verifica daca are prima litera mare*/
			$data['user_app'] = $this ->login_model -> get_posts();
			$this->load->view('templates/header');
			$this->load->view('pages/login',$data);
			$this->load->view('templates/footer');
		}

		public function login(){
			
			$data['title'] = 'validation login';/*ucfirst verifica daca are prima litera mare*/
			$this-> form_validation ->set_rules('user', 'User', 'required');
			$this-> form_validation ->set_rules('pass', 'Pass', 'required');
			

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/login',$data);/* in view folder posts create.php*/
				$this->load->view('templates/footer');
			}else{
			$var= $this->login_model->login();
			
			if($var){
				$smth=$this->input->post('emailUser');
				setcookie("utilisateur", 'success', time()+24000,"/");
				redirect('presentation');
			}
			else{
				redirect('login');
			}
		}
	}
		
		public function checkEmail($email){
			$this->form_validation->set_message('checkEmail', "L'email a ete deja utilise");
			if($this->login_model->checkEmail($email)){
				return true;
			}else{
				return false;
			}
		}

		public function new_user(){
			
			$data['title']='Login';
			$this-> form_validation ->set_rules('email', 'Email', 'required|callback_checkEmail');
			$this-> form_validation ->set_rules('pass', 'Pass', 'required');
			$this-> form_validation ->set_rules('nom', 'Nom', 'required');
			$this-> form_validation ->set_rules('prenom', 'Preom', 'required');
			$this-> form_validation ->set_rules('ville', 'Ville', 'required');
			$this-> form_validation ->set_rules('rue', 'rue', 'required');
			$this-> form_validation ->set_rules('code', 'Code', 'required');
			

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/new',$data);/* in view folder posts create.php*/
				$this->load->view('templates/footer');
			}else{
				if($this->login_model->create_user()){
					redirect('presentation');
				}
			}
			
			
		}

		public function logout(){
			delete_cookie("utilisateur");
			redirect("presentation");
		}


	}