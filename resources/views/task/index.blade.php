@extends('layouts.app')

@section('content')
    <div class="container">
        @if(count($tasks) > 0)
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Title</td>
                    <td>Description</td>
                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>
                            <a href="{{ url('/edit/task/'.$task->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('delete.task') }}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                                <input name="id" type="hidden" value="{{ $task->id }}">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <h4>No Task</h4>
            @endif
            </tbody>
        </table>
        <div>
@endsection