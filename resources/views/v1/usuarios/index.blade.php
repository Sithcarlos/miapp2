@extends('v1.layouts.main')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h2>Usuarios</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($usuarios as $row)
                    <tr>
                        <th scope="row"> {{ $row->id }} </th>
                        <td> {{ $row->nombre }} </td>
                        <td> {{ ($row->activo)? 'SI':'NO' }} </td>

                        <td>
                            <a href="{{ url('/usuarios/'.$row->id) }}" type="button"
                                class="btn btn-warning btn-sm">Editar</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="4">
                            <p class="text-center">NO HAY USUARIOS REGISTRADOS</p>
                        </th>

                    </tr>

                    @endforelse


                </tbody>
            </table>
        </div>
    </div>
    <!--/row-->

</div>
@endsection