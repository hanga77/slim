@extends('layouts.admin')

@section('title')
    Permission
@endsection
@section('content')
<div class="container">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Permission Table</h3>

                <div class="card-tools">
                  <a href="{{ route('permissions.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create New Permission</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Permission Name</th>
                      <th>Status</th>
                      <th>Date Created</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($permissions as $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>{{ $permission->name }}</td>
                                <td><span class="tag tag-success">active</span></td>
                                <td>{{ $permission->created_at }}</td>
                                <td>
                                  <a href="{{ route('permissions.edit',$permission->id) }}" class="btn btn-warning btn-sm">Edit Permission</a>
                                  <!-- <a href="{{ route('permissions.destroy',$permission->id) }}" class="btn btn-danger btn-sm">Delete Permission</a> -->
                                </td>
                            </tr>
                    @empty
                           <tr>
                                <td> </td>
                                <td> </td>
                                <td><i class="fas fa-folder-open"></i> No Result Found </td>
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