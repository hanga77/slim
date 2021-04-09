@extends('layouts.admin')

@section('title')
    Create Permission
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> {{ __('Add New Permission') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('permissions.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i>See All Permission</a>
                    </div>
                </div>

                <form method="POST" action="{{route('permissions.store')}}" >
                    @csrf
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input id="name" type="text" placeholder="Permission Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required >
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
                            Create Permission
                        </button>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
