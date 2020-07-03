@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::user()->name}}
                    <div>Bio {{ Auth::user()->profile->bio}}</div>
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
                <form action=" {{ url('/posts', ['id' => $post->id]) }}" method="post">
                    <input class="btn btn-danger" type="submit" value="delete" />
                    @method('delete')
                    @csrf
                </form>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
