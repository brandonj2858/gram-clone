@extends('layouts.app')

@section('content')

<div class="container">
  <div style="text-align:center"><h1 style="font-weight:lighter">Create Post</h1><div>

  <div>


    <form action="/p" method="POST" style="text-align: center; margin-top: 125px; padding-right: 42px;">
      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <label for="image" class="col-md-4 control-label">URL</label>

          <div class="col-md-6">
              <input id="image" type="text" style='margin-bottom: 6px;' class="form-control" name="image" value="{{ old('image') }}" >

              @if ($errors->has('image'))
                  <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                  </span>
              @endif
          </div>

          <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">
              <label for="caption" class="col-md-4 control-label">Caption</label>

              <div class="col-md-6">
                  <textarea id="caption" type="text-field" class="form-control" name="caption" value="{{ old('caption') }}" > </textarea>

                  @if ($errors->has('caption'))
                      <span class="help-block">
                          <strong>{{ $errors->first('caption') }}</strong>
                      </span>
                  @endif
              </div>
            <br/>
      <div style=" margin-top: 75px; padding-left: 65px;">
      <input type='submit' style="margin-left:-34px; margin-top: 15px;" value='Add New Post' />
    </div>
    </form>
</div>
</div>




@endsection
