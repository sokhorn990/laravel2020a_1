
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>


@endif


@extends('template')
@section('contain')
    
@endsection
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
                <div class="card">
                       <div class="card-header text-center">Add New Student</div>
                <div class="card-body">
                    <form action={{route('update',$student->id)}} method="POST">
                        @method('PATCH')
                            @csrf
                                <input type="text"  placeholder="First Name" name="firstName" id="" value="{{$student->firstName}}" class="form-control"><br>
                                <input type="text"  placeholder="Last Name" name="lastName" id="" value="{{$student->lastName}}"  class="form-control"><br>
                                <input type="text" placeholder="Age" name="age" id="" value="{{$student->age}}"   class="form-control"><br>
                               <button type="submit "  class=" btn btn-success form-control">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>

