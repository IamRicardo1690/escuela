<?php namespace AppData\Controller;
use AppData\Model\consultar;
class consultarController
{
    private $consultar;

    function __construct(){
      $this->consultar=new consultar();

    }
    function index() {

    }

    public function logout(){
      session_destroy();
      ?>
      <script type="text/javascript">
      window.location.href="<?php echo URL ?>";
      </script>
      <?php
    }
    public function verify(){

    }
    
    public function consultar(){
      $datos[0]=$this->consultar->getGru();
      $datos[1]=$this->consultar->getMat();
      return $datos;

      //var_dump($datos);
    }


    function __destruct(){

    }
}
?>
