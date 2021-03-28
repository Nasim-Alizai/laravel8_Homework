@extends('layouts.app')
@section('content')
@guest
  @if (Route::has('login'))
  <div class='text-center'>please log in</div>
  @endif
  @else
<div class="row" >
    <div class="col-lg-12 my-5">
      <div class="pull-left text-center">
        <h2>Mr. {{ $student->student_name }}</h2>
      </div>
      <div class="pull-right">
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>
<div class="text-center">
  <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Name : </strong>
        {{ $student->student_name }} <br>
        <strong>Course : </strong>
        {{ $student->course}} <br>
        <strong>Fee : </strong>
        {{ $student->fee}} <br>
    </div>
</div>
@endguest
@endsection