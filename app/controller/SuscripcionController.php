<?php


class SuscripcionController
{
    private $renderer;
    private $model;

    public function __construct($model, $renderer){
        if ($_SESSION['permisos']==1){
            $this->renderer = $renderer;
            $this->model = $model;
        } else {
            header("location: http://".$_SERVER['SERVER_NAME']. "/Infonete-MVC/app/");
            exit();
        }
    }

    public function index(){
        $data['menu'] = $_SESSION['menu'];
        $data['botones'] = $_SESSION['botones'];

        echo $this->renderer->render( "view/SuscripcionView.php", $data );

    }


}