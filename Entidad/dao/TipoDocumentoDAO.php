<?php

require_once ("DataSource.php");
require_once (__DIR__."/../entidad/TipoDocumento.php");


class TipoDocumentoDAO {
    
    
    public function buscarTipoDocumentoPorId($id){
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM tipodocumento WHERE idTipoDocumento = :id", 
                                                             array(':id'=>$id));
        $objeto=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $objeto = new TipoDocumento(
                       $data_table[$indice]["idTipoDocumento"],
                        $data_table[$indice]["nombre"], 
                        $data_table[$indice]["descripcion"]
                        );
            }
            return $objeto;
        }else{
            return null;
        }
    }    
    
    public function leerTipoDocumento(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT *FROM tipodocumento");
        $objeto=null;
        $objetos=array();
        foreach($data_table as $indice=>$valor){
                $objeto = new TipoDocumento(
                        $data_table[$indice]["idTipoDocumento"],
                        $data_table[$indice]["nombre"], 
                        $data_table[$indice]["descripcion"]
                        );
                array_push($objetos,$objeto);
        }
        return $objetos;   
    }
    
    public function insertarTipoDocumento(Objeto $objeto){
        $data_source= new DataSource();
        $sql = "INSERT INTO tipodocumento VALUES (:idTipoDocumento, :nombre, :descripcion)";
        
            $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idTipoDocumento'=>$objeto->getId_tipo_documento(),
            ':nombre'=>$objeto->getNombre(),
            ':descripcion'=>$objeto->getDescripcion()
            )
        );
        return $resultado;
    }
    
    
    public function modificarTipoDocumento(Objeto $objeto){
        $data_source= new DataSource();
        $sql = "UPDATE tipodocumento SET nombre = :nombre, "
                . " descripcion= :descripcion "
                . " WHERE idTipoDocumento= :idTipoDocumento ";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
               	':idUsuario'=>$objeto->getId_tipo_documento(),
            	':numeroDocumento'=>$objeto->getNombre(),
            	':idTipoDocumento'=>$objeto->getDescripcion()
            )
        );
        
        return $resultado;
    }
    
    public function borrarTipoDocumento($id){
        $data_source = new DataSource();
        $Objeto=  buscarTipoDocumentoPorId($id);
        $resultado= $data_source->ejecutarActualizacion("DELETE FROM tipodocumento WHERE idTipoDocumento = :id", array('id'=>$id));
        return $resultado;
    }
    
}