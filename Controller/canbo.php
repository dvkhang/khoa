<?php
include 'Model/Mcanbo.php';

class canbo
{
   public $m_canbo;
   function __construct()
   {
      $this->m_canbo = new Mcanbo;
  }

  public function danhsach()
  {
      $danhsach = $this->m_canbo->get_allcb();
      include 'View/canbo/danhsach.php';
  }

  public function themcb()
  {
    if(isset($_POST['themcb']))
    {
        $this->m_canbo->set_macb($_POST['txtmacb']);
        $this->m_canbo->set_tencanbo($_POST['txthoten']);
        $this->m_canbo->set_ngaysinh($_POST['txtngaysinh']);
        $this->m_canbo->set_chucvu($_POST['txtchucvu']);
        $this->m_canbo->set_hocvi($_POST['hocvi']);
        $this->m_canbo->set_hocham($_POST['hocham']);
        $this->m_canbo->set_donvi($_POST['txtdonvi']);
        $this->m_canbo->set_diachi($_POST['txtdiachi']);
        $this->m_canbo->set_dienthoai($_POST['txtsdt']);
        $this->m_canbo->set_email($_POST['txtemail']);
        
        if($this->m_canbo->check_cb()==1)
        {
            $thongbao = "ma can bo da ton tai";
            $danhsach = $this->m_canbo->get_allcb();
            include 'View/canbo/danhsach.php';
            
        }
        else
        {
            $this->m_canbo->themcb();
            $thongbao = "Them can bo thanh cong";
            $danhsach = $this->m_canbo->get_allcb();
            include 'View/canbo/danhsach.php';    
        }
        
        
    }
    else
    {
        $thongbao = "them that bai";
        $danhsach = $this->m_canbo->get_allcb();
        include 'View/canbo/danhsach.php';
    }
}

public function suacb()
{
    if(isset($_POST['suacb']))
    {
        $this->m_canbo->set_macb($_GET['i']);
        $this->m_canbo->set_tencanbo($_POST['txthoten']);
        $this->m_canbo->set_ngaysinh($_POST['txtngaysinh']);
        $this->m_canbo->set_chucvu($_POST['txtchucvu']);
        $this->m_canbo->set_hocvi($_POST['hocvi']);
        $this->m_canbo->set_hocham($_POST['hocham']);
        $this->m_canbo->set_donvi($_POST['txtdonvi']);
        $this->m_canbo->set_diachi($_POST['txtdiachi']);
        $this->m_canbo->set_dienthoai($_POST['txtsdt']);
        $this->m_canbo->set_email($_POST['txtemail']);
        
        $this->m_canbo->sua_cb();
        
        $thongbao = "sua thanh cong";
        $danhsach = $this->m_canbo->get_allcb();
        include 'View/canbo/danhsach.php';
        
    }
}

public function xoacb()
{
    $this->m_canbo->set_macb($_GET['i']);
    $this->m_canbo->xoa_cb();
    
    $thongbao = "xoa thanh cong";
    $danhsach = $this->m_canbo->get_allcb();
    include 'View/canbo/danhsach.php';
    
}
}
?>