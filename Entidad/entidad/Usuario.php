<?php


/**
 * Usuario
 */
class Usuario
{
    protected $idusuario;
    protected $numerodocumento;
    protected $primer_nombre;
    protected $segundo_nombre;
    protected $primer_apellido;
    protected $segundo_apellido;
    protected $direccion;
    protected $telefono;
    protected $email;
    protected $tipo_sangre;
    protected $foto;
    protected $usuario;
    protected $password;
    protected $rol;
    
    function __construct($idUsuario, $numeroDocumento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $direccion, $telefono, $email, $tipo_sangre, $foto, $usuario, $password, $rol) {
        $this->idUsuario = $idUsuario;
        $this->numeroDocumento = $numeroDocumento;
        $this->primer_nombre = $primer_nombre;
        $this->segundo_nombre = $segundo_nombre;
        $this->primer_apellido = $primer_apellido;
        $this->segundo_apellido = $segundo_apellido;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->tipo_sangre = $tipo_sangre;
        $this->foto = $foto;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->rol = $rol;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNumeroDocumento() {
        return $this->numeroDocumento;
    }

    function getPrimer_nombre() {
        return $this->primer_nombre;
    }

    function getSegundo_nombre() {
        return $this->segundo_nombre;
    }

    function getPrimer_apellido() {
        return $this->primer_apellido;
    }

    function getSegundo_apellido() {
        return $this->segundo_apellido;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getTipo_sangre() {
        return $this->tipo_sangre;
    }

    function getFoto() {
        return $this->foto;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    function getRol() {
        return $this->rol;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNumeroDocumento($numeroDocumento) {
        $this->numeroDocumento = $numeroDocumento;
    }

    function setPrimer_nombre($primer_nombre) {
        $this->primer_nombre = $primer_nombre;
    }

    function setSegundo_nombre($segundo_nombre) {
        $this->segundo_nombre = $segundo_nombre;
    }

    function setPrimer_apellido($primer_apellido) {
        $this->primer_apellido = $primer_apellido;
    }

    function setSegundo_apellido($segundo_apellido) {
        $this->segundo_apellido = $segundo_apellido;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTipo_sangre($tipo_sangre) {
        $this->tipo_sangre = $tipo_sangre;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRol($rol) {
        $this->rol = $rol;
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