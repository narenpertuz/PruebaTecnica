<?php

class TipoDocumento{
    
    protected $id_tipo_documento;
    protected $nombre;
    protected $descripcion;
    
    function __construct($id_tipo_documento, $nombre, $descripcion) {
        $this->id_tipo_documento = $id_tipo_documento;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    function getId_tipo_documento() {
        return $this->id_tipo_documento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId_tipo_documento($id_tipo_documento) {
        $this->id_tipo_documento = $id_tipo_documento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function toArray() {
        $vars = get_object_vars ( $this );
        $array = array ();
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value;
        }
        return $array;
    }
}