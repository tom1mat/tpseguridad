@extends('template')

@section('main')
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter" style="border-bottom: 0">
            <a href="{{ route("secretary.users.index") }}"><span>USUARIOS</span></a>
        </div>
        <div class="block-content" style="padding: 0 35px">
                @if(count($users) > 0)
                    <table class="table table-striped table-borderless table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>DNI</th>
                            <th>Cobertura Médica</th>
                            <th>ACCIONES</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $each)
                        <tr class="{{ $each->role->role }}">
                            <td>{{ $each->id }}</td>
                            <td>{{ $each->name }}</td>
                            <td>{{ $each->email }}</td>
                            <td>{{ $each->dni }}</td>
                            <td>{{ $each->getUserPrepaid() }}</td>
                            <td>
                                <div class="btn-group">
                                    <div class="btn-group">
                                        <a href="{{ route("secretary.users.edit", $each->id) }}"><i class="fa fa-lg action fa-pencil-square-o"></i></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h4>No hay pacientes.</h4>
                @endif
        </div> <!-- End Block content -->
    </div><!-- End Block bordered -->
@endsection