@extends('app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card-body">

                    <form action="/faculty/{{ $faculty->id }}" , method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Faculty Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your name" value="{{ $faculty->name }}">
                        </div>

                </div>

                <button type="submit" class="btn btn-info">Update Record</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
