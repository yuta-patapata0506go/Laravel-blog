@extends('layouts.app')

@section('content')
<div class="mt-3">

    @foreach ($all_posts as $post)
        <div class="border rounded p-4 mb-3">
            <a href="{{route('post.show', $post->id)}}" class="text-decoration-none">
                <h3>{{ $post->title }}</h2>

            </a>
            <p class="text-muted">{{$post->user->name}}</p>
            <p class="fs-6">{{ $post->description }}</p>



            <form action="{{route('post.destroy', $post->id)}}" method="post" class=" text-end">
                @csrf
                @method('DELETE')
                <a href="{{ route('post.edit', $post->id)}}" class="btn btn-sm btn-secondary ">Edit</a>

                <button type="submit" class="btn btn-outline-danger btn-sm d-inline">Delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection