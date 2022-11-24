@extends('app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                {{-- <div class="card-header ">
                <span class="fs-4 fw-bold">General Setting</span>
                @if (empty($student))
                    <a href="/student/create" class="float-end btn btn-info">Add student Detail</a>
                @endif
            </div> --}}
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Faculty Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faculties as $faculty)
                                <tr>
                                    <td>{{ $faculty->name }}</td>
                                    <td>
                                        <form action="/faculty/{{ $faculty->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/faculty/{{ $faculty->id }}/edit" class="btn badge bg-success">Edit</a>
                                            <button type="submit" class="btn badge bg-danger">Delete</button>

                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <a href="faculty/create"><button class="btn btn-info">Add New Faculty</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
