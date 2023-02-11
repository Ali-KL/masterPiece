{{-- @extends('layout.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        You are a Recept .
                        <a href="{{ route('patients.create') }}"><button>Add Patient</button></a>
                        <a href="{{ route('patients.edit') }}"><button>Edit Patient</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}






@extends('layout.master')

@section('content')
    <div class="container">


        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb ">
                <div class="pull-right">
                    <a class="btn btn-success mb-3" href="{{ route('patients.create') }}"> Add New Patient</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">

                <div class="patients-tabs">
                    <!-- tab -->
                    <div id="tab1" class="tab-pane active">
                        <div class="patients-slick" data-nav="#slick-nav-1">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Allergies</th>
                                        <th>Phone Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <th scope="row"><img src="/images/{{ $patient->image }}" width="50px"></th>
                                            <td>{{ $patient->firstName }}</td>
                                            <td>{{ $patient->lastName }}</td>
                                            <td>{{ $patient->allergies }}</td>
                                            <td>{{ $patient->phone }}</td>
                                            <td>
                                                <div class="patient-btns" style="display: inline-block">
                                                    <form action="{{ route('patients.destroy', $patient->id) }}"
                                                        method="POST">

                                                        <a class="btn btn-info"
                                                            href="{{ route('patients.show', $patient->id) }}">Show</a>

                                                        <a class="btn btn-primary"
                                                            href="{{ route('patients.edit', $patient->id) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are You Sure?')"
                                                            class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                        </div>
                        </td>

                        </tr>

                    </div>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="paginationBtns" style="margin-left: 45% ">
        {!! $patients->links() !!}
    </div>
@endsection
