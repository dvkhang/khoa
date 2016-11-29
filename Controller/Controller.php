<?php
class Controller
{
    public function login()
    {
        if(!isset($_SESSION['username']))
        {
            include 'View/login.php';
        }
        else
        {
            
            if(!isset($_GET['m'])and !isset($_GET['a'])){
                include 'View/TimKiem/timkiem.php';
            }
            else
            {
                $m=$_GET['m'];
                $a=$_GET['a'];
                $path = 'Controller/'.$m.'.php';
                if(file_exists($path)){
                    include $path;
                    $controller = new $m;
                    $controller->$a();
                }
                else
                {
                    include 'libs/404.php';
                }
            }
        }
    }
}
?>