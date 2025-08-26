@extends ('layout.app')

@section('title', 'Student details')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2 class="text-white text-center">Students Details</h2>
                <div class="card bg-dark text-white mt-4">
                    <div class="card-body border border-success rounded">
                        <h5 class="card-title"> <strong>Name: {{ $student->name }} </strong> </h5>
                        <p class="card-text"> <strong>Email: {{ $student->email }}</strong> </p>
                        <p class="card-text"> <strong>Phone: {{ $student->phone }} </strong> </p>
                        <a href="{{ route('students.index') }}" class="btn btn-outline-info">Back to list</a>
                    </div>
                </div>
            </div>
        </div>

@endsection