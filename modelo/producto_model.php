<?php
    
    class producto_model{
        private $DB;
        private $productos;

        function __construct(){
            $this->DB=Database::connect();
        }

        function get(){
            $sql= 'SELECT * FROM productos ORDER BY id DESC';
            $fila=$this->DB->query($sql);
            $this->productos=$fila;
            return  $this->productos;
        }

        function create($data){

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO productos(nombre_de_producto,referencia,precio,peso,categoria,stock,fecha_creacion)VALUES (?,?,?,?,?,?,?)";

            $query = $this->DB->prepare($sql);
            $query->execute(array($data['nombre_de_producto'],$data['referencia'],$data['precio'],$data['peso'],$data['categoria'],
			$data['stock'],$data['fecha_creacion']));
            Database::disconnect();       

        }
        function get_id($id){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM productos where id = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        function update($data,$date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE productos set nombre_de_producto=?, referencia =?, precio=?, peso=?, categoria=?, stock=? WHERE id = '$date'";
            $q = $this->DB->prepare($sql);
            $q->execute(array($data['nombre_de_producto'],$data['referencia'],$data['precio'],$data['peso'],$data['categoria'],$data['stock']));
            Database::disconnect();

        }

        function delete($date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="DELETE FROM productos where id=?";
            $q=$this->DB->prepare($sql);
            $q->execute(array($date));
            Database::disconnect();
        }
    }
?>

