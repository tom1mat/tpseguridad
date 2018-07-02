@extends('template')

@section('main')
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter" style="border-bottom: 0">
            <a href="{{ route("admin.index") }}"><span>USUARIOS > NUEVO</span></a>
        </div>
        <div class="block-content" style="padding: 0 35px">
            <div class="block block-bordered">

                <div class="block-content">
                    <form class="form-horizontal push-10-t push-10" action="base_forms_premade.html" method="post" onsubmit="return false;">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>Información</h3>
                                <div class="form-group">
                                    <div class="col-xs-12 col-lg-6">
                                        <label for="usuario">Usuario</label>
                                        <input class="form-control input-lg" type="text" id="usuario" name="usuario" placeholder="Usuario">
                                    </div>
                                    <div class="col-xs-12 col-lg-6">
                                        <label for="email">Email</label>
                                        <input class="form-control input-lg" type="email" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="col-xs-12 col-lg-6">
                                        <label for="password">Contraseña</label>
                                        <input class="form-control input-lg" type="text" id="password" name="password" placeholder="Contraseña (Opcional)">
                                    </div>
                                    <div class="col-xs-12 col-lg-6">
                                        <label  for="role">Rol</label>
                                        <select class="form-control input-lg" id="select-rol" name="select-rol" size="1">
                                            <option value="0">- Seleccionar -</option>
                                            <option value="1">Paciente</option>
                                            <option value="2">Secretaria</option>
                                            <option value="3">Doctor</option>
                                            <option value="4">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="col-xs-12 col-lg-6">
                                        <label for="dni">DNI</label>
                                        <input class="form-control input-lg" type="text" id="dni" name="dni" placeholder="DNI">
                                    </div>
                                    <div class="col-xs-12 col-lg-6">
                                        <label  for="prepaid">Cobertura Médica</label>
                                        <select class="form-control input-lg" id="select-prepaid" name="select-prepaid" size="1">
                                            <option value="0">- Seleccionar -</option>
                                            <option value="1">OSDE</option>
                                            <option value="2">Medicus</option>
                                            <option value="3">Swiss Medical</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <h3>Historia Clínica</h3>
                                <div class="form-group">
                                    <div class="col-xs-12 col-lg-6">
                                        <label for="medicacion">Medicación</label>
                                        <textarea class="form-control input-lg" id="medicacion" name="medicacion" rows="5" placeholder="Medicación del Paciente..."></textarea>
                                    </div>
                                    <div class="col-xs-12 col-lg-6">
                                        <label for="enfermedades">Enfermedades</label>
                                        <textarea class="form-control input-lg" id="enfermedades" name="enfermedades" rows="5" placeholder="Enfermedades del Paciente..."></textarea>
                                    </div>
                                    <div class="col-xs-12 col-lg-6">
                                        <label for="consultas">Consultas</label>
                                        <input class="form-control input-lg" type="text" id="consultas" name="consultas" placeholder="Total de Consultas...">
                                    </div>
                                    <div class="col-xs-12 col-lg-6">
                                        <label for="operaciones">Operaciones</label>
                                        <input class="form-control input-lg" type="text" id="operaciones" name="operaciones" placeholder="Total de Operaciones...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-success" type="submit"><i class="fa fa-check push-5-r"></i> Crear</button>
                                <button class="btn btn-danger" type="submit"><i class="fa fa-remove push-5-r"></i> Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- End Block content -->
    </div><!-- End Block bordered -->
@endsection