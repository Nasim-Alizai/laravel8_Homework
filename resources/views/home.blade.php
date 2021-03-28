@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class='container my-5 text-center'>
    <h3>Welcome Mr.  {{ Auth::user()->name }} </h3> <br>
    <a href="{{ route('students.index') }}" class='btn btn-primary my-3'>let's start</a>
</div>
@endsection
