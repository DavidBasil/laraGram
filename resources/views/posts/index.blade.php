@extends('layouts.app')

@section('content')
  <div class="container">
    @foreach ($posts as $post)
      <div class="row">

        <div class="col-md-8 offset-md-2">
          <img src="/storage/{{ $post->image }}" alt="" class="img-fluid">
        </div>
      </div>

      <div class="row">

        <div class="col-md-4">
          <div>


          <p class="">
          <a href="{{ route('profile.show', $post->user->id) }}" class="font-weight-bold text-dark mr-2">{{ $post->user->username }}</a> {{ $post->caption }}
          </p>
        </div>

      </div>

    @endforeach
  </div>
@endsection
