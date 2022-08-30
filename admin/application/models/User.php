<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class User extends CI_Model{
        function __construct() {
       
        }
        /*
         * get rows from the users table
         */
    
        /*
         * Insert user information
         */
  /*First Page Of Company Config Profile */
  
   function insert_topheader($data)
    {
		 $this->db->insert('asc_topheader', $data);
		 $this->db->affected_rows();
		
		return $this->db->affected_rows() > 0 ? true:false;
	}
	function usertype()
	 {
		$this->db->select('*');
		$this->db->from('usertype');
		
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 }
	 function userdetails()
	 {
		$this->db->select('*');
		$this->db->from('user');
		
		$query = $this->db->get();
		$count=$query->num_rows();
		if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 }
	function gettopbar()
	{
	$this->db->select('*');
	$this->db->from('asc_topheader');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function headert()
	{
	$this->db->select('*');
	$this->db->from('user');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function getheaderSlider()
	{
	$this->db->select('*');
	$this->db->from('asc_sliderimg');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function getlogo()
	{
	$this->db->select('*');
	$this->db->from('asc_logo');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function getcollegehouses()
	{
	$this->db->select('*');
	$this->db->from('asc_collegehouses');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function getcollegeevents()
	{
	$this->db->select('*');
	$this->db->from('asc_latesteventslider');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function getmission()
	{
	$this->db->select('*');
	$this->db->from('asc_mission');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function getlatestevent()
	{
	$this->db->select('*');
	$this->db->from('asc_latestnews');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function get_entrance()
	{
	$this->db->select('*');
	$this->db->from('asc_entrance');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function get_calender()
	{
	$this->db->select('*');
	$this->db->from('asc_calender');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function get_messagevedio()
	{
	$this->db->select('*');
	$this->db->from('asc_messagevedio');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function get_accountsetting()
	{
	$this->db->select('*');
	$this->db->from('asc_account');
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function insert_logo($data)
    {
		 $this->db->insert('asc_logo', $data);
		 $this->db->affected_rows();
		
		return $this->db->affected_rows() > 0 ? true:false;
	}
	function insert_headerslider($data)
    {
		 $this->db->insert('asc_sliderimg', $data);
		 $this->db->affected_rows();
		 $this->db->affected_rows() > 0 ? true:false;
	}
	function insert_collegehouseslider($data)
    {
		 $this->db->insert('asc_collegehouses', $data);
		 $this->db->affected_rows();
		 $this->db->affected_rows() > 0 ? true:false;
	}
	function insert_latesteventslider($data)
    {
		 $this->db->insert('asc_latesteventslider', $data);
		 $this->db->affected_rows();
		 $this->db->affected_rows() > 0 ? true:false;
	}
	function insert_latestnews($data)
    {
		 $this->db->insert('asc_latestnews', $data);
		 $this->db->affected_rows();
		return $this->db->affected_rows() > 0 ? true:false;
	}
	function insert_mission($data)
    {
		 $this->db->insert('asc_mission', $data);
		 $this->db->affected_rows();
		return $this->db->affected_rows() > 0 ? true:false;
	}
	function insert_entrance($data)
    {
		 $this->db->insert('asc_entrance', $data);
		 $this->db->affected_rows();
		return $this->db->affected_rows() > 0 ? true:false;
	}
	function insert_calender($data)
    {
		 $this->db->insert('asc_calender', $data);
		 $this->db->affected_rows();
		return $this->db->affected_rows() > 0 ? true:false;
	}
		function insert_account($data)
    {
		 $this->db->insert('asc_account', $data);
		 $this->db->affected_rows();
		return $this->db->affected_rows() > 0 ? true:false;
	}
	public function inserwholedata($data)
	  {
	  
	     	 $this->db->insert('register',$data);
		 $this->db->affected_rows();
		
		return $this->db->affected_rows() > 0 ? true:false;
	  }
	  function insert_messagevedio($data)
    {
		 $this->db->insert('asc_messagevedio', $data);
		 $this->db->affected_rows();
		return $this->db->affected_rows() > 0 ? true:false;
	}
	function deleterecords($id,$table)
	{
		
	$this->db->query("delete  from ".$table." where id='".$id."'");
	
	}
	function activedeactivate($id,$table,$status)
	{
	$this->db->select('*');
	$this->db->from($table);
	
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
                //$data[] = $row;
				if($row->active=='Y'){ 
					$data[]=$this->db->query("update ".$table."  set active='N' where id=".$id);
           }
		   else {
				$data[]=$this->db->query("update ".$table."  set active='Y' where id=".$id);
		   }
         return $data;
       }
		 return false;
		}
	}
	function get_userdetails()
	{
	$this->db->select('*');
		$this->db->from('user');
		$this->db->join('register', 'user.uid = register.id');
		
		$this->db->where('user.username',$username);
        $this->db->where('register.password',$password);
		$query = $this->db->get();
	
   $query = $this->db->get();
      if ($query->num_rows() > 0) {
           foreach ($query->result() as  $row) {
                $data[] = $row;
           }
        
           return $data;
       }
	 return false;
	}
	function fetch_pass($session_id)
	{
	$fetch_pass=$this->db->query("select * from user where id='$session_id'");
	$res=$fetch_pass->result();
	}
	function change_pass($session_id,$new_pass)
	{
	$update_pass=$this->db->query("UPDATE user set password='$new_pass'  where id='$session_id'");
	}
}