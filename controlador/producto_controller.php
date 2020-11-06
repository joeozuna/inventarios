<?php 
    require_once('modelo/producto_model.php');

    class producto_controller{

        private $model_e;
        private $model_p;

        function __construct(){
            $this->model_e=new producto_model();
        }

        function index(){
            $query =$this->model_e->get();

            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
        }
        function producto(){
            $data=NULL;
            if(isset($_REQUEST['id'])){
                $data=$this->model_e->get_id($_REQUEST['id']);    
            }
            $query=$this->model_e->get();
            include_once('vistas/header.php');
            include_once('vistas/producto.php');
            include_once('vistas/footer.php');
        }

        function get_datosP(){
            $data['nombre_de_producto']=$_REQUEST['nombre_de_producto'];
            $data['referencia']=$_REQUEST['referencia'];
            $data['precio']=$_REQUEST['precio'];
            $data['peso']=$_REQUEST['peso'];
            $data['categoria']=$_REQUEST['categoria'];
            $data['stock']=$_REQUEST['stock'];
			$data['fecha_creacion']= date("Y-m-d");
			$data['fecha_ultima_venta']= '0000-00-00 00:00:00';

            $this->model_e->create($data);
           
            header("Location:index.php");

        }

        function get_datosE(){
            $data['nombre_de_producto']=$_REQUEST['nombre_de_producto'];
            $data['referencia']=$_REQUEST['referencia'];
            $data['precio']=$_REQUEST['precio'];
            $data['peso']=$_REQUEST['peso'];
            $data['categoria']=$_REQUEST['categoria'];
            $data['stock']=$_REQUEST['stock'];
			$data['fecha_creacion']= date("Y-m-d");
			$data['fecha_ultima_venta']= '0000-00-00 00:00:00';

            $date=$_REQUEST['id'];
            $this->model_e->update($data,$date);
            
            
            header("Location:index.php");

        }
		

        function confirmarDelete(){

            $data=NULL;

            if ($_REQUEST['id']!=0) {
               $data=$this->model_e->get_id($_REQUEST['id']);
            }

            if ($_REQUEST['id']==0) {
                $date['id']=$_REQUEST['txt_id'];
                $this->model_e->delete($date['id']);
                header("Location:index.php");
            }

            include_once('vistas/header.php');
            include_once('vistas/confirm.php');
            include_once('vistas/footer.php');
            


        }


    }
?>