@extends('layouts.app')

@section('content')

  <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-default">
              <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-12">
                        {!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT', 'class' =>'form-horizontal']) !!}
                          <div class="form-group">
                              {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
                              <div class="col-sm-10">
                                  {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
                              </div>
                          </div>
                          <div class="form-group">
                              {!! Form::label('email', 'E-mail', ['class' => 'col-sm-2 control-label']) !!}
                              <div class="col-sm-10">
                                  {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required']) !!}
                              </div>
                          </div>
                          <div class="form-group">
                              {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
                              <div class="col-sm-10">
                                  {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*************']) !!}
                              </div>
                          </div>
                          <div class="form-group">
                              {!! Form::label('role', 'Role', ['class' => 'col-sm-2 control-label']) !!}
                              <div class="col-sm-10">
                                  {!! Form::select('role', ['user' => 'User', 'admin' => 'Admin', 'superadmin' => 'Super Admin'], $user->role, ['class' => 'form-control', 'placeholder' => 'User role', 'required']) !!}
                              </div>
                          </div>
                          <div class="form-group">
                            {!! Form::label('country_id', 'Country', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('country_id', $countries, $user->country_id, ['class' => 'form-control', 'placeholder'=>'Select a country', 'required']) !!}
                            </div>
                        </div>
                          <div class="form-group col-sm-3 control-label pull-right">
                              {!! Form::submit('Register', ['class' => 'btn btn-info form-control']) !!}
                          </div>
                        {!! Form::close() !!}
                      </div>
                      <!-- /.col-lg-12 (nested) -->
                  </div>
                  <!-- /.row (nested) -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->


@endsection
