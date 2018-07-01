@extends('template')

@section('main')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3 style="margin-bottom: 12px; color: blue;"><i class="fa fa-plus-square"></i> CONSULTORIO</h3>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0 !important;">
            <h4>Título A</h4>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0 !important;">
            <h4>Título B</h4>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-striped table-borderless table-hover">
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
                <tr class="danger">
                    {{--@if(!is_null($loggedUser))--}}
                    {{--<td>{{ $loggedUser->id }}</td>--}}
                    {{--<td>{{ $loggedUser->name }}</td>--}}
                    {{--<td>{{ $loggedUser->role->role }}</td>--}}
                    {{--<td>{{ $loggedUser->email }}</td>--}}
                    {{--<td>{{ $loggedUser->dni }}</td>--}}
                    {{--<td>{{ $loggedUser->prepaid }}</td>--}}
                    {{--<td>--}}
                        {{--<div class="btn-group">--}}
                            {{--<div class="btn-group">--}}
                                {{--<a><i class="fa fa-lg action fa-search"></i></a>--}}
                                {{--<a><i class="fa fa-lg action fa-check"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</td>--}}
                    {{-- @endif --}}
                </tr>
            </tbody>
        </table>
    </div>
@endsection