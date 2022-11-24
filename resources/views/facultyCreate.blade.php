@extends('app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card-body">

                    <form action="/faculty" , method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Faculty Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your name">
                        </div>

                        <button type="submit" class="btn btn-info">+ Add Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
