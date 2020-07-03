@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="profile d-flex mb-5">
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                        <article></article> 
                    </div>
                    <div class="counter d-flex">
                        <div class="pr-5 ml-4"><strong>{{ $user->posts->count() }}</strong> Posts</div> 
                        <div class="pr-5 ml-4"><strong>{{ $user->profile->followers->count() }}</strong> Followers</div> 
                        <div class="pr-5 ml-4"><strong>{{ $user->following->count() }}</strong> Following</div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        @foreach($user->posts as $post)
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-body mt-4 ">
                    <h2>{{ $post->title }}</h2>
                    <img src="/storage/{{ $post->image }}"alt="" class="w-25" style="width:10px; height: 100px;">
                    <p>{{ $post->body }}</p>
                </div>
                <div class="delete mb-2 d-flex">
                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                     @csrf
                     @method('delete')
                        <button class="btn btn-danger ml-2" type="submit">Delete Post</button>
                    </form>                    
                    <button class="btn btn-info ml-2" type="submit">
                        <a href="/edit/{{ $post->id }}/edit">Edit Post</a>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
