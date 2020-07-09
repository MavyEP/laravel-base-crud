@extends('layout.app')

@section('page_title' , 'Students info')

@section('content')
  <div class="container">
    <div class="row">
      <h1>Personal Profile of : {{ $student->first_name }} </h1>
      <ul>
        <li>INFO :</li>
        <li>First name : {{ $student->first_name }}</li>
        <li>Last name : {{ $student->last_name }}</li>
        <li>Numero Matricola : {{ $student->matricola }}</li>
        <li>Email  : {{ $student->email }}</li>
      </ul>
      <h3>PERSONAL ID NUMBER : {{ $student->id }}</h3>
      <a href="{{ route('students.index')}}">Return</a>
      <a href="{{ route('students.create')}}">Add new student!</a>
    </div>
  </div>
@endsection
