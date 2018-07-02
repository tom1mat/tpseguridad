@extends('template')

@section('main')
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter" style="border-bottom: 0">
            <a href="{{ route("patient.shifts.index") }}"><span>MIS TURNOS</span></a>
        </div>
        <div class="block-content row" style="padding: 0 35px">
                @if(count($shiftsArray) > 0)
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
                    <tr class="danger">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->dni }}</td>
                            <td>{{ $user->getUserPrepaid() }}</td>
                            <td>
                                <div class="btn-group">
                                    <div class="btn-group">
                                        <a><i class="fa fa-lg action fa-search"></i></a>
                                        <a><i class="fa fa-lg action fa-check"></i></a>
                                    </div>
                                </div>
                            </td>
                    </tr>
                    </tbody>
                </table>
                @else
                    <h4>No hay turnos reservados.</h4>
                    <a href="{{ route("patient.shifts.create") }}"><h3>Reservar turno</h3></a>
                @endif
        </div> <!-- End Block content -->
    </div><!-- End Block bordered -->
@endsection