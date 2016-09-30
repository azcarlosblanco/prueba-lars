@extends('layouts.app')

@section('content')

    <div class="form-group col-lg-8 col-lg-offset-2 control-label">
      <a href="/home" class="btn btn-success form-control">
        Back to the administration panel
      </a>
    </div>

  <div class="form-group col-lg-8 col-lg-offset-2 control-label">
    <a href="{{ route('users.create') }}" class="btn btn-info form-control">
      <i class="fa fa-user-plus fa-fw"></i>
      Add new user
    </a>
  </div>

  <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-default">
              <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-12">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <th>
                                ID
                              </th>
                              <th>
                                Name
                              </th>
                              <th>
                                Email
                              </th>
                              <th>
                                Role
                              </th>
                              <th>
                                Acción
                              </th>
                            </thead>
                            <tbody>
                              @foreach ($users as $user)
                                <tr>
                                  <td>{{ $user->id }}</td>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>{{ $user->role }}</td>
                                  <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                      <i class="fa fa-pencil-square-o fa-fw"></i>
                                      Editar
                                    </a>
                                    <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminar a este usuario?')" class="btn btn-danger">
                                      <i class="fa fa-trash fa-fw"></i>
                                      Eliminar
                                    </a>
                                  </td>

                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                          <div class="text-center">
                            {!! $users->render() !!}
                          </div>
                        </div>
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
