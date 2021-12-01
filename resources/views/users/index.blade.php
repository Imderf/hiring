@extends('layout') 
@section('content')
<div class="container-fluid p-t-20">
    <div class="row">
        <div class="col-12">            
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Clientes</h2>
                    <h6 class="card-subtitle">Lista de clientes</h6>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('users.create') }}" class="btn-md btn-primary float-left m-r-5 btn-especial">
                                Crear Usuario 
                            </a>                         
                        </div>
                    </div>

                    <div class="table-responsive m-t-10">
                        <table id="myTable" class="tablesaw table-bordered table-hover table tablesaw-swipe tablesaw-sortable">
                            <thead>
                                <tr style="background: #ebebeb;">
                                    <th>ID</th>
                                    <th width="20">Usuario</th>
                                    <th>Tipo</th>
                                    <th>Email</th>
                                    <th>Estado</th>
                                    <th width="10">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>                             
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td width="20">{!! $user->imagenlist !!} <div class="float-left" style="width: 70%;">{{ $user->name }}</div></td>
                                    <td>0</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{!! $user->estados !!}</td>
                                    <td width="10" style="padding:0">
                                        <div class="btn-group" role="group" aria-label="But with nested dropdown">
                                            <!--
                                            <a href="{{ route('users.show', $user) }}" class="btn btn-secondary font-18 only-btn"><i class="fa fa-file-text-o"></i></a>
                                            -->

                                            <a href="{{route('users.edit', $user)}}" class="btn btn-secondary font-18 only-btn"><i class="fa fa-edit"></i></a>

                                            <form method="POST" action="{{ route('users.destroy', $user) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" value="Eliminar" class="btn btn-secondary font-18 only-btn" onclick="return confirm('Desea eliminar..?')"><i class="mdi mdi-delete"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>

<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"           
            },
            "order": [
                [0, 'desc']
            ],
            "displayLength": 25,
            "columnDefs": [
                { "width": "20%", "targets": 1 },
                { "width": "20%", "targets": 5 }
            ]
        });       
    });  
</script>
<!--
<div class="row">
    <div class="col-sm-5">
        <div class="card border-0 shadow">
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    - {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
                <form action="{{ route('users.store') }}" method="POST">
                    <div class="row">
                        <div class="col-sm-12">
                            <input name="name" type="text" class="form-control" placeholder="Ingrese nombre completo" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <input name="email" type="text" class="form-control" placeholder="Ingrese el email" value="{{ old('email') }}">
                        </div>
                        <div class="col-sm-12">
                            <input name="password" type="password" class="form-control" placeholder="Ingrese el password">
                        </div>
                        <div class="col-12">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
-->
@endsection    