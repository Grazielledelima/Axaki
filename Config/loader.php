<?php
// Evita que usu�rios acesse este arquivo diretamente
if ( ! defined('ABSPATH')) exit;
 
// Inicia a sess�o
session_start();

// Fun��es globais include "function.php";
require_once ABSPATH . '/config/functions.php';

//Layout loader
require_once ABSPATH . "/View/_Layout.php";
?>