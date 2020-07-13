@extends('layout.app')

@section('page_title' , 'Insert New student info')

@section('content')
 <div class="container">
   <div class="row">
     <h1>Insert new student info :</h1>
     <form action="{{ route('students.store')}}" method="post">
       @csrf
          <div class="form-group">
            <label for="firstname">First name</label>
            <input type="firstname" name="first_name"class="form-control" id="exampleInputfirstname">
          </div>
          <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="lastname" name="last_name"class="form-control" id="exampleInputlastname">
          </div>
          <div class="form-group">
            <label for="Email1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="matricola">Matricola</label>
            <input type="matricola" name="matricola" class="form-control" id="exampleInputEmail1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <a href="{{ route('students.index')}}">Return</a>
   </div>
 </div>
@endsection
