<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Servicios;

use Illuminate\Support\Facades\Log;
use App\Repositorios\UsuariosRepositorio;

/**
 * Description of UsuariosServicio
 *
 * @author master
 */
class UsuariosServicio
{

    private $RUsuarios;


    public function __construct(UsuariosRepositorio $Usuarios)
    {
        $this->RUsuarios = $Usuarios;
    }


    public function verTodos(): array
    {
        $rows = $this->RUsuarios->leerTodos();
        $uu = [];
        foreach ($rows as $row) {
            $uu[] =
                (object)   [
                    "activo" => $row->activo,
                    "id" => $row->id,
                    "nombre" => $row->name,
                ];
        }
        return $uu;
    }

    public function verUno($id): object
    {
        $u = $this->RUsuarios->leerId($id);
        return (object) [
            "activo" => $u->activo,
            "id" => $u->id,
            "nombre" => $u->name,
        ];
    }

    public function editarUno($datos)
    {;
        $datos = (object) [
            "activo" => array_key_exists('activo', $datos),
            "id" => $datos["id"],
            "name" => $datos["nombre"],
        ];

        return $this->RUsuarios->editar($datos);
    }
}
