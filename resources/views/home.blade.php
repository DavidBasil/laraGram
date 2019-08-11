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
      <h2>{{ $user->username }}</h2>

      <div>
        <span class="mr-4"><strong>153</strong> posts</span>
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
    <div class="col-md-4">
      <img src="https://media.4rgos.it/i/Argos/8729493_R_Z001A?w=750&h=440&qlt=70" alt="" class="img-fluid">
    </div>
    <div class="col-md-4">
      <img src="https://www.noobie.com/wp-content/uploads/2017/11/apple-coffee-computer-cup-girl-update-mac-software-FEATURE-pb.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-md-4">
      <img src="https://image.freepik.com/free-photo/business-people-working-laptop-meeting_53876-40326.jpg" alt="" class="img-fluid">
    </div>
  </div>

</div>
@endsection
