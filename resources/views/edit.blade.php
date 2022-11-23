@extends('app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card-body">

                    <form action="/student/{{ $student->id }}" , method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Student Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your name" value="{{ $student->name }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter your address" value="{{ $student->address }}">
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact <span class="text-danger">*</span></label>
                            <input type="text" name="contact" id="contact" class="form-control"
                                placeholder="Enter your number" value="{{ $student->contact }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Enter your email" value="{{ $student->email }}">
                        </div>
                        <div class="form-group">
                            <label for="course">Course <span class="text-danger">*</span></label>
                            <input type="text" name="course" id="course" class="form-control"
                                placeholder="Enter your course" value="{{ $student->course }}">
                        </div>
                        <div class="form-group">
                            <label for="remark">Remark <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="remark" id="remark" rows="3" {{ $student->remark }}></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-check mr-sm-2">
                                    <input type="checkbox" class="form-check-input" name="status" id="status"
                                        value="1" @if ($student->status == 1) checked @endif />
                                    <label class="form-check-label" for="customControlAutosizing1">Mark as
                                        open</label>
                                </div>

                            </div>
                        </div>
                </div>


                <button type="submit" class="btn btn-info">Update Record</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
