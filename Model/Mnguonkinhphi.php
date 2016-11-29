<?php  

class Mnguonkinhphi extends Database
{
  private $tennguonkinhphi;
  
  
    public function set_tennguonkinhphi($tennguonkinhphi)
    {
        $this->tennguonkinhphi = $tennguonkinhphi;
    }
    public function get_tennguonkinhphi()
    {
        return $this->tennguonkinhphi;
    }

    public function get_allnguonkinhphi()
    {
        $sql = "SELECT * FROM `tbl_nguonkinhphi`";
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

    public function add_nguonkinhphi()
    {
        $sql = "INSERT INTO `tbl_nguonkinhphi`(`TenNguon`) VALUES ('$this->tennguonkinhphi')";
        $this->query($sql);
    }

    public function suanguonkinhphi($id)
    {
        $sql = "UPDATE `tbl_nguonkinhphi` SET `TenNguon`='$this->tennguonkinhphi' WHERE `id`=$id";
        $this->query($sql);
    }

    public function xoanguonkinhphi($id)
    {
        $sql="DELETE FROM `tbl_nguonkinhphi` WHERE `id`=$id";
        $this->query($sql);
    }

    public function check_kp()
    {
       $sql = "SELECT * FROM `tbl_nguonkinhphi` WHERE `TenNguon`='$this->tennguonkinhphi'";
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