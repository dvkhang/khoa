<?php 
	class User extends Database
	{
		private $id;
		private $Username;
		private $Password;
		private $HoTen;
		private $NgaySinh;
		private $DiaChi;
		private $Level;

		public function set_Username($Username)
		{
			$this->Username = $Username;
		}
		public function get_Username()
		{
			return $this->Username;
		}

		public function set_Password($Username)
		{
			$this->Password = $Password;
		}
		public function get_Password()
		{
			return $this->Password;
		}

		public function set_HoTen($HoTen)
		{
			$this->HoTen = $HoTen;
		}
		public function get_HoTen()
		{
			return $this->HoTen;
		}

		public function set_NgaySinh($NgaySinh)
		{
			$this->NgaySinh = $NgaySinh;
		}
		public function get_NgaySinh()
		{
			return $this->NgaySinh;
		}

		public function set_DiaChi($DiaChi)
		{
			$this->DiaChi = $DiaChi;
		}
		public function get_DiaChi()
		{
			return $this->DiaChi;
		}

		public function set_Level($Level)
		{
			$this->Level = $Level;
		}
		public function get_DiaChi()
		{
			return $this->Level;
		}

		public function get_all_user()
        {
            $sql = "SELECT * FROM `User` ORDER BY `User`.`id` ASC";
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

        public function get_user_id($id)
        {
        	$sql="select * form User WHERE User.id = '$id'";
        	$this->query($sql);
        }

        public function set_user()
        {
        	$sql="INSERT INTO `User`(`Username`, `Password`, `HoTen`, `NgaySinh`, `DiaChi`, `Level`) 
            VALUES ('$this->Username','$this->Password','$this->HoTen','$this->NgaySinh','$this->DiaChi','$this->Level')";
            $this->query($sql);
        }

        public function check_uer()
        {
            $sql = "select * from User where Username = '$this->Username'and Password = '$this->Password' ";
            $this->query($sql);
            if($this->num_rows() == 1)
            {
                return 1;
            }else
            {
                return 2;
            }
        }
	}
 ?>