@extends('layouts.app')

@section('content')

    <div class="form-group col-lg-8 col-lg-offset-2 control-label">
      <a href="/home" class="btn btn-success form-control">
        Back to the administration panel
      </a>
    </div>

  <div class="form-group col-lg-8 col-lg-offset-2 control-label">
    <a href="{{ route('countries.create') }}" class="btn btn-info form-control">
      <i class="fa fa-plus fa-fw"></i>
      Add new country
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
                                Action
                              </th>
                            </thead>
                            <tbody>
                              @foreach ($countries as $country)
                                <tr>
                                  <td>{{ $country->id }}</td>
                                  <td>{{ $country->name }}</td>
                                  <td>
                                    <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-warning">
                                      <i class="fa fa-pencil-square-o fa-fw"></i>
                                      Edit
                                    </a>
                                    <a href="{{ route('countries.destroy', $country->id) }}" onclick="return confirm('¿Seguro que deseas eliminar esta categoría?')" class="btn btn-danger">
                                      <i class="fa fa-trash fa-fw"></i>
                                      Delete
                                    </a>
                                  </td>

                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                          <div class="text-center">
                            {!! $countries->render() !!}
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
