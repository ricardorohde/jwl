<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function tipoCliente($num) {

    switch ($num) {
        case 1: $retorne = "Administrador";
            break;
        case 2: $retorne = "Anunciante";
            break;
        case 3: $retorne = "Comprador";
            break;
    }
    return $retorne;
}