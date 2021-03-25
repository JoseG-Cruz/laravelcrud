@extends('layouts.base')
<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <h2 class="text-center text-danger mb-4">Listado de usuarios registrados</h2>
            
            <!--Mensaje flash -->
            @if(session('usuarioEliminado'))
            <div class="alert alert-success">
            {{ session('usuarioEliminado')}}
            </div>
            @endif
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr class="text-white" style="background-color:#810000; ">
                        <th >Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody style="background-color:#eeebdd;">
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->email }}</td>
                        <td>

                        <a href="{{ route ('editform', $user->id) }}" class="btn btn-primary mb-1 ">
                            <i class="fas fa-pencil-alt "></i>
                        </a>


                        <form action="{{ route('delete', $user->id)}}" method="POST">
                            @csrf @method('DELETE')

                            <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        
                        </form>



                        </td>
                    </tr>
                    @endforeach

                </tbody>
                

            </table>
            <a class="btn btn-success" href="{{ url('/form') }}">Agregar</a>
            {{ $users->links() }}

        </div>
    </div>
</div>