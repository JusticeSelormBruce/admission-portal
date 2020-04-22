@extends('layouts.Admin')

@section('render')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">                        <form method="POST" action="/register-teller">

                    <div class="card pt-2 ">
                        <div class="">
                            <div class="mx-2 lead">{{ __('Register') }}</div>

                            <div class="">
                                @csrf

                                <div class="form-group row ">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6  input-group-sm">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bank') }}</label>

                                    <div class="col-md-6  input-group-sm">
                                        <select name="bank_id" id="" class="form-control" >
                                            <option value="">Select Bank(Branch)</option>
                                            @foreach($banks as $bank)

                                                <option value="{{$bank->id}}"> {{$bank->name}}<span class="ml-5">({{$bank->branch}})</span>
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('bank_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                    <div class="col-md-6  input-group-sm">
                                        <select name="role_id" id="" class="form-control" required>
                                            <option value="">Select User Role</option>
                                            @foreach($roles as $role)

                                                <option value="{{$role->id}}"> {{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6  input-group-sm">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6  input-group-sm">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6  input-group-sm">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-outline-dark btn-sm w-25">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                </form></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
