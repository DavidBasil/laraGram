@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @forelse ($posts as $post)

        <div class="col-md-4 mb-4">
          <a href="{{ route('posts.show', $post->id) }}">
            <img src="/storage/{{ $post->image }}" alt="" class="img-fluid shadow">
          </a>
          <a href="{{ route('profile.show', $post->user->id) }}" class="font-weight-bold text-link mr-2">&#64;{{ $post->user->username }}</a> {{ $post->caption }}
        </div>

      @empty 
        <h5>You aren't following anyone. Follow users to see their posts or <a href="{{ route('profile.show', auth()->user()->profile->id) }}">check your own.</a></h5>
      @endforelse
        </div>
  </div>
@endsection
