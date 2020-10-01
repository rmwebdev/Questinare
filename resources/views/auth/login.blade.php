
@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mb-0">

                <div class="card-body p-4">

                    <div class="account-box">
                        <div class="account-logo-box">
                            @if(session('message'))
                            <div class="alert alert-info" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                            
                            <h5 class="text-uppercase mb-1 mt-4">Masuk Admin</h5>
                            <p class="mb-0">Masuk ke dashboard admin</p>
                        </div>

                        <div class="account-content mt-4">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-12">
                                        
                                        <label for="emailaddress">Alamat Email</label>
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" name="email" required="" placeholder="Ketik alamat email" value="{{ old('email', null) }}">
                                    
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        
                                        <label for="password">Sandi</label>
                                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Ketik sandi">

                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        @if(Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-muted float-right"><small>Lupa sandi ?</small></a>
                                        @endif
                                        <div class="checkbox checkbox-success">
                                            <input id="remember" type="checkbox" checked="" name="remember">
                                            <label for="remember">
                                                Ingat saya
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center mt-2">
                                    <div class="col-12">
                                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Masuk</button>
                                    </div>
                                </div>

                            </form>



                        </div>
                    </div>
                </div>

            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->

  @endsection
