@extends('layouts.app')

@section('content')
  <div class="container" >
    @foreach($posts as $post)
    <div class="row">
      <div class="col-md-4 col-md-offset-3" >
        <a href="/profile/{{$post->user->id}}"><img style="width: 30vw; padding-right: 3px; padding-top: 10px; margin-left: 10px;" src="{{$post->image}}" /></a>
      </div>

          </div>

        <div class="col-md-4 col-md-offset-2" style="padding-left: 38px; padding-bottom: 5px; padding-top: 2px;">


        <p style="margin-left: 74px;"><span><a style="font-weight: bold; color: black" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span> {{$post->caption}}</p>
        </div>




    @endforeach
    </div>



@endsection
