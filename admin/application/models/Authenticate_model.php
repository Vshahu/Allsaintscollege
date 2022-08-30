<?php 

/*
* Model
*/
class Authenticate_model extends CI_Model
{

 public function __construct()
                          {
	parent::__construct();
	}
    public function login($username, $password){
        
        // Validate
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('register', 'user.uid = register.regid');
		
		$this->db->where('user.username',$username);
        $this->db->where('user.password',$password);
		$query = $this->db->get();
		// JOIN table2 ON table2.id = table1.id
        // $this->db->where('user.username',$username);
        // $this->db->where('register.password',$password);

        // $result = $this->db->get('user');
//var_dump($query->row());
        if ($query->num_rows() == 1) {
            return $query->row();
        }else{
            return false;
        }
    }
	

}
