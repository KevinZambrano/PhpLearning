<?php
interface IUsuario{

    public function selectUsuario();
    public function selectUsuarioById($id);
    public function searchUsuario($clave, $correo);
    public function insertUsuario(Usuario $usuario);
    public function updateUsuario(Usuario $usuario);
    public function deleteUsuario($id);
    
}
 ?>
