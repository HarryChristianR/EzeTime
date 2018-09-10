<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ezetime_model extends CI_Model{

	
	public function log($data){
		$this->db->insert('tbl_logs',$data);
	}
	public function fetch($employee_id=null){
		if($employee_id!=null){
			$this->db->select("*");
	        $this->db->from("test");
	        $this->db->where("employee_id",$employee_id);
	        $query = $this->db->get();
	        return $query->row();
		}
		else{
			$this->db->select("*");
	        $this->db->from("test");
	        $this->db->where("employee_id",4800047820251);
	        $query = $this->db->get();
	        return $query->row();
		}
		
	}
	public function fetch_status($employee_id=null){
		if($employee_id!=null){
			$this->db->select("*");
	        $this->db->from("tbl_employee");
	        $this->db->where("employee_id",$employee_id);
	        $query = $this->db->get();
	        return $query->row();
		}
		else{
			$this->db->select("*");
	        $this->db->from("tbl_employee");
	        $this->db->where("employee_id",4800047820251);
	        $query = $this->db->get();
	        return $query->row();
		}
		
	}

}