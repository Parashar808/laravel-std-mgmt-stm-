@extends('welcome')
@section('main_content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Simple Full Width Table</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>DOB</th>
                      <th>Mobile</th> 
                      <th>Action</th>
                      <th>IS ACTIVE</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                 @foreach($students as $student)
                 <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{$student->dob}}</td>  
                    <td>{{$student->mobile}}</td>  
                    <!-- <td>{{$student->is_active}}</td>   -->



                    
                    <td style="display:flex;">
                      <a href = "{{ route('student.edit',$student->id)  }}"
                      class= "btn btn-warning btn-sm"
                      >
                        Edit</a>

                        |
                        <form method="POST" action="{{ route('student.destroy',$student->id) }}">
                          @method('DELETE')
                          @csrf

                          <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                        </form>


</td>
</tr>

                 @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection