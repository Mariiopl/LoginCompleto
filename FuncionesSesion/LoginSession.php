<?php
function inicia_sesion(){
    session_start();
}

function cierra_sesion(){
    session_destroy();
}

function login($nombre){
    inicia_sesion();
    $_SESSION['user'] = $nombre;
}

function logout(){
    $_SESSION['user']= '';
    cierra_sesion();
    session_unset();
}

function logeado(){
    inicia_sesion();
   
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

function leerSesion($clave){
    inicia_sesion();
    if (isset($_SESSION[$clave])) {
        return $_SESSION[$clave]; 
    } else {
        return null;
    }
}

function escribirSesion($clave, $valor){
    inicia_sesion();  
    $_SESSION[$clave] = $valor; 
}
?>