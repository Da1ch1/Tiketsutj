@extends('layouts.auth_app')
@section('title','Login')
@section('content')
    <div class="  card card-primary dark:bg-gray-800/50 dark:bg-gradient-to-bl  via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div class="card-header"><h4>Login</h4></div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="dark:bg-gray-800" >
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger p-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="email">Email</label>
                    <input aria-describedby="emailHelpBlock" id="email" type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           placeholder="Enter Email" tabindex="1"
                           value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" autofocus
                           required>
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                        <div class="float-right">
                            <a href="{{ route('password.request') }}" class="text-small">
                                Olvide mi contraseña?
                            </a>
                        </div>
                    </div>
                    <div class="input-group">
                        <input aria-describedby="passwordHelpBlock" id="pwd" type="password"
                               value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                               placeholder="Enter Password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password"
                               tabindex="2" required>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fa fa-eye" aria-hidden="true" id="eye" style="cursor: pointer;"></i>
                            </span>
                        </span>
                    </div>
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                               id="remember"{{ (Cookie::get('remember') !== null) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Recordarme</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
                <a href="{{ route('register') }}"  class="float-right ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Crear cuenta</a>

            </form>
        </div>
    </div>
@endsection
