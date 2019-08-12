@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      <div class="col-md-7">
        <img src="/storage/{{ $post->image }}" alt="" class="img-fluid">
      </div>

      <div class="col-md-5">
        <div>
          @if ($post->user->profile->image)
          <img 
            src="/storage/{{ $post->user->profile->image }}" 
            class="w-25 rounded-circle"> 
            @else
          <img 
            src="{{ asset('img/placeholder.png') }}" 
            class="w-25 rounded-circle"> 
          @endif
          <span>
            <a href="{{ route('profile.show', $post->user->id) }}" class="text-dark h6 pl-2 font-weight-bold mr-1">{{ $post->user->username }}</a>
            <a href="#" class="font-weight-bold mt-3 border-left pl-2">Follow</a>
          </span>
        </div>

        <hr>

        <p class="">
        <a href="{{ route('profile.show', $post->user->id) }}" class="font-weight-bold text-dark mr-2">{{ $post->user->username }}</a> {{ $post->caption }}
       </p>
      </div>

    </div>
  </div>
@endsection
