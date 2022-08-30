<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->helper(array('form','url'));
            $this->load->library(array('session', 'form_validation', 'email'));
            $this->load->library("cart");
            $this->load->database();
            $this->load->model('user');
        }
		

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function forgotpassword()
	{
		$this->load->view('forgotpassword');
	}
	public function otp()
	{
		$this->load->view('otp');
	}
	public function newpassword()
	{
		$this->load->view('newpassword');
	}
	public function success()
	{
      $this->session->set_flashdata('success', 'User Updated successfully');
      return $this->load->view('myPages');
	}
	 public function error()
  {
      $this->session->set_flashdata('error', 'Something is wrong.');
      return $this->load->view('myPages');
  }
  public function warning()
  {
      $this->session->set_flashdata('warning', 'Something is wrong.');
      return $this->load->view('myPages');
  }


  /**
    * Get All Data from this method.
    *
    * @return Response
   */
  public function info()
  {
      $this->session->set_flashdata('info', 'User listed bellow');
      return $this->load->view('myPages');
  }
	   
	public function home()
	{
		$data['userdetails']=$this->user->userdetails();
		$this->load->view('index',$data);
	}
	public function registration()
	{
		$data['use']=$this->user->usertype();
		$data['country']=$this->db->query('select * from countrymaster');
		$data['state']= $this->db->query('select * from state');

		$this->load->view('register.php',$data);
	}
	public function headerslider()
	{
				$data['headerslider']=$this->user->getheaderSlider();

		$this->load->view('headerslider',$data);
	}
	public function parentlist()
	{
		$data['parentlistl']=$this->db->query('SELECT * FROM `register` where utype=4 ');
		$this->load->view('parentlist',$data);
	}
	public function student()
	{	
		$data['studentl']=$this->db->query('SELECT * FROM `register` where utype=2 AND id='.$_GET['id']);
		$this->load->view('student',$data);
	}
	
	public function parent()
	{	
		$data['parent']=$this->db->query('SELECT * FROM `register` where utype=3 AND id='.$_GET['id']);
		$this->load->view('parent',$data);
	}
	public function stafflist()
	{
		$data['staffl']=$this->db->query('SELECT * FROM `register` where utype=4');
		$this->load->view('stafflist',$data);
	}
	public function studentlist()
	{
		$data['studentl']=$this->db->query('SELECT * FROM `register` where utype=2');
		
		$this->load->view('studentlist',$data);
	}
	public function getState()
	{
		$country=$this->input->post('country');
		$getTaxFinal=$this->db->query('SELECT * FROM `state` WHERE countryId="'.$country.'"');
		echo '<option selected="selected" disabled="disabled">STATE</option>';
       	foreach($getTaxFinal->result() as $row)
		{
			echo '<option value="'.$row->id.'">'.$row->stateName.'</option>';
		}
	  	
	}
	public function getCity()
	{
		 $stateId=$this->input->post('state');
		$getTaxFinal=$this->db->query('SELECT * FROM `city` WHERE StatID="'.$stateId.'"' );
       	foreach($getTaxFinal->result() as $row)
		{
			echo '<option value="'.$row->id.'">'.$row->city.'</option>';
		}
	  	
	}

	public function topbar()
	{
		$data['topbar']=$this->user->gettopbar();
		//var_dump($data['topbar']);

		$this->load->view('topbar',$data);
	}
	public function logomanagement()
	{
		$data['logo']=$this->user->getlogo();
		$this->load->view('logomanagement',$data);
	}
	public function headert()
	{
		$data['headert']=$this->user->getlogo();
		//var_dump($data['headert']);die();
		$this->load->view('include/header',$data);
	}
	public function collegehouses()
	{
				$data['collegehouses']=$this->user->getcollegehouses();

		$this->load->view('collegehouses',$data);
	}
	public function latestevents()
	{
		$data['latestevents']=$this->user->getcollegeevents();
		$this->load->view('latestevents',$data);
	}
	public function messagevideo()
	{
		$data['messagevedio']=$this->user->get_messagevedio();
		$this->load->view('messagevideo',$data);
	}
	public function latestnews()
	{
		$data['latestnews']=$this->user->getlatestevent();
		
		$this->load->view('latestnews',$data);
	}
	public function mission()
	{
		$data['mission']=$this->user->getmission();
		$this->load->view('mission',$data);
	}
	public function entrance()
	{
	$data['entrance']=$this->user->get_entrance();
		$this->load->view('entrance',$data);
	}
	public function menumgt()
	{
		$this->load->view('menumgt');
	}
	public function collegecalendar()
	{
		$data['calender']=$this->user->get_calender();
		$this->load->view('collegecalendar',$data);
	}
	public function accountsettings()
	{
			$data['accountsettings']=$this->user->get_accountsetting();

		$this->load->view('accountsettings',$data);
	}
	public function changepassword()
	{
		$this->load->view('changepassword');
	}
	public function save_topbar()
	{
	$mobile= $this->input->post('mobile');
	$email = $this->input->post('email');
	$fburl = $this->input->post('fburl');
	$twitterurl =  $this->input->post('twitterurl');
	
		$data = array(
			          'mobile'=>$mobile,
					  'email'=>$email,
					  'fburl'=>$fburl,
					  'twitterurl'=>$twitterurl

			         );
		  
				  $insert=$this->user->insert_topheader($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/topbar');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/topbar');
				  }
                
            
			
             redirect('welcome/topbar');         
	}
	public function save_logo()
	{
		
	$logocat= $this->input->post('logocat');
	$is_show= $this->input->post('is_show');
	$config['upload_path']   = './uploads/logo/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
//         $config['max_size']      = 100; 
//         $config['max_width']     = 1024; 
//         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         
         
			
        if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors()); 
			var_dump($error);die();
            
         }
         else { 
           $data1 =  array('upload_data' => $this->upload->data()); 
          $loginbackdrop= $data1["upload_data"]["file_name"];
		  
		  //var_dump($loginbackdrop);die();
             	
         }
		 
		 $data = array(
			           'logocat'=>$logocat,
					   'image'=>$loginbackdrop,
					   'is_show'=>$is_show,
			          );
					   
					   $insert=$this->user->insert_logo($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/logomanagement');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/logomanagement');
				  }         
	}
		
	 public function save_headerslider(){
		 $position= $this->input->post('position');
         
		 $config['upload_path']   = './uploads/slider/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
//         $config['max_size']      = 100; 
//         $config['max_width']     = 1024; 
//         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         
         
			
        if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors()); 
			var_dump($error);die();
            
         }
         else { 
           $data1 =  array('upload_data' => $this->upload->data()); 
          $loginbackdrop= $data1["upload_data"]["file_name"];
		  
		  //var_dump($loginbackdrop);die();
             	
         }
		 
		 $data = array(
			           'sliderOrder'=>$position,
					   'imgName'=>$loginbackdrop,
			          );
					   
					   $insert=$this->user->insert_headerslider($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/headerslider');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/headerslider');
				  }
					 
      } 
	  public function save_collegehouseslider(){
		 $position= $this->input->post('position');
         
		 $config['upload_path']   = './uploads/collegehouseslider/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
//         $config['max_size']      = 100; 
//         $config['max_width']     = 1024; 
//         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         
         
			
        if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors()); 
			var_dump($error);die();
            
         }
         else { 
           $data1 =  array('upload_data' => $this->upload->data()); 
          $loginbackdrop= $data1["upload_data"]["file_name"];
		  
         }
		 
		 $data = array(
			           'sliderOrder'=>$position,
					   'imgName'=>$loginbackdrop,
			          );
					   
					   $insert=$this->user->insert_collegehouseslider($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/collegehouses');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/collegehouses');
				  }
					 
      } 
	  	  public function save_latesteventslider(){
		 $position= $this->input->post('position');
         
		 $config['upload_path']   = './uploads/latesteventslider/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
//         $config['max_size']      = 100; 
//         $config['max_width']     = 1024; 
//         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         
         
			
        if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors()); 
			var_dump($error);die();
            
         }
         else { 
           $data1 =  array('upload_data' => $this->upload->data()); 
          $loginbackdrop= $data1["upload_data"]["file_name"];
		  
         }
		 
		 $data = array(
			           'sliderOrder'=>$position,
					   'imgName'=>$loginbackdrop,
			          );
					   
					   $insert=$this->user->insert_latesteventslider($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/latestevents');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/latestevents');
				  }
					 
      }
	   public function save_messagevideo(){
		 $message= $this->input->post('message');
		 $linkvideo = $this->input->post('linkvideo');
		// $position = $this->input->post('position');
		$data = array(
			          'message'=>$message,
					  'linkvideo'=>$linkvideo,
					  //'position'=>$position,
					  );
		  
				  $insert=$this->user->insert_messagevedio($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/messagevideo');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/messagevideo');
				  }
                
            
			
             redirect('welcome/messagevideo'); 
					 
      }
	  public function save_latestnews()
	{
	$newstitle= $this->input->post('newstitle');
	$description = $this->input->post('description');
	$position = $this->input->post('position');
		
		$data = array(
			          'newstitle'=>$newstitle,
					  'description'=>$description,
					  'position'=>$position,
					  );
		  
				  $insert=$this->user->insert_latestnews($data);
				  if($insert == true)
				  {
				  
            echo '<script type="text/javascript">alert("You Have Successfully updated this Record!");</script>';
           
				   redirect('welcome/latestnews');
				   
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/latestnews');
				  }
                
            
			
             redirect('welcome/latestnews');         
	}
	public function save_mission()
	{
	$missiontitle= $this->input->post('missiontitle');
	$description = $this->input->post('description');
	
		
		$data = array(
			          'missiontitle'=>$missiontitle,
					  'description'=>$description,
					 
					  );
		  
				  $insert=$this->user->insert_mission($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/mission');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/mission');
				  }
                
            
			
             redirect('welcome/mission');         
	}
	public function save_entrance()
	{
	$title= $this->input->post('title');
	$description = $this->input->post('description');
	
		
		$data = array(
			          'title'=>$title,
					  'description'=>$description,
					 
					  );
		  
				  $insert=$this->user->insert_entrance($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/entrance');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/entrance');
				  }
                
            
			
             redirect('welcome/entrance');         
	}
	public function save_calender()
	{
	$eventdate= $this->input->post('eventdate');
	$eventdetails = $this->input->post('eventdetails');
	
		
		$data = array(
			          'event_date'=>$eventdate,
					  'eventdetails'=>$eventdetails,
					 
					  );
		  
				  $insert=$this->user->insert_calender($data);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/collegecalendar');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/collegecalendar');
				  }
                
            
			
             redirect('welcome/entrance');         
	}
	public function save_acountsetting()
	{
	$name= $this->input->post('name');
	$email = $this->input->post('email');
	$mobile = $this->input->post('mobile');
	
		
		$config['upload_path']   = './uploads/accountSetting/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
//         $config['max_size']      = 100; 
//         $config['max_width']     = 1024; 
//         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         
         
			
        if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors()); 
			//var_dump($error);die();
            
         }
         else { 
           $data1 =  array('upload_data' => $this->upload->data()); 
          $loginbackdrop= $data1["upload_data"]["file_name"];
		  
         }
		 
		 $data = array(
			           'name'=>$name,
					   'email'=>$email,
					   'mobile'=>$mobile,
					   'image'=>$loginbackdrop,
			          );
					   
					   $insert=$this->user->insert_account($data);
					   var_dump($insert);
				  if($insert == true)
				  {
				  $this->session->set_flashdata('success','Successfully Save');
				   redirect('welcome/accountsettings');
				  }else{
				   $this->session->set_flashdata('error','Oop Try Again');
				    redirect('welcome/accountsettings');
				  }         
	}
	 function savdata()  
    {  
       // this array is used to get fetch data from the view page.  
		 
    	$regid = $this->input->post('regid');

       	$utype= $this->input->post('utype');
		 
		$fname = $this->input->post('fname');
		$lname=$this->input->post('lname');
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$cpassword= $this->input->post('cpassword');
		$mobile=  $this->input->post('mobile');
		$gender=  $this->input->post('gender');
		$month=  $this->input->post('month');
		$day=  $this->input->post('day');
		$year=    $this->input->post('year');
		$terms=    $this->input->post('terms');
		$country=    $this->input->post('country');
		$state=    $this->input->post('state');
		$district=    $this->input->post('district');
		$dob = $year.'-'.$month.'-'.$day; 
		$address= $country.' '.$state.' '.$district;
		$terms=$this->input->post('terms');
		if($terms=='on'){
		$tem='on';
		}
		else{
			$tem='off';
		}
			 $data = array(
						 'utype'=>$utype,
						  'regid'=>$regid,
							'fname'=>$fname,
							'lname'=>$lname,
							'email'=>$email,
							'password'=>$password,
							'cpassword'=>$cpassword,
							'mobile'=>$mobile,
							'gender'=>$gender,
							'dob'=>$dob,
							'address'=>$address,
							'terms'=>$temtem,
																
							  );
							 
        //insert data into database table.  
		$this->db->where('regid',$regid);	 
        $this->db->update('register',$data);  
  		$lastid = $regid;
  		$getTaxFinal=$this->db->query('SELECT * FROM `user` WHERE uid="'.$lastid .'"' );
       	$count = $getTaxFinal->num_rows();
       	if($count!=1){
		 $data1 = array(
						 'usertype'=>$utype,
							'username'=>$email,
							'password'=>$password,
							'uid'=>		$lastid,	
							  );
       	
		$this->db->insert('user',$data1);  
		if(Error == 1048 ){
		
		$this->session->set_flashdata('sucess','register Sucessfully');
		redirect("welcome/registration");
		exit();
		//echo "can not null";
		}

		else{
		//echo "<script>
//		alert('Data save successfully');
//		
		$this->session->set_flashdata('sucess','register Sucessfully');
        redirect("login");
		 
		} 
	}
	redirect("login");
    } 
	public function deletedata()
	{
	$id=$this->input->get('id');
	$table='asc_account';
	$this->user->deleterecords($id,$table);
	//var_dump($rs);die();
	
	
	}
	public function deleteHeaderslider()
	{
	$id=$this->input->get('id');
	$table='asc_sliderimg';
	$this->user->deleterecords($id,$table);
	
	
	}
	public function deleteCollegehouse()
	{
	$id=$this->input->get('id');
	$table='asc_collegehouses';
	$this->user->deleterecords($id,$table);
	redirect("welcome/collegehouses");
	}
	public function deletelatestevent()
	{
	$id=$this->input->get('id');
	$table='asc_latesteventslider';
	$this->user->deleterecords($id,$table);
	redirect("welcome/latestevents");
	}
	public function deletetopbar()
	{
	$id=$this->input->get('id');
	$table='asc_topheader';
	$this->user->deleterecords($id,$table);
	redirect("welcome/topbar");
	}
	public function deletelogo()
	{
	$id=$this->input->get('id');
	$table='asc_logo';
	$this->user->deleterecords($id,$table);
	redirect("welcome/logomanagement");
	}
	public function deletemessagevedio()
	{
	$id=$this->input->get('id');
	$table='asc_messagevedio';
	$this->user->deleterecords($id,$table);
	redirect("welcome/messagevideo");
	}
	public function deleteLatestnews()
	{
	$id=$this->input->get('id');
	
	$table='asc_latestnews';
	$this->user->deleterecords($id,$table);
	redirect("welcome/latestnews");
	}
	public function deletemission()
	{
	$id=$this->input->get('id');
	
	$table='asc_mission';
	$this->user->deleterecords($id,$table);
	redirect("welcome/mission");
	}
	public function deleteentrance()
	{
	$id=$this->input->get('id');
	
	$table='asc_entrance';
	$this->user->deleterecords($id,$table);
	redirect("welcome/entrance");
	}
	public function deletecalender()
	{
	$id=$this->input->get('id');
	
	$table='asc_calender';
	$this->user->deleterecords($id,$table);
	redirect("welcome/collegecalendar");
	}
	public function dataactivate()
	{
	$id=$this->input->get('id');
	$table='asc_latestnews';
	$status=$this->input->get('active');
	$this->user->activedeactivate($id,$table,$status);
	redirect("welcome/latestnews");
	}
	public function change_pass()
	{
		
			 // $old_pass=$this->input->post('old_pass');
			 // $new_pass=$this->input->post('new_pass');
			 // $confirm_pass=$this->input->post('confirm_pass');
			  // $session_id=$this->session->userdata('id');
			 // $que=$this->db->query("select * from user where id=".$session_id);
			 // $row=$que->row();
			 // if((!strcmp($old_pass, $pass))&& (!strcmp($new_pass, $confirm_pass))){
				 // $this->user->change_pass($session_id,$new_pass);
				 // echo "Password changed successfully !";
				 // }
			     // else{
				 // echo "Invalid";
				 // }
		// // }
		 // $this->load->view('changepassword');	
}
function savestudentreg()  
    {  
       // this array is used to get fetch data from the view page.  
		
       	$regno= $this->input->post('regno');
		$type= $this->input->post('type');
		$getTaxFinal=$this->db->query('SELECT `regid` FROM `register` WHERE regid="'.$regno.'"');
		//var_dump($getTaxFinal);die();
       	$count = $getTaxFinal->num_rows();
       	if($count!=1){
			 $data = array(
							'utype'=>$type,
							'regid'=>$regno,
																
							  );
							 
        
        $this->db->insert('register',$data);  
  		$error= $this->db->error();
			   if(!empty($error['message']))
			   {
				echo $error['message'];  
			   }else
			   {
                   echo "success";				   
			   }
			}
			else{
				echo $error['message'];  
			}
		//redirect("welcome/studentlist");
    } 
	function savestaffreg()  
    {  
       // this array is used to get fetch data from the view page.  
		
       	$regno= $this->input->post('regno');
		$type= $this->input->post('type');
		
			 $data = array(
							'utype'=>$type,
							'regid'=>$regno,
																
							  );
							 
        
        $this->db->insert('register',$data);  
  		$error= $this->db->error();
			   if(!empty($error['message']))
			   {
				echo $error['message'];  
			   }else
			   {
                   echo "success";				   
			   }
		//redirect("welcome/studentlist");
    } 
	
	function active()  
    {  
       		
		$id= $this->input->post('id');
		$status= $this->input->post('status');
		if($status==1){
			$st=0;
		}
		if($status==0){
			$st=1;
		}
		
			 $data = array(
							'status'=>$st,
																						
							  );
							 
        $this->db->where('id',$id);
        $this->db->update('register',$data);  
  		$error= $this->db->error();
			   if(!empty($error['message']))
			   {
				echo $error['message'];  
			   }else
			   {
                   echo "success";				   
			   }
		//redirect("welcome/studentlist");
    } 
    	 public function resumeUpload() {
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $filePath = "uploads/studentimage/" . date("dmY");
        $fileCount = $filePath . "/fileCount.txt";
        $i = 1;
        if (!(is_dir($filePath))) {
            mkdir($filePath);
        }
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        if (!file_exists($fileCount)) {
            $myfile = fopen($fileCount, "w");
            fwrite($myfile, "$i");
        } else {
            $myfile = fopen($fileCount, "r");
            $i = fgets($myfile);
            $i++;
        }
        if (move_uploaded_file($fileTmpName, $filePath . "/$i.$ext")) {
            $myfile = fopen($fileCount, "w");
            fwrite($myfile, $i);
            fclose($myfile);
            //echo "surendrda";
            //header('Content-Type: application/json');
            echo base_url() . $filePath . "/$i.$ext";
            // echo json_encode($ardj);
        } else {
            $myfile = fopen($fileCount, "w");
            fwrite($myfile, --$i);
            fclose($myfile);
            echo "Unable to Upload File";
            //sendBack('error',"Unable to Upload File");
        }
    }
    function savestudent()  
    {  
       // this array is used to get fetch data from the view page.  
		//echo "vai";
		$id= $this->input->post('id');
       	$fname= $this->input->post('fname');
		 $lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$mobile=$this->input->post('mobile');
		$alternatemobile= $this->input->post('alternatemobile');
		$eduction= $this->input->post('eduction');
		$currentaddress=  $this->input->post('currentaddress');
		$parmanentAddress=  $this->input->post('parmanentAddress');
		$resumeUrl=  $this->input->post('resumeUrl');
		$checkcon=  $this->input->post('checkcon');
		
		//var_dump($id);die();
			 $data = array(
						 	//'id'=>$id,
							'fname'=>$fname,
							'lname'=>$lname,
							'email'=>$email,
							'mobile'=>$mobile,
							'alternatemobile'=>$alternatemobile,
							'eduction'=>$eduction,
							'currentaddress'=>$currentaddress,
							'parmanentAddress'=>$parmanentAddress,
							'image'=>$resumeUrl,
							'terms'=>$checkcon
																
							  );
							 
        //insert data into database table.  
        //$this->db->insert('register',$data);
        			
  		$this->db->where('id',$id);
		 $update=$this->db->update('register',$data);
		
		$error= $this->db->error();
		   if ($update == true) 
		   {
		   	echo "success";
			
		   }else
		   {
	        echo $error['message'];     				   
		   }

}
public function getregistration()
	{
		 $f=$this->input->post('f');
		$getTaxFinal=$this->db->query('SELECT * FROM `register` WHERE regid="'.$f.'"' );

       	$count = $getTaxFinal->num_rows();
       		foreach($getTaxFinal->result() as $row)
		{
			echo $row->utype;
		}
  		if($count > 0){
  			echo $count;
  		}
  		else{
  			echo $count;
  		}
	  	
	}
	function deleteStudentreg(){
		$id=$this->input->post('id');
	$table='register';
	$this->user->deleterecords($id,$table);
	
	}
	function updateStudentdetails(){
		$id= $this->input->post('eid');
       	$regedit= $this->input->post('regedit');
		 $name = $this->input->post('name');
		$lname = $this->input->post('lname');
		$fathfnameedit=$this->input->post('fathfnameedit');
		$fathlnameedit= $this->input->post('fathlnameedit');
		$emailedit= $this->input->post('emailedit');
		$mobileedit=  $this->input->post('mobileedit');
		$addressedit=  $this->input->post('addressedit');
		$dobedit=  $this->input->post('dobedit');
		$genderedit=  $this->input->post('genderedit');
		$resumeUrl=  $this->input->post('resumeUrl');
		
		//var_dump($id);die();
			 $data = array(
						 	'regid'=>$regedit,
							'fname'=>$name,
							'lname'=>$lname,
							'fathfname'=>$fathfnameedit,
							'fathlname'=>$fathlnameedit,

							'email'=>$emailedit,
							'mobile'=>$mobileedit,
							
							'address'=>$addressedit,
							
							'image'=>$resumeUrl,
							'dob'=>$dobedit,
							'gender'=>$genderedit
																
							  );
							 
        //insert data into database table.  
        //$this->db->insert('register',$data);
        			
  		$this->db->where('id',$id);
		 $update=$this->db->update('register',$data);
		
		$error= $this->db->error();
		   if ($update == true) 
		   {
		   	echo "success";
			
		   }else
		   {
	        echo $error['message'];     				   
		   }
	}
}
