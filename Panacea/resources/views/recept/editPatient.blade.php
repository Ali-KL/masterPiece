<h1>Edit Patient Page</h1>


@extends('layout.master')

@section('content')
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Patient') }}</div>

                    <div class="card-body">
                        @if (\Session::has('message'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('message') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('patients.update',$patient->id) }}"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="firstName"
                                    class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                                <div class="col-md-6">
                                    <input id="firstName" type="text"
                                        class="form-control @error('firstName') is-invalid @enderror" name="firstName"
                                        value="{{ $patient->firstName }}" autocomplete="firstName" autofocus>

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
                                        value="{{ $patient->lastName }}" autocomplete="lastName" autofocus>

                                    @error('lastName')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                                <div class="col-md-6">
                                    

                                    <input id="image" type="file"
                                        class="form-control @error('image') is-invalid @enderror" name="image"
                                        value="{{ $patient->image }}"  autofocus>
                                        <img src="/images/{{ $patient->image }}" width="300px">

                                    @error('image')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="allergies"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Allergies') }}</label>

                                <div class="col-md-6">
                                    <input id="allergies" type="text"
                                        class="form-control @error('allergies') is-invalid @enderror" name="allergies"
                                        value="{{ $patient->allergies }}" autocomplete="allergies" autofocus>

                                    @error('allergies')
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
                                        value="{{ $patient->phone }}" autocomplete="phone" autofocus>

                                    @error('phone')
                                        <span style="color: red" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Patient') }}
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
