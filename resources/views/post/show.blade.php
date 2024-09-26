@extends('layouts.app')

@section('content')
  <div class="p-3">
    <h3>{{$post->title}}</h3>
    <p class="text-muted">{{$post->user->name}}</p>
    <p>{{$post->description}}</p>

    <img src="{{asset('/storage/images/'.$post->image)}}" alt="" class="w-100">
  </div>
  <form action="{{route('comment.store',$post->id)}}" method="post" class="mt-3 shadow bg-white p-3">
    @csrf
    <div class="input-group">
      <input type="text" name="body" id="" class="form-control form-control-sm">
      <button type="submit" class="btn btn-outline-secondary btn-sm">Post</button>
    </div>
  </form>

  
  <ul class="list-group mt-3">
    @foreach ($post->comments as $comment)
      <li class="list-group-item">{{$comment->body}}
        <form action="{{route('comment.destroy',$comment->id)}}" method="post" class="d-inline">
          @csrf
          @method('DELETE')

          <button type="submit" class="btn btn-outline-danger btn-sm float-end">Delete</button>
        </form>
      </li>
    @endforeach
  </ul>
@endsection