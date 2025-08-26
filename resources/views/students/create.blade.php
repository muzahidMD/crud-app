@extends ('layout.app')

@section('title', 'Add Students')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card bg-dark text-white">

                <div class="d-flex justify-content-between my-3">
                    <h2 class="text-center">Add Student</h2>
                    <a href="{{ route('students.index') }}" class="btn btn-outline-warning">All Students</a>
                </div>

                <div class="card-body border border-light rounded">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control bg-dark text-white @error('name') is-invalid @enderror">
                            @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" value="{{ old('email') }}"
                                class="form-control bg-dark text-white @error('email') is-invalid @enderror">
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}"
                                class="form-control bg-dark text-white @error('phone') is-invalid @enderror">
                            @error('phone')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-success text-white">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection