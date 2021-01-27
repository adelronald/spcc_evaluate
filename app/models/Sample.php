<?php

class Sample extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function gen_id($id){
		$dt = new DateTime("now", new DateTimeZone("Asia/Manila"));
		$y = $dt->format('Y');
		$m = $dt->format('m');
		$d = $dt->format('d');
		$val_query = $this->db->get_where('tbl_ct_values',array('ctval_id'=>$id));
		$val_data = $val_query->row_array();
		$seq = $val_data['ctval_cval'];
		$cid='';
		$ver_query='';
		do{
			$val_len = strlen($seq);
			$salted = $seq;
			if($val_len == 1){
				$salted = '00'.$salted;
			}else if ($val_len == 2){
				$salted = '0'.$salted;
			}
			$cid = $val_data['ctval_pref'].$y.$m.$salted.$d.$val_data['ctval_suff'];
			
			$ver_query = $this->db->get_where($val_data['ctval_tbl'],array($val_data['ctval_fld']=>$cid));
			$seq++;
		}while($ver_query->num_rows() > 0);
		$this->db->where('ctval_id',$id);
		$this->db->set('ctval_cval',$seq);
		$this->db->update('tbl_ct_values');
		return $cid;
	}
}

?>