@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create New Post</div>
                    <form action="/create-new-post" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group row mt-3">
                            <label for="title" class="col-md-4 col-form-label text-md-right">POST TITLE</label>

                            <div class="col-md-6">
                                <input type="text" 
                                id="title" 
                                name="title"
                                class="form-control{{ $errors->has('title') ? ' is-invalid': '' }} "
                                value="{{ old('title') }}" 
                                autocomplete="title" 
                                autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('POST CONTENT') }}</label>

                            <div class="col-md-6">
                                <textarea 
                                 id="body"
                                 name="body"
                                 class="form-control{{ $errors->has('body') ? ' is-invalid': '' }} "
                                 width="50" 
                                 height="20"  
                                 value="{{ old('body') }}" 
                                 autocomplete="body" 
                                 autofocus>
                                 </textarea>

                                @if ($errors->has('body'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('POST IMAGE') }}</label>

                            <div class="col-md-6">
                                <input type="file" 
                                id="image"
                                name="image"
                                class="form-control{{ $errors->has('image') ? ' is-invalid': '' }} " 
                                value="{{ old('image') }}" 
                                autocomplete="image" 
                                autofocus>

                               @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 mb-3">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Publish') }}
                                </button>
                            </div>
                        </div>

                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

