<?php 

class Mcanbo extends Database
{
    private $macb;
    private $tencanbo;
    private $ngaysinh;
    private $chucvu;
    private $hocvi;
    private $hocham;
    private $donvi;
    private $diachi;
    private $dienthoai;
    private $email;
    
    
    public function set_macb($macb)
    {
        $this->macb = $macb;
    }
    public function get_macb()
    {
        return $this->macb;
    }
    
    public function set_tencanbo($tencanbo)
    {
        $this->tencanbo = $tencanbo;
    }
    public function get_tencanbo()
    {
        return $this->tencanbo;
    }
    
    public function set_ngaysinh($ngaysinh)
    {
        $this->ngaysinh = $ngaysinh;
    }
    public function get_ngaysinh()
    {
        return $this->ngaysinh;
    }
    
    public function set_chucvu($chucvu)
    {
        $this->chucvu = $chucvu;
    }
    public function get_chucvu()
    {
        return $this->chucvu;
    }

    public function set_hocvi($hocvi)
    {
        $this->hocvi = $hocvi;
    }
    public function get_hocvi()
    {
        return $this->hocvi;
    }

    public function set_hocham($hocham)
    {
        $this->hocham = $hocham;
    }
    public function get_hocham()
    {
        return $this->hocham;
    }

    public function set_donvi($donvi)
    {
        $this->donvi = $donvi;
    }
    public function get_donvi()
    {
        return $this->donvi;
    }

    public function set_diachi($diachi)
    {
        $this->diachi = $diachi;
    }
    public function get_diachi()
    {
        return $this->diachi;
    }

    public function set_dienthoai($dienthoai)
    {
        $this->dienthoai = $dienthoai;
    }
    public function get_dienthoai()
    {
        return $this->dienthoai;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }
    public function get_email()
    {
        return $this->email;
    }


    public function themcb()
    {
        $sql = "INSERT INTO `tbl_canbo`(`id`,`TenCanBo`, `NgaySinh`, `ChucVu`, `HocVi`, `HocHam`, `DonVi`, `DiaChi`, `DienThoai`, `Email`) 
        VALUES ('$this->macb','$this->tencanbo','$this->ngaysinh','$this->chucvu','$this->hocvi','$this->hocham','$this->donvi',
        '$this->diachi','$this->dienthoai','$this->email')";
        $this->query($sql);
    }

    public function check_cb()
    {
        $sql = "SELECT * FROM `tbl_canbo` WHERE `id`='$this->macb'";
        $this->query($sql);
        if($this->num_rows() == 1)
        {
            return 1;
        }else
        {
            return 2;
        }
    }

    public function sua_cb()
    {
        $sql = "UPDATE `tbl_canbo` SET `id`='$this->macb' , `TenCanBo`='$this->tencanbo',`NgaySinh`='$this->ngaysinh',`ChucVu`='$this->chucvu',`HocVi`='$this->hocvi',
        `HocHam`='$this->hocham',`DonVi`='$this->donvi',`DiaChi`='$this->diachi',`DienThoai`='$this->dienthoai',`Email`='$this->email' WHERE `id`='$this->macb'";
        $this->query($sql);
    }

    public function xoa_cb()
    {
        $sql = "DELETE FROM `tbl_canbo` WHERE `id`='$this->macb'";
        $this->query($sql);
    }
    public function get_allcb()
    {
        $sql = "SELECT * FROM `tbl_canbo`";
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
}
?>