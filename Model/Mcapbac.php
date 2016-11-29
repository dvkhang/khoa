<?php 
class Mcapbac extends Database
{

    private $tencapbac;
    
    private $tencapbac1;
    private $capdetai_id;
    
    public function set_tencapbac($tencapbac)
    {
        $this->tencapbac = $tencapbac;
    }
    
    public function set_capdetai_id($capdetai_id)
    {
        $this->capdetai_id = $capdetai_id;
    }
    public function get_tencapbac()
    {
        return $this->tencapbac;
    }
    
    public function set_tencapbac1($tencapbac1)
    {
        $this->tencapbac1 = $tencapbac1;
    }
    public function get_tencapbac1()
    {
        return $this->tencapbac1;
    }
    
    public function get_allcapbac()
    {
        $sql = "select * from tbl_capdetai";
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
    public function get_allcapbac1($id)
    {
        $sql = "select * from tbl_capdetai1 where CapDeTai_id = $id";
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
    public function Deletecb($id)
    {
        $sql1 = "DELETE FROM `tbl_capdetai1` WHERE `CapDeTai_id`= $id";
        $this->query($sql1);
        $sql = "DELETE FROM `tbl_capdetai` WHERE `id`= $id";
        $this->query($sql);
    }
    
    public function Deletecb1($id)
    {
        $sql = "DELETE FROM `tbl_capdetai1` WHERE `id`= $id";
        $this->query($sql);
    }
    
    public function addcapbac()
    {
        $sql="INSERT INTO `tbl_capdetai`(`TenCapDeTai`) VALUES ('$this->tencapbac')";
        $this->query($sql);
    }
    
    public function addcapbac1()
    {
        $sql="INSERT INTO `tbl_capdetai1`(`CapDeTai_id`, `TenCapDeTai1`) VALUES ('$this->capdetai_id','$this->tencapbac1')";
        $this->query($sql);
        
    }
    public function check_capbac()
    {
        $sql = "SELECT `id`, `TenCapDeTai` FROM `tbl_capdetai` WHERE `TenCapDeTai` = '$this->tencapbac' ";
        $this->query($sql);
        if($this->num_rows() == 1)
        {
            return 1;
        }else
        {
            return 2;
        }
    }
    
    public function check_capbac1()
    {
        $sql = "SELECT * FROM `tbl_capdetai1` WHERE `TenCapDeTai1`= '$this->tencapbac1' ";
        $this->query($sql);
        if($this->num_rows() == 1)
        {
            return 1;
        }else
        {
            return 2;
        }
    }

    public function suacb($id)
    {
        $sql = "UPDATE `tbl_capdetai` SET `TenCapDeTai`='$this->tencapbac' WHERE `id`=$id";
        $this->query($sql);
    }

    public function suacb1($id)
    {
        $sql="UPDATE `tbl_capdetai1` SET `TenCapDeTai1`='$this->tencapbac1' WHERE `id`=$id";
        $this->query($sql);
    }
}
?> 