<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('m_login');
    }

    function authuser(){

      $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
			$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);



				$cek_user=$this->m_login->auth_user($email);

					$data=$cek_user->row_array();


					if(password_verify($password,$data['password'])){
						$this->session->set_userdata('user_masuk',TRUE);

						$this->session->set_userdata('id_user',$data['id']);
						$this->session->set_userdata('phone',$data['phone']);
						$this->session->set_userdata('email',$data['email']);
						$this->session->set_userdata('pin',$data['pin']);
						$urlx=$this->agent->referrer();
						//echo $urlx;
					redirect($urlx);

				}
				else{
					$url=base_url();
					echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
					redirect($url);
				}
    }

    function authuser1(){

      $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
			$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
			$url=$this->input->post('url');



				$cek_user=$this->m_login->auth_user($email);

					$data=$cek_user->row_array();


					if(password_verify($password,$data['password'])){
						$this->session->set_userdata('user_masuk',TRUE);

						$this->session->set_userdata('id_user',$data['id']);
						$this->session->set_userdata('phone',$data['phone']);
						$this->session->set_userdata('email',$data['email']);
						$this->session->set_userdata('pin',$data['pin']);
						$urlx=$this->agent->referrer();
            $iduser=$this->session->userdata('id_user');
            $sql=$this->db->query("SELECT id FROM nasabah WHERE id_user=$iduser");
            $hsl=$sql->num_rows();
            if($hsl>0){
              $url="dokumen";
            }else{
              $url="form";
            }
					$cek=$this->uri->segment(3);
          if($cek==NULL){
            redirect('home');
          }else{
            redirect('home/'.$url.'/'.$cek);
          }
				}
				else{
					$url=base_url();
					echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
					$cek=$this->uri->segment(3);
					redirect('home/login/'.$cek);
				}
    }

    function logout(){
			$this->session->sess_destroy();
			$url=base_url('');
			redirect('home');
		}

    function register(){
      $this->load->view('v_menu');
      $this->load->view('v_register');
    }
    function daftar(){
      $email=strip_tags(str_replace("'", "", $this->input->post('email')));
      $cekemail =$this->db->query("SELECT email FROM users WHERE email='$email'");
      $hsl=$cekemail->row_array();
      if($hsl>0){

        echo $this->session->set_flashdata('email',"<div class='alert alert-danger'>
        <strong>Gagal </strong>Email sudah terdaftar.
        </div>");
      redirect('login/register');
    }else{
        $nohp=strip_tags(str_replace("'", "", $this->input->post('nohp')));
        $password=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
        $produk=$this->uri->segment(3);
          $datauser=array(
                    'email'=>$email,
                    'phone'=>$nohp,
                    'password'=>$password,
                    'level'=>'user',
                    'api_token'=>'',
                    'pin'=>'',
                    );
          $save=$this->m_login->user_daftar($datauser);
          if($save){
			  echo $this->session->set_flashdata('belumlogin',"<div class='alert alert-info'>
  <strong>Info </strong> Registrasi berhasil, Silahkan Login Untuk melanjutkan.
</div>");
        redirect('home/login/'.$produk);
          }else{

        redirect('register');
            }
        }
    }
}
