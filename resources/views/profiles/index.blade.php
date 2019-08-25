@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row"> <!-- top row -->

    <!-- left column -->
    <div class="col-md-3 p-4">
      @if ($user->profile->image)
        <img src="/storage/{{ $user->profile->image }}" alt="" class="w-100 rounded-circle">
      @else
        <img src="{{ asset('img/placeholder.png') }}" alt="" class="w-100 rounded-circle">
      @endif
    </div>

    <!-- right column -->
    <div class="col-md-9">
      <div class="pb-3">

        <h2 class="d-inline">{{ $user->username }}</h2>

        @if (auth()->user()->id != $user->profile->user_id)
          <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
        @endif

      </div>

      @can('update', $user->profile)
      <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-outline-warning mb-2">Edit Profile</a>
      <a href="{{ route('posts.create') }}" class="btn btn-outline-warning mb-2">Add new post</a>
      @endcan

      <div>
        <span class="mr-4"><strong>{{ $postCount }}</strong> posts</span>
        <span class="mr-4"><strong>{{ $followersCount }}</strong> followers</span>
        <span class="mr-4"><strong>{{ $followingCount }}</strong> following</span>
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
        <img src="/storage/{{ $post->image }}" alt="" class="img-fluid shadow" data-toggle="tooltip" data-placement="top" title="{{ $post->caption }}">
      </a>
    </div>
    @endforeach
  </div>

</div>
@endsection

@push('js')
<script charset="utf-8">
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endpush
