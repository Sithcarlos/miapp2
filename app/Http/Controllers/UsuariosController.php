<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios\UsuariosServicio;
use App\Http\Requests\UsuarioRequest;

class UsuariosController extends Controller
{

    private $SUsuarios;

    public function __construct(UsuariosServicio $Usuarios)
    {
        $this->SUsuarios = $Usuarios;
    }

    public function index()
    {
        $usuarios = $this->SUsuarios->verTodos();
        return view('v1.usuarios.index', compact('usuarios'));
    }

    public function verUno($id)
    {
        $usuario = $this->SUsuarios->verUno($id);
        return view('v1.usuarios.editar', compact('usuario'));
    }

    public function editar(UsuarioRequest $request)
    {

        $payload = $request->validated();
        $usuario = $this->SUsuarios->editarUno( $payload );
        return redirect('usuarios');
    }
}
