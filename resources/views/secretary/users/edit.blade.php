@extends('template')

@section('main')
    <style>
        textarea{
            height: 110px !important;
        }
        .bg-gray-lighter > a{
            color: #0b0b0b;
            font-weight: bold;
        }
    </style>
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter" style="border-bottom: 0">
            <a href="{{ route("secretary.users.edit", $user->id) }}"><span>EDITAR USUARIO</span></a>
        </div>
        <div class="block-content" style="padding: 0 35px">
            <div class="row">
                {{ Form::model(['route' => 'patient.shifts.update', 'method' => 'POST']) }}
                {!! Form::model($user, ['route' => ['patient.shifts.update', $user->id], 'method' => 'PUT']) !!}
                <div class="col-sm-12">
                    <h3 style="margin: 0 0  20px 15px;">Add new Dynamic data</h3>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Type</label><br>
                            {{--{!! Form::select('dynamicDataTypeId', $dynamicDataTypes, null, ['id'=>'formDynamic', 'class'=> 'form-control input-lg'] ) !!}--}}
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group" id="dynamicValue">
                            <label>Data</label>
                            <textarea class="form-control input-lg" type="value" name="value" required></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-1">
                        <button style="margin: auto; display: block" type="submit" class="btn btn-orange mb-20">Add Dynamic</button>
                    </div>

                {{ Form::close() }}
                <!-- END DYNAMIC DATA -->
                </div>
            </div>
@endsection