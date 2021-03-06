@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-8 text-left">
                            <a href="posts/create" class="btn btn-primary">Create new Room</a>
                        </div>
                        <div class="col-md-4">
                            <a href="dashboard/requestroom" class="btn btn-primary">Requested Room</a>
                        </div>
                        <div class="col-md-7 text-right">
                            <a href="dashboard/wantingroom" class="btn btn-primary">Wanting Rooms</a>
                        </div>
                    </div>
                    <br>
                    <center><h3>Your room</h3></center>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->title}}</th>
                            <th><a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                            <th>
                                {{Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])}}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {{Form::close()}}
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    <div class="row">
                        <div class="col-md-8 text-left">
                            <a href="dashboard/occupiedroom" class="btn btn-primary">Ocuupied Room</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
