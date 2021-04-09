@extends('layouts.admin')

@section('title')
    Role
@endsection
@section('content')
<div class="container">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Role Table</h3>

                <div class="card-tools">
                  <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create New Role</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Role Name</th>
                      <th>Permission</th>
                      <th>Date Created</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($role as $roles)
                            <tr>
                                <td>{{ $roles->id }}</td>
                                <td>{{ $roles->name }}</td>
                                <td>
                                
                                    @foreach($roles->permissions as $permission)
                                        <button class="btn btn-warning" role="button"><i class="fas fa-shield-alt"></i>{{ $permission->name }}</button>
                                    @endforeach
                                </td>
                                <td>{{ $roles->created_at }}</td>
                                <td>
                                  <a href="{{ route('permissions.edit',$roles->id) }}" class="btn btn-warning btn-sm">Edit Permission</a>
                                  <!-- <a href="{{ route('permissions.destroy',$permission->id) }}" class="btn btn-danger btn-sm">Delete Permission</a> -->
                                </td>
                            </tr>
                    @empty
                            <tr>
                                <td> </td>
                                <td id="app"> </td>
                                <td><i class="fas fa-folder-open"></i>No Result Found </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
@endsection

@extends('layouts.footer')