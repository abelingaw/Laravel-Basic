@extends('layouts.app')

@section('content')
<div class="container">
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
                    
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                        <br><br>
                    <h3>Your Blog Posts</h3>
                    
                    @if (count($posts) > 0)
                        
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Written On</th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">View</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}                                        
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts.</p>
                    @endif
                    {{--
                        {{ __('You are logged in!') }}
                    --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
