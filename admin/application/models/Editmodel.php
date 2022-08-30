<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Editmodel extends CI_Model{
    function __construct() {
     parent::__construct();
    }
	
	public function insertbalMaster($name,$data)	{
            $this->db->insert($name, $data);
            $insertId = $this->db->insert_id();
            return  $insertId;
	}
	
	public function listdoctorupdate($name,$value,$pk)
	{
	$data= array('id'=>$pk);
		$SaveR =array($name=>$value);
	$this->db->where($data);
$query=$this->db->update('adddoctor',$SaveR);
	}
	
		public function listSpecialupdate($name,$value,$pk)
	{
	$data= array('id'=>$pk);
		$SaveR =array($name=>$value);
	$this->db->where($data);
$query=$this->db->update('speciality',$SaveR);
	}
	public function listHospitalupdate($name,$value,$pk)
	{
	$data= array('id'=>$pk);
		$SaveR =array($name=>$value);
	$this->db->where($data);
$query=$this->db->update('addhospital',$SaveR);
	}
	public function listDegreeupdate($name,$value,$pk)
	{
	$data= array('id'=>$pk);
		$SaveR =array($name=>$value);
	$this->db->where($data);
$query=$this->db->update('degree',$SaveR);
	}
		public function listPrefixupdate($name,$value,$pk)
	{
	$data= array('id'=>$pk);
		$SaveR =array($name=>$value);
	$this->db->where($data);
$query=$this->db->update('prifixmaster',$SaveR);
	}
	public function listCityupdate($name,$value,$pk)
	{
	$data= array('id'=>$pk);
		$SaveR =array($name=>$value);
	$this->db->where($data);
$query=$this->db->update('city',$SaveR);
	}
	
	public function listInvestupdate($name,$value,$pk)
	{
	$data= array('id'=>$pk);
		$SaveR =array($name=>$value);
	$this->db->where($data);
$query=$this->db->update('investigation',$SaveR);
	}
	
	public function UpdateMater($name,$value,$pk,$tb)
	{
	
 $data= array('id'=>$pk);
		$SaveR =array($name => $value);
	   $this->db->where($data);
   $query=$this->db->update('adddoctor',$SaveR);
	
	}
	public function UpdateMaterHos($name,$value,$pk,$tb)
	{
	
 $data= array('id'=>$pk);
		$SaveR =array($name => $value);
	   $this->db->where($data);
   $query=$this->db->update('addhospital',$SaveR);
	
	}
	
	

/*Master Edit One  Record*/
public function EditDoctorR($id,$table)
{


        $this->db->select('*');
        $this->db->from(''.$table.' d'); 
        $this->db->join('city c', 'c.id=d.docCity', 'left');
        $this->db->join('locality l', 'l.id=d.locality', 'left');
	
        $this->db->where('d.id',$id);
  
   
       
    $query = $this->db->get(); 

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
         
            return $data;
        }
       
		
   return false;
}
public function EditDoctorC($id)
{


    $this->db->where('docCommission_id',$id);

 $query = $this->db->get('doccommission');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
         
            return $data;
        }
				
   return false;
}
public function EditDoctorH($id)
{


    $this->db->where('host_id',$id);

 $query = $this->db->get('hostnametime');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
         
            return $data;
        }
				
   return false;
}
/*cart delete----------*/

public function DeleteMasterRecordCart($table,$id)
	{
	$this->db->where('report_id',$id);
   $this->db->delete($table);
return $this->db->affected_rows() > 0 ? true:false;

	}

/*Master Delete Id*/
	public function DeleteMasterRecord($table,$id)
	{
	$this->db->where('id',$id);
   $this->db->delete($table);
return $this->db->affected_rows() > 0 ? true:false;

	}
	public function MultiAddInvest($table,$id)
	{
	$this->db->where('id',$id);
   $this->db->delete($table);
return $this->db->affected_rows() > 0 ? true:false;

	}
	/*---------------------------------------------------Bill----------------------------------------------------*/

	
	
	public function viewBill($id){
            $this->db->select('r.id as billId,r.entryDate,r.Name,r.phone,r.address,r.due,r.total,r.bal,r.opbal,r.status,r.Ager,r.Sex,r.referType,r.RefferedName as referId,r.Billfor,k.docName,k.docMobile,d.hosownerno,d.hosfname,r.iscontrast,r.contrastamount');
            $this->db->from($this->session->get_userdata()['reportTable'].' r'); 
            $this->db->join('adddoctor k', 'k.id=r.RefferedName', 'left');
            $this->db->join('addhospital d', 'd.id=r.RefferedName', 'left');
            $this->db->where('r.id',$id);
            $query = $this->db->get(); 
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
	}
	public function viewBillcart($id){
            $this->db->select('a.*,i.InvestigationName');
            $this->db->from($this->session->get_userdata()['investamountTable'].' a'); 
            $this->db->join('investigation i', 'i.id=a.invest', 'left');
            $this->db->where('a.report_id',$id);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
	}
        public function amountWords($num=0){
            $number = $num;
            $no = round($number);
            $point = round($number - $no, 2) * 100;
            $hundred = null;
            $digits_1 = strlen($no);
            $i = 0;
            $str = array();
            $words = array('0' => '', '1' => 'one', '2' => 'two',
                '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
                '7' => 'seven', '8' => 'eight', '9' => 'nine',
                '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
                '13' => 'thirteen', '14' => 'fourteen',
                '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
                '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
                '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
                '60' => 'sixty', '70' => 'seventy',
                '80' => 'eighty', '90' => 'ninety');
            $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
            while ($i < $digits_1) {
                $divider = ($i == 2) ? 10 : 100;
                $number = floor($no % $divider);
                $no = floor($no / $divider);
                $i += ($divider == 10) ? 1 : 2;
                if ($number) {
                    $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                    $hundred = ($counter == 1 && $str[0]) ? '  ' : null;
                    $str [] = ($number < 21) ? $words[$number] .
                        " " . $digits[$counter] . $plural . " " . $hundred
                     :
                        $words[floor($number / 10) * 10]
                        . " " . $words[$number % 10] . " "
                        . $digits[$counter] . $plural . " " . $hundred;
                } else $str[] = null;
            }
           $str = array_reverse($str);
           $result = implode('', $str);
           $points = ($point) ?
             "." . $words[$point / 10] . " " . 
                   $words[$point = $point % 10] : '';
           return strtoupper($result . "Only  " );
        }
            public function updatedet($id,$fname,$bfor,$phonenu,$address,$age,$rad1,$rad3,$refer){
                $data=array('Name'=> strtoupper($fname),'Billfor'=>strtoupper($bfor),'phone'=>$phonenu,'address'=>strtoupper($address),'Ager'=>$age,'Sex'=>$rad1,'referType'=>$rad3,'RefferedName'=>$refer);
                $this->db->where('id',$id);
                $this->db->update($this->session->get_userdata()['reportTable'],$data);
            }
            public function setinvAmount($id,$value){
                $reportId="";
                $invAmount=0;
                $total=0;
                $billrcv=0;
                $investTotal=0;
                $this->db->select("*");
                $this->db->where('id',$id);
                $this->db->from($this->session->get_userdata()['investamountTable']);
                $query =$this->db->get();
                foreach ($query->result() as $row){
                    $reportId= $row->report_id;
                    $invAmount=$row->amount;
                }
                $this->db->select("*");
                $this->db->where('id',$reportId);
                $this->db->from($this->session->get_userdata()['reportTable']);
                $query =$this->db->get();
                foreach ($query->result() as $row){
                    $total=$row->total;
//                    echo $row->opbal;
                }
                $this->db->select('sum(amount) as totl');
                $this->db->where('report_id',$reportId);
                $this->db->from($this->session->get_userdata()['balanceTable']);
                $query =$this->db->get();
                foreach ($query->result() as $row){
                    $billrcv= $row->totl;
                }
                $this->db->select('sum(amount) as totl');
                $this->db->where('report_id',$reportId);
                $this->db->from($this->session->get_userdata()['investamountTable']);
                $query =$this->db->get();
                foreach ($query->result() as $row){
                    $investTotal= $row->totl;
                }
                $total=$total-$invAmount;
                $total=$total+$value;
                $investTotal=$investTotal-$invAmount;
                $investTotal=$investTotal+$value;
                if($investTotal>=$billrcv){
                    $data=array('amount'=> $value);
                    $this->db->where('id',$id);
                    $this->db->update($this->session->get_userdata()['investamountTable'],$data);
                    $data=array('total'=> $total);
                    $this->db->where('id',$reportId);
                    $this->db->update($this->session->get_userdata()['reportTable'],$data);
                }else{
                    echo "n";
                }
            }
            public function updateContrast($id,$contr){
                $total=0;
                $contrast=0;
                $newtotal=0;
                $stContr='0';
                if($contr>0){
                    $stContr='1';
                }
                $this->db->select("*");
                $this->db->where('id',$id);
                $this->db->from($this->session->get_userdata()['reportTable']);
                $query =$this->db->get();
                foreach ($query->result() as $row){
                    $total=$row->total;
                    $contrast=$row->contrastamount;
//                    echo $row->opbal;
                }
                if($contr!=$contrast){
                    $newtotal=$total-$contrast;
                    $newtotal=$newtotal+$contr;
                    $data=array('total'=> $newtotal,'contrastamount'=>$contr,'iscontrast'=>$stContr);
                    $this->db->where('id',$id);
                    $this->db->update($this->session->get_userdata()['reportTable'],$data);
                }
            }
            public function getReportModel($dateRange,$invest,$investVal,$refertype,$doctor,$hospital,$billType){
                $business=0;
                $invtotal=0;
                $investArr=[];
                $from=explode(' - ',$dateRange)[0];
                $to=explode(' - ',$dateRange)[1];
                $fromymd=explode('-',$from)[2]."-".explode('-',$from)[1]."-".explode('-',$from)[0];
                $toymd=explode('-',$to)[2]."-".explode('-',$to)[1]."-".explode('-',$to)[0];
                if($refertype=="H"){
                    $this->db->select('hosfname');
                    $this->db->from('addhospital');
                    $this->db->where('id',$hospital);
                    $query1=$this->db->get();
                    $hospitalName=$query1->result()[0]->hosfname;
                    $this->db->select('id , InvestigationName');
                    if($invest=='true' && $investVal!=""){
                        $this->db->where('id',$investVal);
                    }
                    $this->db->from('investigation');
                    $query=$this->db->get();
                    $investArr=$query->result();
                    echo "<center><h1>$hospitalName</h1></center>";
                    echo "<center><h2>Report from ".$from." to ".$to."</h2></center>";
                    foreach($investArr as $arr){
                        $where=[];
                        
                        $this->db->select('b.*,a.amount as invamount,a.detail,c.docName,d.hosfname');
                        $this->db->from($this->session->get_userdata()['investamountTable'].' as a'); 
                        $this->db->join($this->session->get_userdata()['reportTable'].' as b', 'a.report_id=b.id', 'left outer');
                        $this->db->join('adddoctor as c', 'c.id=b.RefferedName', 'left outer');
                        $this->db->join('addhospital as d', 'd.id=b.RefferedName', 'left outer');
                        if($billType=="cancel"){
                            $where['b.status']='cancel';
                        }
                        $where['b.endate>=']=$fromymd;
                        $where['b.endate<=']=$toymd;
                        $where['b.RefferedName']=$hospital;
                        $where['b.referType']="H";
                        $where['a.invest']=$arr->id;
                        $this->db->where($where);
                        $query = $this->db->get(); 
    //                    echo $this->db->last_query();
                        if ($query->num_rows() > 0) {
                            echo "<h3 style='text-align:center'>".$arr->InvestigationName." Report from ".$from." to ".$to."</h3>";
                            $invtotal=0;
                            $i=1;
                            echo "<table width='100%'>";
                            echo "<thead><th>SR</th><th>Bill No.</th><th>Date</th><th>Patient Name</th><th>Age</th><th>Sex</th><th>Inv. Detail</th><th style='text-align:right'>Inv. Amount</th><th style='text-align:right'>Bill Amount</th><th>Refer By</th><th>Status</th></thead><tbody>";
                            foreach ($query->result() as $row) {
                                $this->db->select('sum(amount) as sm');
                                $this->db->from($this->session->get_userdata()['balanceTable']);
                                $this->db->where('report_id',$row->id);
                                $query1=$this->db->get();
                                $sum=$query1->result()[0]->sm+$row->contrastamount;
                                if($row->hosfname!="" && $row->RefferedName==$hospital){
                                    if($billType=="paid"){
                                        if($sum==$row->total){
                                            echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                            if($row->status=="Cancel"){
                                                echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                            }else{
                                                if($sum<$row->total){
                                                    echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                                }else{
                                                    echo "<span style='background-color:green;color:black;'>PAID</span>";
                                                }
                                            }
                                            echo "</td></tr>";
                                            if($row->status!="Cancel"){
                                                $invtotal+=$row->invamount;
                                            }
                                        }
                                    }else if($billType=="balance"){
                                        if($sum<$row->total && $row->status!="Cancel"){
                                            echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                            if($row->status=="Cancel"){
                                                echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                            }else{
                                                if($sum<$row->total){
                                                    echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                                }else{
                                                    echo "<span style='background-color:green;color:black;'>PAID</span>";
                                                }
                                            }
                                            echo "</td></tr>";
                                            if($row->status!="Cancel"){
                                                $invtotal+=$row->invamount;
                                            }
                                        }
                                    }else{
                                        echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                        if($row->status=="Cancel"){
                                            echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                        }else{
                                            if($sum<$row->total){
                                                echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                            }else{
                                                echo "<span style='background-color:green;color:black;'>PAID</span>";
                                            }
                                        }
                                        echo "</td></tr>";
                                        if($row->status!="Cancel"){
                                            $invtotal+=$row->invamount;
                                        }
                                    }

                                }
                            }
                            echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>Total</td><td style='text-align:right;'>".number_format($invtotal,2)."</td><td></td><td></td><td></td><td></td></tr>";
                            echo "</tbody></table>";
                        }else{
//                            echo "<center><span style='color:red'>No details available</span></center>";
                        }
                    }
                }else if($refertype=="D"){
                    $this->db->select('docName');
                    $this->db->from('adddoctor');
                    $this->db->where('id',$doctor);
                    $query1=$this->db->get();
                    $doctorName=$query1->result()[0]->docName;
                    $this->db->select('id , InvestigationName');
                    if($invest=='true' && $investVal!=""){
                        $this->db->where('id',$investVal);
                    }
                    $this->db->from('investigation');
                    $query=$this->db->get();
                    $investArr=$query->result();
                    echo "<center><h1>$doctorName</h1></center>";
                    echo "<center><h2>Report from ".$from." to ".$to."</h2></center>";
                    foreach($investArr as $arr){
                        $where=[];
                        
                        $this->db->select('b.*,a.amount as invamount,a.detail,c.docName,d.hosfname');
                        $this->db->from($this->session->get_userdata()['investamountTable'].' as a'); 
                        $this->db->join($this->session->get_userdata()['reportTable'].' as b', 'a.report_id=b.id', 'left outer');
                        $this->db->join('adddoctor as c', 'c.id=b.RefferedName', 'left outer');
                        $this->db->join('addhospital as d', 'd.id=b.RefferedName', 'left outer');
                        if($billType=="cancel"){
                            $where['b.status']='cancel';
                        }
                        $where['b.endate>=']=$fromymd;
                        $where['b.endate<=']=$toymd;
                        $where['a.invest']=$arr->id;
                        $where['b.RefferedName']=$doctor;
                        $where['b.referType']="D";
                        $this->db->where($where);
                        $query = $this->db->get(); 
    //                    echo $this->db->last_query();
                        if ($query->num_rows() > 0) {
                            echo "<h3 style='text-align:center'>".$arr->InvestigationName."</h3>";
                            $invtotal=0;
                            $i=1;
                            echo "<table width='100%'>";
                            echo "<thead><th>SR</th><th>Bill No.</th><th>Date</th><th>Patient Name</th><th>Age</th><th>Sex</th><th>Inv. Detail</th><th style='text-align:right'>Inv. Amount</th><th style='text-align:right'>Bill Amount</th><th>Refer By</th><th>Status</th></thead><tbody>";
                            foreach ($query->result() as $row) {
                                $this->db->select('sum(amount) as sm');
                                $this->db->from($this->session->get_userdata()['balanceTable']);
                                $this->db->where('report_id',$row->id);
                                $query1=$this->db->get();
                                $sum=$query1->result()[0]->sm+$row->contrastamount;
                                if($row->RefferedName==$doctor && $row->docName!=""){
                                    if($billType=="paid"){
                                        if($sum==$row->total){
                                            echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                            if($row->status=="Cancel"){
                                                echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                            }else{
                                                if($sum<$row->total){
                                                    echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                                }else{
                                                    echo "<span style='background-color:green;color:black;'>PAID</span>";
                                                }
                                            }
                                            echo "</td></tr>";
                                            if($row->status!="Cancel"){
                                                $invtotal+=$row->invamount;
                                            }
                                        }
                                    }else if($billType=="balance"){
                                        if($sum<$row->total && $row->status!="Cancel"){
                                            echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                            if($row->status=="Cancel"){
                                                echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                            }else{
                                                if($sum<$row->total){
                                                    echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                                }else{
                                                    echo "<span style='background-color:green;color:black;'>PAID</span>";
                                                }
                                            }
                                            echo "</td></tr>";
                                            if($row->status!="Cancel"){
                                                $invtotal+=$row->invamount;
                                            }
                                        }
                                    }else{
                                        echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                        if($row->status=="Cancel"){
                                            echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                        }else{
                                            if($sum<$row->total){
                                                echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                            }else{
                                                echo "<span style='background-color:green;color:black;'>PAID</span>";
                                            }
                                        }
                                        echo "</td></tr>";
                                        if($row->status!="Cancel"){
                                            $invtotal+=$row->invamount;
                                        }
                                    }
                                }
                            }
                            echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>Total</td><td style='text-align:right;'>".number_format($invtotal,2)."</td><td></td><td></td><td></td><td></td></tr>";
                            echo "</tbody></table>";
                        }else{
//                            echo "<center><span style='color:red'>No details available</span></center>";
                        }
                    }
                }else{
                    $this->db->select('id , InvestigationName');
                    if($invest=='true' && $investVal!=""){
                        $this->db->where('id',$investVal);
                    }
                    $this->db->from('investigation');
                    $query=$this->db->get();
                    $investArr=$query->result();
                    foreach($investArr as $arr){
                        $where=[];
                        echo "<h3 style='text-align:center'>".$arr->InvestigationName." Report from ".$from." to ".$to."</h3>";
                        $this->db->select('b.*,a.amount as invamount,a.detail,c.docName,d.hosfname');
                        $this->db->from($this->session->get_userdata()['investamountTable'].' as a'); 
                        $this->db->join($this->session->get_userdata()['reportTable'].' as b', 'a.report_id=b.id', 'left outer');
                        $this->db->join('adddoctor as c', 'c.id=b.RefferedName', 'left outer');
                        $this->db->join('addhospital as d', 'd.id=b.RefferedName', 'left outer');
                        if($billType=="cancel"){
                            $where['b.status']='cancel';
                        }
                        $where['b.endate>=']=$fromymd;
                        $where['b.endate<=']=$toymd;
                        $where['a.invest']=$arr->id;
                        $this->db->where($where);
                        $query = $this->db->get(); 
    //                    echo $this->db->last_query();
                        if ($query->num_rows() > 0) {
                            $i=1;
                            echo "<table width='100%'>";
                            echo "<thead><th>SR</th><th>Bill No.</th><th>Date</th><th>Patient Name</th><th>Age</th><th>Sex</th><th>Inv. Detail</th><th style='text-align:right'>Inv. Amount</th><th style='text-align:right'>Bill Amount</th><th>Refer By</th><th>Status</th></thead><tbody>";
                            foreach ($query->result() as $row) {
                                $this->db->select('sum(amount) as sm');
                                $this->db->from($this->session->get_userdata()['balanceTable']);
                                $this->db->where('report_id',$row->id);
                                $query1=$this->db->get();
                                $sum=$query1->result()[0]->sm+$row->contrastamount;
                                if($billType=="paid"){
                                    if($sum==$row->total){
                                        echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                        if($row->status=="Cancel"){
                                            echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                        }else{
                                            if($sum<$row->total){
                                                echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                            }else{
                                                echo "<span style='background-color:green;color:black;'>PAID</span>";
                                            }
                                        }
                                        echo "</td></tr>";
                                    }
                                }else if($billType=="balance"){
                                    if($sum<$row->total && $row->status!="Cancel"){
                                        echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                        if($row->status=="Cancel"){
                                            echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                        }else{
                                            if($sum<$row->total){
                                                echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                            }else{
                                                echo "<span style='background-color:green;color:black;'>PAID</span>";
                                            }
                                        }
                                        echo "</td></tr>";
                                    }
                                }else{
                                    echo "<tr><td>".$i++."</td><td>".$row->id."</td><td>".$row->entryDate."</td><td>".$row->Name."</td><td>".$row->Ager."</td><td>".$row->Sex."</td><td>".$row->detail."</td><td style='text-align:right;'>".$row->invamount."</td><td style='text-align:right;'>".$row->total."</td><td>".($row->referType==''?($row->docName==""?$row->hosfname:$row->docName):($row->referType=="H"?$row->hosfname:$row->docName))."</td><td>";
                                    if($row->status=="Cancel"){
                                        echo "<span style='background-color:red;color:black;'>CANCEL</span>";
                                    }else{
                                        if($sum<$row->total){
                                            echo "<span style='background-color:yellow;color:black;'>PENDING</span>";
                                        }else{
                                            echo "<span style='background-color:green;color:black;'>PAID</span>";
                                        }
                                    }
                                    echo "</td></tr>";
                                }
                            }
                            echo "</tbody></table>";
                        }else{
                            echo "<center><span style='color:red'>No details available</span></center>";
                        }
                    }
                }
            }
	}