@extends('template')

@section('main')

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3 style="margin-bottom: 12px;"><i class="fa fa-x2 fa-cogs"></i> Workflow</h3>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0 !important;">
            <form class="form-inline pull-left">
                <div class="form-group ">
                    <div class="input-group ">
                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Keyword">
                    </div>
                </div>
                <button type="submit" class="btn btn-orange">Search</button>
            </form>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0 !important;">

            <form class="form-inline pull-right">

                <div class="form-group">
                    <label style="float: left; margin: 7px; font-size: 14px;">Date from</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="exampleInputAmount" placeholder="Keyword">
                    </div>
                </div>

                <div class="form-group">
                    <label style="float: left; margin: 7px; font-size: 14px;">Date to</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="exampleInputAmount" placeholder="Keyword">
                    </div>
                </div>
                <button type="submit" class="btn btn-orange">Filter</button>

            </form>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0 !important; margin-top: 12px;">
            <a href="" class="btn btn-orange" type="button"> Keyword <span class=""><i class="fa fa-times-circle"></i></span></a>
            <a href="" class="btn btn-orange" type="button"> 01/01/18 to 12/01/18  <span class=""><i class="fa fa-times-circle"></i></span></a>

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <table class="table table-striped table-borderless table-hover">
            <thead>
            <tr>
                <th>Date</th>
                <th>Type</th>
                <th>Brand</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
            <tr class="danger">
                <td>28/03/2018 11:00</td>
                <td>Data complaint</td>
                <td>Pepsi</td>
                <td>SKU 0075001901023123 image outdated</td>
                <td>Pending</td>
                <td>
                    <div class="btn-group">
                        <div class="btn-group">
                            <a><i class="fa fa-lg action fa-search"></i></a>
                            <a><i class="fa fa-lg action fa-check"></i></a>
                            <a><i class="fa fa-lg danger fa-ban"></i></a>

                        </div>
                    </div>
                </td>
            </tr>

            <tr class="danger">
                <td>28/03/2018 12:00</td>
                <td>Data complaint</td>
                <td>Pepsi</td>
                <td>SKU 0075001901023123 wrong nutritional value</td>
                <td>Pending</td>
                <td>
                    <div class="btn-group">
                        <div class="btn-group">
                            <a><i class="fa fa-lg action fa-search"></i></a>
                            <a><i class="fa fa-lg action fa-check"></i></a>
                            <a><i class="fa fa-lg danger fa-ban"></i></a>

                        </div>
                    </div>
                </td>
            </tr>

            <tr class="warning">
                <td>28/03/2018 13:00</td>
                <td>Data complaint</td>
                <td>Pepsi</td>
                <td>SKU 0075001901023123 low results on search</td>
                <td>Pending</td>
                <td>
                    <div class="btn-group">
                        <div class="btn-group">
                            <a><i class="fa fa-lg action fa-search"></i></a>
                            <a><i class="fa fa-lg action fa-check"></i></a>
                            <a><i class="fa fa-lg danger fa-ban"></i></a>

                        </div>
                    </div>
                </td>
            </tr>

            <tr class="">
                <td>28/03/2018 10:00</td>
                <td>Request</td>
                <td>Pepsi</td>
                <td>SKU 0075001901023123 New e-content </td>
                <td>Approved</td>
                <td>
                    <div class="btn-group">
                        <div class="btn-group">
                            <a><i class="fa fa-lg action fa-search"></i></a>
                            <a><i class="fa fa-lg action fa-check"></i></a>
                            <a><i class="fa fa-lg danger fa-ban"></i></a>

                        </div>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>

    </div>
@endsection