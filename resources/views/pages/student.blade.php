{{-- <h1>There are the list of student link below </h1>
@if (count($studetns)>0)
    @foreach ($studetns as $student)
   
  <li>  {{$student}}</li>
    @endforeach
@else
    No studetns Yet្
@endif --}}
{{-- first --}}



@extends('template')
@section('contain')
   <div class="container">
     <h1 class="text-center">This is a list of student</h1>
     <div class="row">
      <a href="form" class="btn btn-success">Add Student</a><br>
    <table class="table table-bordered">
      <thead>
          <tr>
            <th>ID</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Age</th>
              <th>Action</th>
            </tr>
      </thead>
        @foreach ($students as $student)
         <tbody>
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->firstName}}</td>
                <td>{{$student->lastName}}</td>
                <td>{{$student->age}}</td>
                <td>
                  <a href="{{route('edit',$student->id)}}"><button class="btn btn-primary">Edit</button></a>
                  <a href="{{route('delete',$student->id)}}"><button class="btn btn-danger" onclick="return confirm('Are you sure to delete')" >Delete</button></a>
                </td>
            </tr>
         </tbody>
      @endforeach
      </table>
     </div>
   </div>
@endsection