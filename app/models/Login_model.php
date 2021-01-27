<?php

class Login_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function validate_user($user,$pass){
	 /*$this->db->select('*');
	 $this->db->from('tbl_carousels,tbl_crsl_images');
	 $this->db->where("tbl_carousels.crsl_page",$pg);
	 $this->db->where('tbl_carousels.crsl_id=tbl_crsl_images.crsl_id');
	 $this->db->order_by('cimg_prio','ASC');
		$crsl_imgs_query = $this->db->get();
		return $crsl_imgs_query->result_array();
	 */
		//$this->db->select(*);
		return true;
	}

}

?>