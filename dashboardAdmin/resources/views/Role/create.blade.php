@extends('layouts.admin')

@section('title')
    Create Role
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> {{ __('Add New Role') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('role.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i>See All Roles</a>
                    </div>
                </div>
                <div class="card-body" id="app" >
                    <role></role>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
