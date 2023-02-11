<h1>Add User Page</h1>


@extends('layout.master')

@section('content')
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add User') }}</div>

                    <div class="card-body">
                        @if (\Session::has('message'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('message') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="firstName"
                                    class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                                <div class="col-md-6">
                                    <input id="firstName" type="text"
                                        class="form-control @error('firstName') is-invalid @enderror" name="firstName"
                                        value="{{ old('firstName') }}" autocomplete="firstName" autofocus>

                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        @error('firstName')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lastName"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text"
                                        class="form-control @error('lastName') is-invalid @enderror" name="lastName"
                                        value="{{ old('lastName') }}" autocomplete="lastName" autofocus>

                                    @error('lastName')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="row mb-3">
                                <label for="age"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>

                                <div class="col-md-6">
                                    <input id="age" type="number"
                                        class="form-control @error('age') is-invalid @enderror" name="age"
                                        value="{{ old('age') }}" autocomplete="age" autofocus>

                                    @error('age')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="input-group mb-3 ">
                                <div class="col-md-6">
                                    <label class="col-md-4 col-form-label text-md-end" for="role">Role</label>
                                    <select id="role" type="number"
                                        class="form-control @error('role') is-invalid @enderror" name="role"
                                        value="{{ old('role') }}" autofocus>
                                        <option selected>Choose...</option>
                                        <option value="0">patient</option>
                                        <option value="1">recept</option>
                                        <option value="2">doctor</option>
                                        <option value="3">pharma</option>
                                        <option value="4">admin</option>
                                    </select>
                                </div>
                                @error('role')
                                    <span style="color: red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>



                            

                            {{-- <label for="cars">Choose a car:</label>
                            <select id="cars" name="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select> --}}





                            <div class="row mb-3">
                                <label for="allergies"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Allergies') }}</label>

                                <div class="col-md-6">
                                    <input id="allergies" type="text"
                                        class="form-control @error('allergies') is-invalid @enderror" name="allergies"
                                        value="{{ old('allergies') }}" autocomplete="allergies" autofocus>

                                    @error('allergies')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" autocomplete="phone" autofocus>

                                    @error('phone')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" style="color: red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="role"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <select id="role" 
                                        class="form-control @error('role') is-invalid @enderror" name="role"
                                        value="{{ old('role') }}" autocomplete="role" autofocus>
                                        
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="fiat">Fiat</option>
                                        <option value="audi">Audi</option>

                                    @error('role')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add User') }}
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
