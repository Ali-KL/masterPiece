@extends('layout.master')
@section('content')
    <div class="container">
        <h3>welcome {{ Auth::user()->name }}</h3>

        <div class="formContainer">
            <h4>Your Info</h4>
            {{-- <form action="{{ route('Users.update', Auth::user()->id) }}" method="PUT"> --}}
                @csrf
                @method('PUT')

                <label for="">First Name</label>
                <input type="text" name="firstName" value="{{ Auth::user()->firstName }}"><br>

                <label for="">Last Name</label>
                <input type="text" name="lastName" value="{{ Auth::user()->lastName }}"><br>

                <label for="">Phone Number</label>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}"><br>

                <label for="">email</label>
                <input type="text" name="email" value="{{ Auth::user()->email }}"><br>

                <label for="">password</label>
                <input type="text" name="password" value="{{ Auth::user()->password }}"><br>

                <button type="submit">Update</button>

            </form>
        </div>

    </div>
@endsection
