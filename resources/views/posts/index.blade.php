@extends('layouts.app')

@section('content')
  <div class="container" >
    @foreach($posts as $post)
    <div class="row" >
      <div class="col-md-4 col-md-offset-3" >
        <a href="/profile/{{$post->user->id}}"><img style="max-width: 30vw; padding-right: 3px;" src="{{$post->image}}" /></a>
      </div>

          </div>
        </div>
        <div class="col-md-4 col-md-offset-3" style="padding-left: 38px; padding-bottom: 5px; padding-top: 2px;">


        <p style="padding-left: 3px"><span><a style="font-weight: bold; color: black" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span> {{$post->caption}}</p>
        </div>
      </div>


    </div>
    @endforeach


  </div>


@endsection
