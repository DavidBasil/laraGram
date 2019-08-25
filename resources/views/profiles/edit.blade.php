@extends('layouts.app')

@section('content')
  <div class="container">


    <div class="row">
      <div class="col-md-8 offset-md-2">

        <h3>Edit Your Profile</h3>

        <hr>

        <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')

          <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
            <input 
                               id="title" 
                               type="text" 
                               class="form-control @error('title') is-invalid @enderror" 
                               name="title" 
                               value="{{ old('title') ?? $user->profile->title }}" 
                               autocomplete="title" 
                               autofocus>

                               @error('title')
                               <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                               </span>
                             @enderror
          </div>

          <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
            <input 
                                     id="description" 
                                     type="text" 
                                     class="form-control @error('descrption') is-invalid @enderror" 
                                     name="description" 
                                     value="{{ old('description') ?? $user->profile->description }}" 
                                     autocomplete="description" 
                                     autofocus>

                                     @error('description')
                                     <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                     </span>
                                   @enderror
          </div>

          <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label">{{ __('Url') }}</label>
            <input 
                             id="url" 
                             type="text" 
                             class="form-control @error('url') is-invalid @enderror" 
                             name="url" 
                             value="{{ old('url') ?? $user->profile->url }}" 
                             autocomplete="url" 
                             autofocus>

                             @error('url')
                             <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                             </span>
                           @enderror
          </div>

          <div class="form-group row">
            <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>
            <input 
                               id="image" 
                               type="file" 
                               class="form-control-file" 
                               name="image">

            @error('image')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </div>


          <div class="form-group row mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Update Profile</button>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection
