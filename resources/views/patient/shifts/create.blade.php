@extends('template')

@section('main')
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter" style="border-bottom: 0">
            <a href="{{ route("patient.shifts.index") }}"><span>MIS TURNOS > NUEVO TURNO</span></a>
        </div>
        <div class="block-content" style="padding: 0 35px">
            <div class="block block-bordered">

                <div class="block-content">
                    <form class="form-horizontal push-10-t push-10" action="base_forms_premade.html" method="post" onsubmit="return false;">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>Nuevo Turno</h3>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-success" type="submit"><i class="fa fa-check push-5-r"></i> Solicitar</button>
                                <button class="btn btn-danger" type="submit"><i class="fa fa-remove push-5-r"></i> Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- End Block content -->
    </div><!-- End Block bordered -->
@endsection