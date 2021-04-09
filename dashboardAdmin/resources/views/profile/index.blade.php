@extends('layouts.admin')
@section('title')
    Profile
@endsection
@section('content')
    <section class="content">
        
        <div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img style="width:300px" src="{{ asset('img\avatar.jpg') }}" class="profile-user-img img-fluid img-circle" alt="profile picture">

                            </div>

                            <h3 class="profil-username text-center" style="text-transform: uppercase;">
                                 {{auth()->user()->name}}
                            </h3>
                            <!-- <p class="text-muted text-center">{{auth()->user()->role}}</p> -->
                            <p class="text-muted text-center">{{auth()->user()->email}}</p>
                             <p class="text-muted text-center">{{auth()->user()->phone}}</p> 
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                           <h5>
                              <b>
                                  {{ __('Edit profile') }}
                              </b> 
                           </h5> 
                        </div>

                        <div class="card-body">
                            <div>
                                <div>
                                    <form class="form-horizontal" method="POST" action="{{ route('user.updateProfile') }}">
                                        @csrf
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <input type="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{auth()->user()->name}}" required autocomplete="name">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                    </div>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}" required autocomplete="email" >
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                    </div>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{auth()->user()->phone}}" required >
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                    <span class="fas fa-id-badge"></span>
                                                    </div>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" style="margin-left:-15px;" class="btn btn-primary">
                                                        <i class="fas fa-user-edit"></i>
                                                        {{ __('Update Profile') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

@extends('layouts.footer')