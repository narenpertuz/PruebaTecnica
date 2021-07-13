<?php

    function buscarTipoDocumentoPorId($id){
        require_once(__DIR__."/../../Entidad/dao/TipoDocumentoDAO.php");
        $dao=new TipoDocumentoDAO();
        $resultado = $dao->buscarTipoDocumentoPorId($id);
        return $resultado;
    }
  
    function insertarTipoDocumento($tipo){
        require_once(__DIR__."/../../Entidad/dao/TipoDocumentoDAO.php");
         $dao=new TipoDocumentoDAO();
        $resultado=$dao->insertarTipoDocumento($tipo);
        return $resultado;
    }


	function modificarTipoDocumento($tipo){
       require_once(__DIR__."/../../Entidad/dao/TipoDocumentoDAO.php");
         $dao=new TipoDocumentoDAO();
        $resultado=$dao->modificarTipoDocumento($tipo);
        return $resultado;
    }

    
    function borrarTipoDocumento($id){
       require_once(__DIR__."/../../Entidad/dao/TipoDocumentoDAO.php");
         $dao=new TipoDocumentoDAO();
        $resultado=$dao->borrarTipoDocumento($id);
        return $resultado;
    }     
    
    function leerTipoDocumento(){
        require_once(__DIR__."/../../Entidad/dao/TipoDocumentoDAO.php");
         $dao=new TipoDocumentoDAO();
        $resultado=$dao->leerTipoDocumento();
        return $resultado;
    }     