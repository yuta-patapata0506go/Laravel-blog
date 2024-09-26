@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<h1>{{ $post->title }}</h1>
<p>{{ $post->description }}</p>


<a href="{{ route('post.profile_edit', $post->id) }}" class="btn btn-sm btn-primary">Edit Profile</a>

@endsection
