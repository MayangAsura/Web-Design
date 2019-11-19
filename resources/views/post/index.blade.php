@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">{{$post->title}}

                            <div class="pull-right">
                                <a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-primary">Edit</a>
                               <form action="{{ route('post.destroy', $post) }}" method="post">
                                   {{ csrf_field() }}
                                   {{ method_field('DELETE') }}
                                   <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                               </form>
                            </div>
                        </div>

                        <div class="card-body">
                            <p>{{$post->content}} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection