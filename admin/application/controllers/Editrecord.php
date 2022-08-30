<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editrecord extends CI_Controller {

	 public function __construct()
                          {
	parent::__construct();
 
$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->database();
		$this->load->model('emodel');
         
                    }
	
		/*Start Page Mention Here*/
		public function EditDoctorRecord($id,$table)
	
	{ 

	
	
	$data['editonerecord']= $this->emodel->EditDoctorR($id,$table);

	$data['com']= $this->emodel->EditDoctorC($id);
	$data['hos']= $this->emodel->EditDoctorH($id);
	

	
      $this->load->view('editDoctor.php',$data);
	
	}
		/*edit hospita*/
		public function EditHospitalRecord($id,$table)
	
	{ 

	
	
	$data['editonerecord']= $this->emodel->EditDoctorR($id,$table);

	
	

	
      $this->load->view('edithos.php',$data);
	
	}
	
	/*-------------*/
	public function listrecord()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listdoctorupdate($name,$value,$pk);
	

	
	}
		public function listBatch(){ 
                    $name=$this->input->post('name');
                    $value=$this->input->post('value');
                    $pk = $this->input->post('pk');
                    $this->emodel->listBatchupdate($name,$value,$pk);
		}
                public function listSubject(){ 
                    $name=$this->input->post('name');
                    $value=$this->input->post('value');
                    $pk = $this->input->post('pk');
                    $this->emodel->listSubjectupdate($name,$value,$pk);
		}
	
		public function liststationary()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listMstationary($name,$value,$pk);
	

	
	}	
	public function listCoaching()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listMcoach($name,$value,$pk);
	

	
	}	
	
		public function listReference()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listReferenceupdate($name,$value,$pk);
	

	
	}	
	
	
	public function listMaterial()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listMaterialeupdate($name,$value,$pk);
	

	
	}	
	
	public function listCourse()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listcourseupdate($name,$value,$pk);
	

	
	}	public function listHospital()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listHospitalupdate($name,$value,$pk);
	

	
	}
	public function listCity()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listCityupdate($name,$value,$pk);
	

	
	}
	public function listCotegory()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listPrefixupdate($name,$value,$pk);
	

	
	}
	
	public function listRelation()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listRelationupdate($name,$value,$pk);
	

	
	}
	
	public function listinvest()
	
	{ 

	 $name=$this->input->post('name');
	 $value=$this->input->post('value');
	$pk = $this->input->post('pk');
	$this->emodel->listInvestupdate($name,$value,$pk);
	

	
	}
	
 public function deleteMasterCart()
{

$id = $this->input->post('id');
$table = $this->input->post('table');

$this->emodel->DeleteMasterRecordCart($table,$id);
	echo '<div role="alert" class="alert alert-contrast alert-danger alert-dismissible"><div class="icon"><span class="mdi mdi-close-circle-o"></span></div><div class="message"><button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Info!</strong> Successfully Delete</div></div>';;
	
}
 public function deleteMaster()
{
//echo "ddddddd";
$id = $this->input->post('id');
$table = $this->input->post('table');

$this->emodel->DeleteMasterRecord($table,$id);
	//echo '<div role="alert" class="alert alert-contrast alert-danger alert-dismissible"><div class="icon"><span class="mdi mdi-close-circle-o"></span></div><div class="message"><button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Info!</strong> Successfully Delete</div></div>';;
	
}
 public function deleteMultiAdd()
{

$id = $this->input->post('id');
$table = $this->input->post('table');

$this->emodel->MultiAddInvest($table,$id);
	echo '<div role="alert" class="alert alert-contrast alert-danger alert-dismissible"><div class="icon"><span class="mdi mdi-close-circle-o"></span></div><div class="message"><button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Info!</strong> Successfully Delete</div></div>';;
	
}

public function UpdateMaterRecord($tb)
{
    $value=$this->input->post('value');
	 $name=$this->input->post('name');
	$pk = $this->input->post('pk');
//	$tb = $this->input->post('tb');
	$this->emodel->UpdateMater($name,$value,$pk,$tb);
}
public function UpdateMaterRecordhos()
{
    $value=$this->input->post('value');
	 $name=$this->input->post('name');
	$pk = $this->input->post('pk');
	$tb = $this->input->post('tb');
	$this->emodel->UpdateMaterhos($name,$value,$pk,$tb);
}

public function insertBalance()
{
    $value=$this->input->post('value');
	 $name=$this->input->post('name');
	$pk = $this->input->post('pk');
	
	$tb = $this->input->post('tb');
	
	 $data['camp']= $this->user->campare($pk);
	  $data['net']= $this->user->netval($pk);
	      
	  foreach($data['camp'] as $key){ $amount =$key->amount;} foreach($data['net'] as $key){$total=$key->total;}
	   $ch = $amount+$value;
	
	if($total < $ch)
	{
	$this->session->set_flashdata('message_name', '<script>alert("Dont Fill Exceed Amount ")</script>');
														redirect('welcome/investigationBill');
	}
	else{
	
	$data = array('report_id'=>$pk ,'amount'=>$value,'entryDate'=>date('d-m-Y'));
	$data['balance_last_id']=$this->emodel->insertbalMaster($name,$data);
	 $data['reportbalance']=$pk;
	 $this->session->set_userdata($data);
	$last_id= $this->session->userdata('balance_last_id');
     $sm = array('bd_id'=>$last_id,'bill_id'=>$value,'entryDate'=>date('d-m-Y'));
	   $this->user->lastinbalance($sm);
											
	}
	 
	
	  
	
}


	/*Payment Listing Investigation ---------------------------------------------------------------------------------------------------*/
	
	public function PveRecord($new,$id)
	
	{
	$data['nn']=$id;
	$data['new']=$new;
	 $data['cart']=$this->emodel->viewBillcart($id);
		
		  $data['bill']=$this->emodel->viewBill($id);
	$data['balnew']=$this->user->balancecount($id);
	
	
	$this->load->view('investListedit.php',$data);
	
	}
	/*----------------------------------------------------------------OMEGA Student Code Start-------------------------------------------------------------*/
	}