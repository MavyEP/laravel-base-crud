@extends('layout.app')

@section('page_title' , 'Mw.School - STUDENTS')

@section('content')
  <div class="container">
  <div class="row">
    <h1 class="mt-5 mb-5">Mw.School - STUDENTS</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>INFO</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($student as $student_item)
          <tr>
            <td>{{ $student_item->id }}</td>
            <td>{{ $student_item->first_name }}</td>
            <td>
              <a href="{{ route('students.show' , ['student' => $student_item->id ])}}">Details</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
