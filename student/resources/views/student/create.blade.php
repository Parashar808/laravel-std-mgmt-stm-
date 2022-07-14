@extends('welcome')
@section('main_content')
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('student.store') }}">
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Email">Email address</label>
                            <input type="email" name="email" class="form-control" id="Email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"
                                   placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of birth</label>
                            <input type="text" class="form-control" name="dob"
                                   placeholder="dob">


                               
                        </div>

                        <div class="form-check">
                        <label for="Mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile"
                                   placeholder="Number">

                            
                        </div>

                        <div class="form-check">
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control" name="gender"
                                   placeholder="0 for male, 1 for female">

                            
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
