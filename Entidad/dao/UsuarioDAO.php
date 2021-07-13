<?php


require_once ("DataSource.php");
require_once (__DIR__."/../entidad/Usuario.php");


class UsuarioDAO {
    
    public function autenticarUsuario($user, $pass){
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE usuario = :user AND password = :pass", 
                                                    array(':user'=>$user,':pass'=>$pass));
        $usuario=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                        $data_table[$indice]["idusuario"],
                        $data_table[$indice]["numerodocumento"], 
                        $data_table[$indice]["primernombre"], 
                        $data_table[$indice]["segundonombre"], 
                        $data_table[$indice]["primerapellido"],
                        $data_table[$indice]["segundoapellido"],
                        $data_table[$indice]["direccion"],
                        $data_table[$indice]["telefono"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["rh"],
                        $data_table[$indice]["foto"],
                        $data_table[$indice]["usuario"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["idrol"]
                        );
            }
        } 
        return $usuario;
    }
    
    public function buscarUsuarioPorId($id){
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE idusuario = :id", 
                                                    array(':id'=>$id));
        $usuario=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                       $data_table[$indice]["idusuario"],
                        $data_table[$indice]["numerodocumento"], 
                        $data_table[$indice]["primernombre"], 
                        $data_table[$indice]["segundonombre"], 
                        $data_table[$indice]["primerapellido"],
                        $data_table[$indice]["segundoapellido"],
                        $data_table[$indice]["direccion"],
                        $data_table[$indice]["telefono"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["rh"],
                        $data_table[$indice]["foto"],
                        $data_table[$indice]["usuario"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["idrol"]
                        );
            }
            return $usuario;
        }else{
            return null;
        }
    }    
    public function buscarUsuarioPorEmail($email){
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE email = :email", 
                                                    array(':email'=>$email));
        $usuario=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                        $data_table[$indice]["idusuario"],
                        $data_table[$indice]["numerodocumento"], 
                        $data_table[$indice]["primernombre"], 
                        $data_table[$indice]["segundonombre"], 
                        $data_table[$indice]["primerapellido"],
                        $data_table[$indice]["segundoapellido"],
                        $data_table[$indice]["direccion"],
                        $data_table[$indice]["telefono"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["rh"],
                        $data_table[$indice]["foto"],
                        $data_table[$indice]["usuario"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["idrol"]
                        );
            }
            return $usuario;
        }else{
            return null;
        }
    }    

       public function leerUsuarioPorRol($idRol){
        $data_source = new DataSource();
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE idrol = :idrol", 
                                                    array(':idrol'=>$idRol));
        $usuario=null;
        $usuarios=array();
        if(count($data_table)>=1){
        foreach($data_table as $indice=>$valor){
                $usuario = new Usuario(
                       $data_table[$indice]["idusuario"],
                        $data_table[$indice]["numerodocumento"], 
                        $data_table[$indice]["primernombre"], 
                        $data_table[$indice]["segundonombre"], 
                        $data_table[$indice]["primerapellido"],
                        $data_table[$indice]["segundoapellido"],
                        $data_table[$indice]["direccion"],
                        $data_table[$indice]["telefono"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["rh"],
                        $data_table[$indice]["foto"],
                        $data_table[$indice]["usuario"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["idrol"]
                        );
                array_push($usuarios,$usuario);
        }
        return $usuarios;   
    }else{
        return null;
    }
    }
    
    
    public function leerUsuarios(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT *FROM usuario");
        $usuario=null;
        $usuarios=array();
        foreach($data_table as $indice=>$valor){
                $usuario = new Usuario(
                        $data_table[$indice]["idusuario"],
                        $data_table[$indice]["numerodocumento"], 
                        $data_table[$indice]["primernombre"], 
                        $data_table[$indice]["segundonombre"], 
                        $data_table[$indice]["primerapellido"],
                        $data_table[$indice]["segundoapellido"],
                        $data_table[$indice]["direccion"],
                        $data_table[$indice]["telefono"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["rh"],
                        $data_table[$indice]["foto"],
                        $data_table[$indice]["usuario"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["idrol"]
                        );
                array_push($usuarios,$usuario);
        }
        return $usuarios;   
    }
    
    public function insertarUsuario(Usuario $usuario){
        $data_source= new DataSource();
        $sql = "INSERT INTO usuario VALUES (:idusuario, :numerodocumento, :primernombre, :segundonombre, :primerapellido, :segundoapellido, :direccion, :telefono, :email, :rh, :foto, :usuario, :password, :idrol, :idtipodocumento)";
            
            $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idusuario'=>$usuario->getIdUsuario(),
            ':numerodocumento'=>$usuario->getNumeroDocumento(),
            ':primernombre'=>$usuario->getPrimer_nombre(),
            ':segundonombre'=>$usuario->getSegundo_nombre(),
            ':primerapellido'=>$usuario->getPrimer_apellido(),
            ':segundoapellido'=>$usuario->getSegundo_apellido(),
            ':direccion'=>$usuario->getDireccion(),
            ':telefono'=>$usuario->getTelefono(),
            ':email'=>$usuario->getEmail(),
            ':rh'=>$usuario->getTipo_sangre(),
            ':foto'=>$usuario->getFoto(),
            ':usuario'=>$usuario->getUsuario(),
            ':password'=>$usuario->getPassword(),
            ':idrol'=>$usuario->getRol()
            )
        );
        return $resultado;
    }
    
    
    public function modificarUsuario(Usuario $usuario){
        $data_source= new DataSource();
        $sql = "UPDATE usuario SET numerodocumento = :numerodocumento, "
                . " primernombre= :primernombre, "
                . " segundonombre= :segundonombre, "
                . " primerapellido= :primerapellido, "
                . " segundoapellido= :segundoapellido, "
                . " direccion= :direccion, "
                . " telefono= :telefono, "
                . " email= :email, "
                . " rh= :rh, "
                . " foto= :foto, "
                . " usuario= :usuario, "
                . " password= :password, "
                . " idrol= :idrol, "
                . " WHERE idusuario= :idusuario ";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
               	':idusuario'=>$usuario->getIdUsuario(),
            	':numerodocumento'=>$usuario->getNumeroDocumento(),
            	':primernombre'=>$usuario->getPrimer_nombre(),
                ':segundonombre'=>$usuario->getSegundo_nombre(),
            	':primerapellido'=>$usuario->getPrimer_apellido(),
                ':segundoapellido'=>$usuario->getSegundo_apellido(),
            	':direccion'=>$usuario->getDireccion(),
            	':telefono'=>$usuario->getTelefono(),
            	':email'=>$usuario->getEmail(),
            	':rh'=>$usuario->getTipo_sangre(),
            	':usuario'=>$usuario->getUsuario(),
            	':password'=>$usuario->getPassword(),
                ':idrol'=>$usuario->getRol()
            )
        );
        
        return $resultado;
    }
    
    public function borrarUsuario($id){
        $data_source = new DataSource();
        $usuario=  buscarUsuarioPorId($id);
        $resultado= $data_source->ejecutarActualizacion("DELETE FROM usuario WHERE idusuario = :id", array('id'=>$id));
        return $resultado;
    }
    
}