<?php
include 'Model/Mcapbac.php';
class capbac
{
    public $m_capbac;
    public function __construct()
    {
        $this->m_capbac = new Mcapbac();
    }
    
    public function danhsach()
    {
        $danhsach = $this->m_capbac->get_allcapbac();
        include 'View/capbac/danhsach.php';
    }
    
    public function xoacb()
    {

        $this->m_capbac->Deletecb($_GET['i']);
        $danhsach = $this->m_capbac->get_allcapbac();
        $thongbao="Ban da xoa thanh cong";
        include 'View/capbac/danhsach.php';
    }
    
    public function xoacb1()
    {

        $this->m_capbac->Deletecb1($_GET['i']);
        
        $danhsach = $this->m_capbac->get_allcapbac();
        $thongbao="Ban da xoa thanh cong";
        include 'View/capbac/danhsach.php';    
    }
    
    
    public function themcb()
    {
        if(isset($_POST['txtcapbac']))
        {

            $this->m_capbac->set_tencapbac($_POST['txtcapbac']);
            
            if($this->m_capbac->check_capbac()==1)
            {
                $thongbao="ten cap de tai da ton tai";
                $danhsach = $this->m_capbac->get_allcapbac();
                include 'View/capbac/danhsach.php';    
            }
            else
            {
                $this->m_capbac->addcapbac();
                $thongbao="them thanh cong";
                $danhsach = $this->m_capbac->get_allcapbac();
                include 'View/capbac/danhsach.php'; 
            }

        }
    }
    
    public function themcb1()
    {
        if(isset($_POST['txtcapdetai1']))
        {

            if(isset($_GET['i']))
            {
                $this->m_capbac->set_capdetai_id($_GET['i']);
                $this->m_capbac->set_tencapbac1($_POST['txtcapdetai1']);
                
                if($this->m_capbac->check_capbac1()==1)
                {
                    $thongbao="ten cap de tai da ton tai";
                    $danhsach = $this->m_capbac->get_allcapbac();
                    include 'View/capbac/danhsach.php';
                }
                else
                {
                    $this->m_capbac->addcapbac1();
                    $thongbao="them thanh cong";
                    $danhsach = $this->m_capbac->get_allcapbac();
                    include 'View/capbac/danhsach.php';
                }
                

                
            }
        }
    }

    public function suacb()
    {
        if(isset($_POST['suacb']))
        {
            if ($_POST['txtcapbac']=="")
            {
                $danhsach = $this->m_capbac->get_allcapbac();
                include 'View/capbac/danhsach.php';
            }
            else
            {
                $this->m_capbac->set_tencapbac($_POST['txtcapbac']);

                if($this->m_capbac->check_capbac()==1)
                {
                    $thongbao = "ten cap bac da ton tai";
                    $danhsach = $this->m_capbac->get_allcapbac();
                    include 'View/capbac/danhsach.php';
                }
                else
                {
                    $this->m_capbac->suacb($_GET['i']);
                    $thongbao="sua thanh cong";
                    $danhsach = $this->m_capbac->get_allcapbac();
                    include 'View/capbac/danhsach.php';
                }
            }
            
        }
    }

    public function suacb1()
    {
        if(isset($_POST['suacb1']))
        {
            if ($_POST['txtcapbac1']=="")
            {
                $danhsach = $this->m_capbac->get_allcapbac();
                include 'View/capbac/danhsach.php';
            }
            else
            {
                $this->m_capbac->set_tencapbac1($_POST['txtcapbac1']);

                if($this->m_capbac->check_capbac1()==1)
                {
                    $thongbao = "ten cap bac da ton tai";
                    $danhsach = $this->m_capbac->get_allcapbac();
                    include 'View/capbac/danhsach.php';
                }
                else
                {
                    $this->m_capbac->suacb1($_GET['i']);
                    $thongbao="sua thanh cong";
                    $danhsach = $this->m_capbac->get_allcapbac();
                    include 'View/capbac/danhsach.php';
                }
            }
            
        }   
    }

    
    
}
?>