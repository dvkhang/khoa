<?php 
include 'Model/Mlinhvuc.php';
	/**
	* 
	*/
	class linhvuc
	{
		
		public $m_linhvuc;
		public function __construct()
		{
			$this->m_linhvuc = new Mlinhvuc();
		}

		public function danhsach()
		{
			$danhsach = $this->m_linhvuc->get_alllinhvuc();
			include 'View/linhvuc/danhsach.php';
		}

		public function themlv()
		{
			if(isset($_POST['themlv']))
			{

				$this->m_linhvuc->set_tenlinhvuc($_POST['txtlinhvuc']);

				if($this->m_linhvuc->check_linhvuc()==1)
				{
					$thongbao = "Ten linh vuc da ton tai";
					$danhsach = $this->m_linhvuc->get_alllinhvuc();
					include 'View/linhvuc/danhsach.php';
				}
				else
				{
					$this->m_linhvuc->add_linhvuc();
					$thongbao = "them linh vuc thanh cong";
					$danhsach = $this->m_linhvuc->get_alllinhvuc();
					include 'View/linhvuc/danhsach.php';
				}
				
			}
		}

		public function themlv1()
		{
			if(isset($_POST['themlv1']))
			{

				$this->m_linhvuc->set_linhvuc_id($_GET['i']);
				$this->m_linhvuc->set_tenlinhvuc1($_POST['txtlinhvuc1']);

				if($this->m_linhvuc->check_linhvuc1()==1)
				{
					$thongbao = "Ten linh vuc da ton tai";
					$danhsach = $this->m_linhvuc->get_alllinhvuc();
					include 'View/linhvuc/danhsach.php';
				}
				else
				{
					$this->m_linhvuc->add_linhvuc1();
					$thongbao = "them linh vuc thanh cong";
					$danhsach = $this->m_linhvuc->get_alllinhvuc();
					include 'View/linhvuc/danhsach.php';
				}
				
			}
		}


		public function xoalv()
		{
			$this->m_linhvuc->Deletelv($_GET['i']);
			$thongbao = "xoa linh vuc thanh cong";
			$danhsach = $this->m_linhvuc->get_alllinhvuc();
			include 'View/linhvuc/danhsach.php';
		}

		public function xoalv1()
		{
			$this->m_linhvuc->Deletelv1($_GET['i']);
			$thongbao = "xoa linh vuc thanh cong";
			$danhsach = $this->m_linhvuc->get_alllinhvuc();
			include 'View/linhvuc/danhsach.php';
		}

		public function sualv()
		{
			if(isset($_POST['sualv']))
			{
				if($_POST['txtlinhvuc'==""])
				{
					$danhsach = $this->m_linhvuc->get_alllinhvuc();
					include 'View/linhvuc/danhsach.php';
				}
				else
				{
					$this->m_linhvuc->set_tenlinhvuc($_POST['txtlinhvuc']);
					$this->m_linhvuc->sualv($_GET['i']);
					$thongbao = "sua linh vuc thanh cong";
					$danhsach = $this->m_linhvuc->get_alllinhvuc();
					include 'View/linhvuc/danhsach.php';
				}
			}
			
		}

		public function sualv1()
		{
			if(isset($_POST['sualv1']))
			{
				if($_POST['txtlinhvuc1']=="")
				{
					$danhsach = $this->m_linhvuc->get_alllinhvuc();
					include 'View/linhvuc/danhsach.php';
				}
				else
				{
					$this->m_linhvuc->set_tenlinhvuc1($_POST['txtlinhvuc1']);
					$this->m_linhvuc->sualv1($_GET['i']);
					$thongbao = "sua linh vuc thanh cong";
					$danhsach = $this->m_linhvuc->get_alllinhvuc();
					include 'View/linhvuc/danhsach.php';
				}
			}
		}
	}
	?>