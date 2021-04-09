@extends('layouts.admin')

@section('title')
    Edit Permission
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> {{ __('Edit Permission') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('permissions.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i>See All Permission</a>
                    </div>
                </div>

                <form method="POST" action="{{route('permissions.update',$permission->id)}}" >
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input id="name" type="text" placeholder="Permission Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $permission->name }}" required >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-key"></span>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary bg-green">
                            <i class="fas fa-save"></i>
                            Update Permission
                        </button>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
