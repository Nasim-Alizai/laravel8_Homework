
@extends('layouts.app')

@section('content')

@guest
  @if (Route::has('login'))
  <div class='text-center'>please log in</div>
  @endif
  @else
  <div class="pull-left mt-5">
  <h2>Student System</h2>
  </div>
  
  <div class="row">
    <div class="col-lg-12 my-5">
      <div class="pull-right">
        <a href="{{ route('students.create') }}" class="btn btn-success">Create New Student</a>
      </div>
    </div>
  </div>
 

  @if ($massage = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $massage }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>NO</th>
      <th>Name</th>
      <th>Course</th>
      <th>Fee</th>
      <th width='250px'> Actions </th>
    </tr>
    @foreach ($students as $student)
    <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $student->student_name }}</td>
      <td>{{ $student->course }}</td>
      <td>{{ $student->fee }}</td>
      <td>
        <form action="{{ route('students.destroy',$student->id) }}" method="POST" >
          <a href="{{ route('students.show',$student->id) }}" class="btn btn-info">Show</a>
          <a href="{{ route('students.edit',$student->id) }}" class="btn btn-primary">Edit</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      
      </td>
    </tr>
    @endforeach
  </table>
  @endguest
  @endsection

