@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row"> <!-- top row -->

    <!-- left column -->
    <div class="col-md-3 p-4">
      <img src="https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg" alt="" class="w-75 rounded-circle">
    </div>

    <!-- right column -->
    <div class="col-md-9">
      <div>
        <h2 class="d-inline">{{ $user->username }}</h2>
        @can('update', $user->profile)
        <a href="{{ route('posts.create') }}" class="d-inline float-right mt-2">Add new post</a>
        @endcan
      </div>

      @can('update', $user->profile)
      <a href="{{ route('profile.edit', $user->id) }}" class="">Edit Profile</a>
      @endcan

      <div>
        <span class="mr-4"><strong>{{ $user->posts->count() }}</strong> posts</span>
        <span class="mr-4"><strong>23k</strong> followers</span>
        <span class="mr-4"><strong>212</strong> following</span>
      </div>

      <div class="py-2">
        <p class="font-weight-bold m-0">{{ $user->profile->title }}</p>
        <p class="m-0">{{ $user->profile->description }}</p>
        <p class="m-0">
        <a href="{{ $user->profile->url }}" target="_blank" class="text-primary">{{ $user->profile->url }}</a>
        </p>
      </div>

    </div>

  </div> <!-- end of top row -->

  <div class="row mt-5">  <!-- posts row -->
    @foreach ($user->posts as $post)
    <div class="col-md-4 mb-3 pb-4">
      <a href="{{ route('posts.show', $post->id) }}">
        <img src="/storage/{{ $post->image }}" alt="" class="img-fluid">
      </a>
    </div>
    @endforeach
  </div>

</div>
@endsection
