@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h3>Add new post</h3>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label">{{ __('Caption') }}</label>
            <input 
               id="caption" 
               type="text" 
               class="form-control @error('caption') is-invalid @enderror" 
               name="caption" 
               value="{{ old('caption') }}" 
               autocomplete="caption" 
               autofocus>

            @error('caption')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

        <div class="form-group row">
          <label for="image" class="col-md-4 col-form-label">Image</label>
          <input type="file" name="image" class="form-control-file" id="image">

          @error('image')
            <strong class="text-danger">{{ $message }}</strong>
          @enderror

        </div>

        <div class="form-group row mt-4">
          <button type="submit" class="btn btn-primary btn-lg">Add new post</button>
        </div>

        </form>


      </div>

    </div>

  </div>
@endsection
