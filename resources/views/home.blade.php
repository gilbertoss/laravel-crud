@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        @endif

        <div class="row">
            <a href="{{url('/create/task')}}" class="btn btn-success">Create Task</a>
            <a href="{{url('/tasks')}}" class="btn btn-success">All Tasks</a>
        </div>
    </div>
@endsection