@extends('layouts.app')

@section('content')
  <div class="container" >
    <div class="row" >
      <div class="col-md-4 col-md-offset-3" >
        <img style="max-width: 30vw; padding-right: 3px;" src="{{$post->image}}" />
      </div>
      <div class="col-md-4">
        <div>
          <div>
            <div style="display: flex; align-items: center;" >
              <img style="max-width: 50px; height: 40px; border-radius:60%;" src="{{$post->user->profile->profileImage()}}">
              <a style="font-weight: bold; color: black; padding-left:3px;" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
              <a style="padding-left: 10px;" href="">Follow</a>
              
            </div>

            <hr>

          </div>
        </div>

        <p style="padding-left: 3px"><span><a style="font-weight: bold; color: black" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span> {{$post->caption}}</p>
      </div>


    </div>
  </div>


@endsection
