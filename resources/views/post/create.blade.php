@extends('layouts.app')

@section('content')
    <form action="{{route('post.store')}}" enctype="multipart/form-data" method="post">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label fw-bold">title</label>
        <input type="text" name="title" id="title" class="form-control">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label fw-bold">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label fw-bold">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        <div class="form-text">
          Accepted formats: jpg,png,gif,
          <br>Max file size:2MB
        </div>
      </div>
      <button type="submit" class="btn btn-primary px-5">Post</button>
    </form>
@endsection