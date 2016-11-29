<?php
	include 'Model/Mnguonkinhphi.php';
	class nguonkinhphi
	{
		public $m_nguonkinhphi;	
		function __construct()
		{
			$this->m_nguonkinhphi = new Mnguonkinhphi;
		}

		public function danhsach()
		{
			$danhsach = $this->m_nguonkinhphi->get_allnguonkinhphi();
			include 'View/nguonkinhphi/danhsach.php';
		}

		public function themkp()
		{
			if(isset($_POST['themnkp']))
			{

				$this->m_nguonkinhphi->set_tennguonkinhphi($_POST['txttennguonkinhphi']);
				if($this->m_nguonkinhphi->check_kp() == 1)
				{
					$thongbao = "ten nguon kinh phi da ton tai";
					$danhsach = $this->m_nguonkinhphi->get_allnguonkinhphi();
					include 'View/nguonkinhphi/danhsach.php';
				}
				else
				{
					$this->m_nguonkinhphi->add_nguonkinhphi();
					$thongbao = "them nguon kinh phi thanh cong";
					$danhsach = $this->m_nguonkinhphi->get_allnguonkinhphi();
					include 'View/nguonkinhphi/danhsach.php';
				}
				
			}
		}

		public function suakp()
		{
			if(isset($_POST['suakp']))
			{
				if($_POST['txtnguonkinhphi']=="")
				{
					$danhsach = $this->m_nguonkinhphi->get_allnguonkinhphi();
					include 'View/nguonkinhphi/danhsach.php';
				}
				else
				{
					$this->m_nguonkinhphi->set_tennguonkinhphi($_POST['txtnguonkinhphi']);
					if($this->m_nguonkinhphi->check_kp()==1)
					{
						$thongbao = "ten nguon kinh phi da ton tai";
						$danhsach = $this->m_nguonkinhphi->get_allnguonkinhphi();
						include 'View/nguonkinhphi/danhsach.php';
					}
					else
					{
						$this->m_nguonkinhphi->suanguonkinhphi($_GET['i']);
						$thongbao = "sua nguon kinh phi thanh cong";
						$danhsach = $this->m_nguonkinhphi->get_allnguonkinhphi();
						include 'View/nguonkinhphi/danhsach.php';
					}
					
				}
			}
		}

		public function xoakp()
		{
			$this->m_nguonkinhphi->xoanguonkinhphi($_GET['i']);
			$thongbao = "xoa nguon kinh phi thanh cong";
			$danhsach = $this->m_nguonkinhphi->get_allnguonkinhphi();
			include 'View/nguonkinhphi/danhsach.php';

		}
	}
?>