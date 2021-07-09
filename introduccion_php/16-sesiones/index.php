<?php

/* Sesiones */

$usuario = "Alaskarnitas";
$auth = true;

//Se inicia la sesion
session_start();

//Guardamos los datos de la sesion en la superglobal _SSESION
$_SESSION['usuario'] = $usuario;
$_SESSION['auth'] = $auth;

//Cerrar sesion
$_SESSION = [];