	<?php 
	/**
	* 
	*/
	class Mlinhvuc extends Database
	{
		
		private $tenlinhvuc;
		private $tenlinhvuc1;
		private $linhvuc_id;

		public function set_tenlinhvuc($tenlinhvuc)
		{
			$this->tenlinhvuc = $tenlinhvuc;
		}
		public function get_tenlinhvuc()
		{
			return $this->tenlinhvuc;
		}

		public function set_tenlinhvuc1($tenlinhvuc1)
		{
			$this->tenlinhvuc1 = $tenlinhvuc1;
		}
		public function get_tenlinhvuc1()
		{
			return $this->tenlinhvuc1;
		}

		public function set_linhvuc_id($linhvuc_id)
		{
			$this->linhvuc_id = $linhvuc_id;
		}
		public function get_linhvuc_id()
		{
			return $this->linhvuc_id;
		}

		public function get_alllinhvuc()
		{
			$sql = "SELECT * FROM tbl_linhvuc";
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

		public function get_alllinhvuc1()
		{
			$sql = "SELECT * FROM `tbl_linhvuc1` WHERE `LinhVuc_id`='$this->linhvuc_id'";
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

		public function add_linhvuc()
		{
			$sql = "INSERT INTO `tbl_linhvuc`(`TenLinhVuc`) VALUES ('$this->tenlinhvuc')";
			$this->query($sql);
		}
		public function add_linhvuc1()
		{
			$sql = "INSERT INTO `tbl_linhvuc1`(`LinhVuc_id`, `TenLinhVuc1`) VALUES ('$this->linhvuc_id','$this->tenlinhvuc1')";
			$this->query($sql);
		}

		public function check_linhvuc()
		{
			$sql = "SELECT * FROM `tbl_linhvuc` WHERE `TenLinhVuc`='$this->tenlinhvuc'";
			$this->query($sql);
			if($this->num_rows() == 1)
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}

		public function check_linhvuc1()
		{
			$sql = "SELECT * FROM `tbl_linhvuc1` WHERE `TenLinhVuc1`='$this->tenlinhvuc1'";
			$this->query($sql);
			if($this->num_rows() == 1)
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}


		public function Deletelv($id)
		{
			$sql1 = "DELETE FROM `tbl_linhvuc1` WHERE `LinhVuc_id`= $id";
			$this->query($sql1);
			$sql = "DELETE FROM `tbl_linhvuc` WHERE `id`= $id";
			$this->query($sql);
		}

		public function Deletelv1($id)
		{
			$sql = "DELETE FROM `tbl_linhvuc1` WHERE `id`= $id";
			$this->query($sql);
		}


		public function sualv($id)
		{
			$sql = "UPDATE `tbl_linhvuc` SET `TenLinhVuc`= '$this->tenlinhvuc' WHERE `id`=$id";
			$this->query($sql);
		}

		public function sualv1($id)
		{
			$sql = "UPDATE `tbl_linhvuc1` SET `TenLinhVuc1`='$this->tenlinhvuc1' WHERE `id`=$id";
			$this->query($sql);
		}
	}
	?>