@extends ('layout.app')

@section('title', 'Students List')
@section('content')
    <div class="container my-4">
        <div class="d-flex justify-content-between">
            <h2 class=" text-white">{{ $students->total() }} Students List</h2>
            <a href="{{ route('students.create') }}" class="btn btn-outline-info">Add Students</a>
        </div>
        <!-- Success message -->
        @session('success')
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession
        <table class="table table-bordered table-dark table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <th scope="row">{{ $student->name }}</th>
                        <th scope="row">{{ $student->email }}</th>
                        <th scope="row">{{ $student->phone }}</th>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-warning">View</a>
                            <a href="" class="btn btn-outline-info">Edit</a>
                            <a href="" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Students Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-end">
            {{ $students->links('vendor.pagination.bootstrap-5-dark') }}
        </div>
    </div>
@endsection