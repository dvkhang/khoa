<?php 

	include_once "Model/Muser.php";
	class user
	{
		public $m_user;
       function __construct()
       {
          $this->m_user = new Muser;
      }
      
      public function danhsach()
      {
        $danhsach = $this->m_user->get_alluser();
        include "View/user/danhsach.php";
      }
	}
 ?>