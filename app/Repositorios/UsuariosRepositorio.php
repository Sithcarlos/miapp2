<?php

declare(strict_types=1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositorios;

use Illuminate\Support\Facades\DB;
use App\User;

//use App\Modelos\restaurantes;

/**
 * Description of UsuariosRepositorio
 *
 * @author master
 */
class UsuariosRepositorio
{

    public const TABLA = 'users';

    public function leerTodos()
    {
        return User::all();
    }

    public function leerId($id)
    {
        return User::find($id);
    }

    public  function editar($datos)
    {
        $u = User::find($datos->id);
        $u->name = $datos->name;
        $u->activo = $datos->activo;
        $u->save();
        return $u;
    }
}
