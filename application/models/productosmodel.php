<?php

/**
 * ProductosModel short summary.
 *
 * ProductosModel description.
 *
 * @version 1.0
 * @author AlbertoPalencia
 */
class ProductosModel
{
   
 
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
 
    public function listadoProductos()
    {
        try{
                $sql = " SELECT  * FROM productos ";
                $query = $this->db->prepare($sql);
                $query->execute();
       
            }
        catch(PDOException $e){
                echo "ERROR: " . $e->getMessage();
            }
          return $query->fetchAll();
    }
}
