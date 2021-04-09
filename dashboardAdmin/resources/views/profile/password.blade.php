@extends('layouts.admin')
@section('title')
    Change Password
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
                                  {{ __('Change Password') }}
                              </b> 
                           </h5> 
                        </div>

                        <div class="card-body">
                            <div>
                                <div>
                                    <form class="form-horizontal" method="POST" action="{{ route('user.changePassword') }}">
                                        @csrf
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <input type="password" placeholder="New-Password" class="form-control @error('password') is-invalid @enderror" name="password" value="" required autocomplete="new-password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                    <span class="fas fa-shield-alt"></span>
                                                    </div>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="password-confirm" type="password" placeholder="Re-Password" class="form-control" name="password_confirmation" value="" required autocomplete="new-password" >
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                    <span class="fas fa-shield-alt"></span>
                                                    </div>
                                                    @error('email')
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
                                                        {{ __('Update Password') }}
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