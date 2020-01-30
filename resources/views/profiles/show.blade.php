@extends('layouts.app')

@section('content')
<div class="container" style="padding-left:10vw; padding-right:10vw">
  <div class="row">
    <div class="col-md-3" style="padding-left:25px; padding-top:15px">
      <img style="max-width: 168px; height: 150px; border-radius:60%;" src="{{$user->profile->profileImage()}}"/>

    </div>
    <div class="col-md-9">
      <div>
        <div style="display: flex">
          <div style="width: 100%;">
            <div style="display: flex;">
              <h3 style="margin-bottom: -5px;">{{ $user -> username }}</h3>
              @if(Auth::user() && Auth::user()->id !== $user->id )
              <follow-button user-id="{{$user->id}}" follows=" {{ $follows }} "></follow-button>
              @endif
            </div>

            @if(Auth::user() && Auth::user()->id === $user->id )
            <div style="margin-top:-26px; text-align:right;"><a href="/p/create" style='margin-left: auto;'>Add New Post</a></div>

            <div style="padding-top: 4px;"><a href="/profile/{{$user->id}}/edit" style="">Edit Profile </a></div>
            @endif
          </div>
        </div>
        <div style="display: flex; padding-top: 3px;" >
          <div style="padding-right: 10px"><strong>120</strong> posts</div>
          <div style="padding-right: 10px"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
          <div style="padding-right: 10px"><strong>{{$user->following->count()}}</strong> following</div>
        </div>

        <div>
          <div style="padding-top: 5px;"><strong>{{ $user->profile->title }}</strong></div>
          <div style="padding-right:310px"> {{ $user->profile->description }}</div>
          <div> <a href="{{$user->profile->url}}">{{ $user->profile->url }}</a></div>
        </div>
      </div>

    </div>

  </div>

  <div class="row" style="padding-top: 15px;">
    @foreach($user->posts as $post)
    <div style="padding-top: 10px" class="col-md-4">
      <a href="/p/{{$post->id}}"><img style="max-width: 295px; height: 260px; padding-top: 5px; " src="{{$post->image}}"/></a>
    </div>
    @endforeach()

  </div>

</div>
@endsection
