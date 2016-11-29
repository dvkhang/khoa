<?php
class Muser extends Database
{
    private $username;
    private $password;
    private $hoten;
    private $ngaysinh;
    private $diachi;
    private $level;
    
    public function set_username($username)
    {
        $this ->username =$username;
    }
    public function get_username()
    {
        return $this->username;
    }
    
    public function set_password($password)
    {
        $this ->password =$password;
    }
    public function get_password()
    {
        return $this->password;
    }
    
    public function set_hoten($hoten)
    {
        $this ->hoten =$hoten;
    }
    public function get_hoten()
    {
        return $this->hoten;
    }
    
    public function set_ngaysinh($ngaysinh)
    {
        $this ->ngaysinh =$ngaysinh;
    }
    public function get_ngaysinh()
    {
        return $this->ngaysinh;
    }
    
    public function set_diachi($diachi)
    {
        $this ->ngaysinh =$ngaysinh;
    }
    public function get_diachi()
    {
        return $this->diachi;
    }
    
    public function set_level($level)
    {
        $this ->level =$level;
    }
    public function get_level()
    {
        return $this->level;
    }
    
    public function get_alluser()
    {
        $sql = "select * from tbl_username ";
        $this->query($sql);
        return $this->fetch();
    }
    
    public function check_uer()
    {
        $sql = "select * from tbl_username where Username = '$this->username'and Password = '$this->password' ";
        $this->query($sql);
        if($this->num_rows() == 1)
        {
            return 1;
        }else
        {
            return 2;
        }
    }
    
    public function add_user()
    {
        $sql="INSERT INTO `tbl_username`(`Username`, `Password`, `HoTen`, `NgaySinh`, `DiaChi`, `Level`) 
        VALUES ('$this->username','$this->password','$this->hoten','$this->ngaysinh','$this->diachi','$this->level')";
        $this->query($sql);
    }
    
    public function update_user($id)
    {
        $sql="UPDATE `tbl_username` SET `Username`='$this->username',`Password`='$this->password',`HoTen`='$this->hoten',`NgaySinh`='$this->ngaysinh',`DiaChi`='$this->diachi',`Level`='$this->level' WHERE id=$id";
        $this->query($sql);
    }
    
    public function delete_user($id)
    {
        $sql="DELETE FROM `tbl_username` WHERE user_id=$id";
        $this->query($sql);
    }
}
?>