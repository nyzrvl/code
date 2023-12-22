@extends('layouts.app')

@section('content')
<form action="/p" enctype="multipart/form-data" method="post">
    @csrf
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>
            <div class="row mb-3">
                 <label for="caption" class="col-md-4 col-form-label"> Post caption</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" caption="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $caption }}</strong>
                        </span>
                    @enderror
             </div>
             <div class="row">
                <label for="image"class="col-md-4 col-form-label"> Post image</label>

                <input type="file" class="form-control-file" id="image" name="image" required>

                @error('image')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $image }}</strong>
                        </span>
                @enderror
             </div>
             <div class="row pt-4">
                <button class="btn btn-primary">Add New Post</button>
             </div>
        </div>
    </div>
</div>
</form>
@endsection
