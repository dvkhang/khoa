<?php
include 'Model/BaoCao.php';

class baocao
{
   public $m_baocao;
   function __construct()
   {
      $this->m_baocao= new BaoCao1();
  }

  public function index()
  {
      $danhsach = $this->m_baocao->danhsach();
      include 'View/baocao/index.php';
  }

  public function thembaocao()
  {
    if(isset($_POST['themcb']))
    {
        $this->m_baocao->set_ten_bai_bao($_POST['tenbaibao']);
        $this->m_baocao->set_ten_tap_chi($_POST['tentapchi']);
        $this->m_baocao->set_tap_chi_so($_POST['tapchiso']);
        $this->m_baocao->set_trang_dang($_POST['trangdang']);
        $this->m_baocao->set_dia_chi($_POST['diachi']);
        $this->m_baocao->set_tap($_POST['tap']);
        $this->m_baocao->set_nam($_POST['nam']);
        $this->m_baocao->set_phan_loai($_POST['theloai']);
        $this->m_baocao->set_dia_diem($_POST['diadiem']);
        $this->m_baocao->set_danh_sach_tac_gia($_POST['danhsachtacgia']);
        if (isset($_POST['tnu'])) {
            $this->m_baocao->set_tac_gia_tnu($_POST['tnu']);
        }else{
            $this->m_baocao->set_tac_gia_tnu(0);
        }

        // $this->m_baocao->them_bai_bao();
        if ($this->m_baocao->them_bai_bao()== true) {
            $thongbao = "Them báo cáo thanh cong";
            $danhsach = $this->m_baocao->danhsach();
            include 'View/baocao/index.php';  
        }else {
            $thongbao = "Them báo cáo thất bại";
        }
              
        // if($this->m_baocao->check_cb()==1)
        // {
        //     $thongbao = "ma can bo da ton tai";
        //     $danhsach = $this->m_baocao->get_allcb();
        //     include 'View/baocao/danhsach.php';
            
        // }
        // else
        // {
            
        // }
        
        
    }
    else
    {
        $thongbao = "them that bai";
        $danhsach = $this->m_baocao->danhsach();
        include 'View/baocao/index.php';
    }
}

public function suabaocao()
{
    if(isset($_POST['suabaocao']))
    {
        $this->m_baocao->set_ten_bai_bao($_POST['tenbaibao']);
        $this->m_baocao->set_ten_tap_chi($_POST['tentapchi']);
        $this->m_baocao->set_tap_chi_so($_POST['tapchiso']);
        $this->m_baocao->set_trang_dang($_POST['trangdang']);
        $this->m_baocao->set_dia_chi($_POST['diachi']);
        $this->m_baocao->set_tap($_POST['tap']);
        $this->m_baocao->set_nam($_POST['nam']);
        $this->m_baocao->set_phan_loai($_POST['theloai']);
        $this->m_baocao->set_dia_diem($_POST['diadiem']);
        $this->m_baocao->set_danh_sach_tac_gia($_POST['danhsachtacgia']);
        if (isset($_POST['tnu'])) {
            $this->m_baocao->set_tac_gia_tnu($_POST['tnu']);
        }else{
            $this->m_baocao->set_tac_gia_tnu(0);
        }
        
        if ($this->m_baocao->sua_bao_cao($_GET['i'])==true) {
            $thongbao = "sua thanh cong";
            $danhsach = $this->m_baocao->danhsach();
            header("Location:http://localhost/quanlidetai/?m=baocao&a=index");
        }else{
            $thongbao = "sua thất bại cong";
            $danhsach = $this->m_baocao->danhsach();
            // include 'View/baocao/index.php';
            header("Location:http://localhost/quanlidetai/?m=baocao&a=index");
        }
        
        
        
        
    }
}

public function xoabaocao()
{
    $this->m_baocao->xoa_baocao($_GET['i']);
    
    $thongbao = "xoa thanh cong";
    $danhsach = $this->m_baocao->danhsach();
    header("Location:http://localhost/quanlidetai/?m=baocao&a=index");
    
}
}
?>