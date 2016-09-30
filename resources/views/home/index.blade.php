@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="form-group col-sm-12 control-label pull-right">
                          <a href="{{ route('countries.index') }}" class="btn btn-info form-control">
                            Administrar Paises
                          </a>
                        </div>
                        <div class="form-group col-sm-12 control-label pull-right">
                          <a href="{{ route('users.index') }}" class="btn btn-info form-control">
                            Administrar Usuarios
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
