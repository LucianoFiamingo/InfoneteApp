<?php


class SeccionController
{  private $renderer;
    private $model;

    public function __construct($model, $renderer){
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function index(){
        $nombreSeccion = $_GET["action"];
        $listaSeccion['botones'] = $_SESSION['botones'];
        $listaSeccion["seccion"] = $this->model->getSeccion($nombreSeccion);
        $listaSeccion['menu'] = $_SESSION['menu'];

        echo $this->renderer->render("view/seccionView.php", $listaSeccion);
    }

    public function verPublicacion(){

        if ($_SESSION['permiso'] > '1'){
                $idPublicacion = $_GET["id_publicacion"];
                $data["publicacion"] = $this->model->getPublicacion($idPublicacion);
                $data['menu'] = $_SESSION['menu'];
                $data['botones'] = $_SESSION['botones'];

                 $_SESSION['idPublicacionPDF'] = $idPublicacion;
                echo $this->renderer->render("view/verPublicacionView.php", $data);
        } else if ($_SESSION['permiso']==1){
            header("location: http://".$_SERVER['SERVER_NAME']. "/Infonete-MVC/app/suscripcion");
            exit();
        } else {
            header("location: http://".$_SERVER['SERVER_NAME']. "/Infonete-MVC/app/login");
            exit();
        }
    }
}