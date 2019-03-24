@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name_company">{{ __('Company Name') }}</label>
                                <input id="name_company" type="text" class="form-control{{ $errors->has('name_company') ? ' is-invalid' : '' }}" name="name_company" value="{{ old('name_company') }}" required autofocus>

                                @if ($errors->has('name_company'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name_company') }}</strong>
                                    </span>
                                @endif
                            </div> 

                            <div class="col-md-6">
                                <label for="nit">{{ __('Nit') }}</label>
                                <input id="nit" type="number" class="form-control{{ $errors->has('nit') ? ' is-invalid' : '' }}" name="nit" value="{{ old('nit') }}" required autofocus>

                                @if ($errors->has('nit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nit') }}</strong>
                                    </span>
                                @endif
                            </div>   

                            <div class="col-md-6 pt-2">
                                <label for="address">{{ __('Address') }}</label>
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div> 

                            <div class="col-md-6 pt-2">
                                <label for="telephone">{{ __('Telephone') }}</label>
                                <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                @if ($errors->has('telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div> 

                            <div class="col-md-6 pt-2">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 pt-2">
                                <label for="name">{{ __('Birthdate') }}</label>
                                <input id="birthdate" type="date" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                @if ($errors->has('birthdate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="col-md-6 pt-2">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-3 pt-2">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-3 pt-2">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <div class="col-md-12 pt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
