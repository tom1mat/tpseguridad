@extends('template')

@section('main')
    <style>
        .Admin{
            background-color: rgba(95, 229, 134, 0.43);
        }
        .Doctor{
            background-color: rgba(190, 194, 104, 0.45);
        }
        .Secretary{
            background-color: rgba(194, 105, 75, 0.46);
        }
        .Patient{
            background-color: rgba(96, 129, 194, 0.5);
        }
    </style>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter" style="border-bottom: 0">
            <a href="{{ route("patient.shifts.index") }}"><span>PACIENTE > MIS TURNOS</span></a>
        </div>
        <div class="block-content" style="padding: 0 35px">
            <table class="table table-borderless table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Cobertura Médica</th>
                </tr>
                </thead>

                <tbody>
                @foreach($usersArray as $each)
                <tr class="{{ $each->role->role }}">
                    <td>{{ $each->id }}</td>
                    <td>{{ $each->name }}</td>
                    <td>{{ $each->role->role }}</td>
                    <td>{{ $each->email }}</td>
                    <td>{{ $each->dni }}</td>
                    <td>{{ $each->prepaid }}</td>
                    <td>
                        <div class="btn-group">
                            <div class="btn-group">
                                <a href="{{ route("admin.users.edit", $each->id) }}"><i class="fa fa-lg action fa-search"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- End Block content -->
    </div><!-- End Block bordered -->
@endsection