@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="row">
            <form method="post" action="{{ route('update.task')}}" >
                {{csrf_field()}}
                <div class="form-group">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <input type="hidden" value="{{ $id }}" name="id" />
                    <label for="title">Task Title:</label>
                    <input type="text" class="form-control" name="title" value={{$task->title}} />
                </div>
                <div class="form-group">
                    <label for="description">Task Description:</label>
                    <textarea cols="5" rows="5" class="form-control" name="description">{{$task->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection