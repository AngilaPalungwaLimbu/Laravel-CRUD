@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)

                        @if (!empty($student))
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->contact }}</td>
                                <td>{{ $student->course }}</td>
                                <th>
                                    <form action="/student/{{$student->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/student/{{$student->id}}" class="btn badge bg-success">Edit</a>
                                        <button type="submit" class="btn badge bg-danger">Delete</button>

                                    </form>

                                </th>
                            </tr>
                        @endif
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
