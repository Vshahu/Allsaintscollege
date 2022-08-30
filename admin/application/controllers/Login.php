<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	public function __construct(){
			parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->database();
		$this->load->model('Authenticate_model');
         
    }
	public function index()
	{ 
		$this->load->view('login.php');
	}
		/*Start Page Mention Here*/
	public function Auth(){
        // Validation Rules
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
        if ($this->form_validation->run() == false) {
            
            $this->load->view('login');
        }
		else{
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $member_id = $this->Authenticate_model->login($username, $password);
			//var_dump($member_id);die();
			
			

			//}
            if ($member_id != false) {
            	$utype= $member_id->usertype;
			$id=$member_id->id;
                $user_data = array(
                    'user_id' => $member_id, 
                    'username' => $username,
                    'logged_in' => true,
                    'utype'=>$member_id->usertype,
					'fname'=>$member_id->fname,
					//'id'=>$member_id->id,
					);
                
                $this->session->set_userdata($user_data);
              
                $this->session->set_flashdata('pass_login','You are now Logged In.');
                //var_dump($utype);die();
				if($utype==1){
                redirect('welcome/home');
            }
				else if($utype==2){
					 redirect('welcome/student?id='.$id.'');
				}
				else if($utype==3){
				redirect('welcome/parent?id='.$id.'');	
				}
				else {
						redirect('welcome/home');	
				}
				}else{
			   
				$this->session->set_flashdata('invalid_login','Try again');

				
				$this->load->view('login');
					
				}
    }
}
    public function logout(){
        // Unset User Data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        // Set Message
        $this->session->set_flashdata('logged_out',' <div role="alert" class="alert alert-primary alert-dismissible"> <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-info-outline"></span><strong>Info!</strong> Successfully You are Logout
                  </div>');
		//$this->load->view('login.php');
		redirect('index.php');
    }

}
?>
		
		
 