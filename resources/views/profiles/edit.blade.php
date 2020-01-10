@extends('layouts.app')

@section('content')
<div><h1>Edit Your Profile</h1></div>
<div>
  <form action="/profile/{{ $user->id }}" method="POST" style="text-align: center; margin-top: 125px; padding-right: 42px;">


    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
        <label for="img" class="col-md-4 control-label">Profile Picture</label>

        <div class="col-md-6">
            <input id="img" type="text" style='margin-bottom: 6px;' class="form-control" name="img" value="{{ old('img') ?? $user->profile->img }}" >

            @if ($errors->has('img'))
                <span class="help-block">
                    <strong>{{ $errors->first('img') }}</strong>
                </span>
            @endif
        </div>

    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="col-md-4 control-label">Title</label>

        <div class="col-md-6">
            <input id="title" type="text" style='margin-bottom: 6px;' class="form-control" name="title" value="{{ old('title') ?? $user->profile->title }}" >

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description" style="margin-top: 59px;" class="col-md-4 control-label">Description</label>

            <div class="col-md-6">
                <textarea id="description" style="margin-bottom: 5px; height: 150px;" type="text-field" class="form-control" name="description" value="{{ old('description') ?? $user->profile->description}}" >{{old('description') ??$user->profile->description}}</textarea>

                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
              <label for="url" class="col-md-4 control-label">URL</label>

              <div class="col-md-6">
                  <input id="url" type="string" class="form-control" name="url" value="{{ old('url') ?? $user->profile->url }}" />

                  @if ($errors->has('url'))
                      <span class="help-block">
                          <strong>{{ $errors->first('url') }}</strong>
                      </span>
                  @endif
              </div>
            </div>
          <br/>
    <div style=" margin-top: 75px; padding-left: 65px;">
      <input type='submit' style="margin-left:-34px; margin-top: 15px;" value='Update Profile' />
    </div>

  </form>
</div>




@endsection
