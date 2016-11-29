<?php 
	class BaoCao1 extends Database{
		private $ten_bai_bao;
		private $ten_tap_chi;
		private $tap_chi_so;
		private $trang_dang;
		private $dia_chi;
		private $tap;
		private $nam;
		private $phan_loai;
		private $dia_diem;
		private $danh_sach_tac_gia;
		private $tac_gia_tnu;
		
		
		function set_ten_bai_bao($ten_bai_bao){
			$this->ten_bai_bao=$ten_bai_bao;
		}
		function get_ten_bai_bao(){
			return $this->ten_bai_bao;
		}

		function set_ten_tap_chi($ten_tap_chi){
			$this->ten_tap_chi=$ten_tap_chi;
		}
		function get_ten_tap_chi(){
			return $this->ten_tap_chi;
		}

		function set_tap_chi_so($tap_chi_so){
			$this->tap_chi_so=$tap_chi_so;
		}
		function get_tap_chi_so(){
			return $this->tap_chi_so;
		}

		function set_trang_dang($trang_dang){
			$this->trang_dang=$trang_dang;
		}
		function get_trang_dang(){
			return $this->trang_dang;
		}

		function set_dia_chi($dia_chi){
			$this->dia_chi=$dia_chi;
		}
		function get_dia_chi(){
			return $this->dia_chi;
		}

		function set_tap($tap){
			$this->tap=$tap;
		}
		function get_tap(){
			return $this->tap;
		}

		function set_nam($nam){
			$this->nam=$nam;
		}
		function get_nam(){
			return $this->nam;
		}

		function set_phan_loai($phan_loai){
			$this->phan_loai=$phan_loai;
		}
		function get_phan_loai(){
			return $this->phan_loai;
		}

		function set_dia_diem($dia_diem){
			$this->dia_diem=$dia_diem;
		}
		function get_dia_diem(){
			return $this->dia_diem;
		}

		function set_danh_sach_tac_gia($danh_sach_tac_gia){
			$this->danh_sach_tac_gia=$danh_sach_tac_gia;
		}
		function get_danh_sach_tac_gia(){
			return $this->danh_sach_tac_gia;
		}


		function set_tac_gia_tnu($tac_gia_tnu){
			$this->tac_gia_tnu=$tac_gia_tnu;
		}
		function get_tac_gia_tnu(){
			return $this->tac_gia_tnu;
		}

		function them_bai_bao(){
			$sql="INSERT INTO newspagers( name, magazine_name, 	magazine_issue, magazine_page, address, part, year, 	category, 	location, auth, is_auth_tnu) VALUES ('".$this->get_ten_bai_bao()."','";
			$sql.=$this->get_ten_tap_chi()."','".$this->get_tap_chi_so()."', '".$this->get_trang_dang()."', '".$this->get_dia_chi()."', '";
			$sql.=$this->get_tap()."', '".$this->get_nam()."', '".$this->get_phan_loai()."', '".$this->get_dia_diem()."', '";
			$sql.=$this->get_danh_sach_tac_gia()."', '".$this->get_tac_gia_tnu()."')";
			// echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}

		public function danhsach()
	    {
	        $sql = "SELECT * FROM newspagers";
	        $this->query($sql);
	        
	        if($this->num_rows()==0)
	        {
	            $data=0;
	        }
	        else
	        {
	            while($row=$this->fetch())
	            {
	                $data[] = $row;
	            }
	        }
	        return $data;
	    }

	    	function sua_bao_cao($id){
			$sql="UPDATE newspagers SET name='".$this->get_ten_bai_bao()."', magazine_name='";
			$sql.=$this->get_ten_tap_chi()."', magazine_issue='".$this->get_tap_chi_so()."', magazine_page='".$this->get_trang_dang()."', address='".$this->get_dia_chi()."', part='".$this->get_tap()."', year='".$this->get_nam()."', location='".$this->get_dia_diem()."', auth='".$this->get_danh_sach_tac_gia()."', is_auth_tnu='".$this->get_tac_gia_tnu()."'  WHERE id='".$id."'";
			// echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}

		function xoa_baocao($id){
			$sql="DELETE FROM newspagers WHERE id='".$id."'";
			echo $sql;
			$this->query($sql);
			if ($this->affected()==0) {
				return false;
			}else{
				return true;
			}
		}

		// function show_Categories(){
		// 	$sql="SELECT "." u.user_name, c.cat_id, c.cat_name, c.cat_description FROM users AS u ";
		// 	$sql.="JOIN categories AS c USING(user_id)";
		// 	//echo $sql;
		// 	$this->query($sql);
		// 	if ($this->numRows()==0) {
		// 		$data=0;
		// 	}else{
		// 		while ($row=$this->getArray()) {
		// 			$data[]=$row;
		// 		}
		// 	}
		// 	return $data;
		// }
		// function show_Categoties_ById($cat_id){
  //   		$sql="SELECT * FROM categories WHERE cat_id='".$cat_id."'";
  //   		// echo $sql;
  //   		$this->query($sql);
  //   		if ($this->numRows()==0) {
  //   			$data=0;
  //   		}else{
  //   			while($row=$this->getArray()){
		// 			$data[]=$row;	
		// 		}
  //   		}
  //   		return $data;
  //   	}
	
		// function check_Edit($cat_id){
		// 	$sql="SELECT * FROM categories WHERE cat_name='".$this->get_CatName()."' "."AND cat_id != '".$cat_id."'"; 
		// 	//echo $sql;
		// 	$this->query($sql);
		// 	if ($this->numRows()==0) {
		// 		return false;
		// 	}else{
		// 		return true;
		// 	}
		// }
		
		// function check_Exist(){
		// 	$sql="SELECT * FROM categories WHERE cat_name='".$this->get_CatName()."'";
		// 	//echo $sql;
		// 	$this->query($sql);
		// 	if ($this->numRows()==0) {
		// 		return false;
		// 	}else{
		// 		return true;
		// 	}
		// }

		// function amount_Cat(){
		// 	$sql="SELECT * FROM categories";
		// 	//echo $sql;
		// 	$this->query($sql);
		// 	if ($this->numRows()==0) {
		// 		$data=0;
		// 	}else{
		// 		$data=$this->numRows();
		// 	}
		// 	return $data;
		// }
	}
 ?>