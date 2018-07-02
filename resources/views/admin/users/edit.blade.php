@extends('template')

@section('main')
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter" style="border-bottom: 0">
            <a href="{{ route("admin.index") }}"><span>USUARIOS</span></a>
        </div>
        <div class="block-content" style="padding: 0 35px">
            <div class="block block-bordered">

                <div class="block-content">
                    <form class="form-horizontal push-10-t push-10" action="base_forms_premade.html" method="post" onsubmit="return false;">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="usuario">Usuario</label>
                                        <input class="form-control input-lg" type="text" id="usuario" name="usuario" placeholder="Usuario">
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="email">Email</label>
                                        <input class="form-control input-lg" type="text" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="dni">DNI</label>
                                        <input class="form-control input-lg" type="text" id="dni" name="dni" placeholder="DNI">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="medicacion">Medicación</label>
                                        <textarea class="form-control input-lg" id="medicacion" name="medicacion" rows="5" placeholder="Medicación del Paciente..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="enfermedades">Enfermedades</label>
                                        <textarea class="form-control input-lg" id="enfermedades" name="enfermedades" rows="5" placeholder="Enfermedades del Paciente..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-city">Where do you live?</label>
                                        <input class="form-control input-lg" type="text" id="mega-city" name="mega-city" placeholder="Enter your location..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="mega-skills">Skills</label>
                                        <select class="form-control" id="mega-skills" name="mega-skills" size="7" multiple="">
                                            <option value="1">HTML</option>
                                            <option value="2">CSS</option>
                                            <option value="3">JavaScript</option>
                                            <option value="4">PHP</option>
                                            <option value="5">Ruby</option>
                                            <option value="6">Photoshop</option>
                                            <option value="7">Illustrator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mega-age">Age</label>
                                        <input class="form-control input-lg" type="text" id="mega-age" name="mega-age" placeholder="Enter your age..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12">Gender</label>
                                    <div class="col-xs-12">
                                        <label class="css-input css-radio css-radio-warning push-10-r">
                                            <input type="radio" name="mega-gender-group"><span></span> Female
                                        </label>
                                        <label class="css-input css-radio css-radio-warning">
                                            <input type="radio" name="mega-gender-group"><span></span> Male
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Complete Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- End Block content -->
    </div><!-- End Block bordered -->
@endsection