@extends('layouts.app')

@section('content')
<div class="container" style="padding-left:20vw; padding-right:7vw">
  <div class="row">
    <div class="col-md-3" style="padding-left:25px; padding-top:15px">
      <img style="max-width: 168px; height: 150px; border-radius:60%;" src="https://cdn.britannica.com/79/65379-050-5CF52BAC/Shortfin-mako-shark-seas.jpg"/>

    </div>
    <div class="col-md-9">
      <div>
        <div> <h3>{{ $user -> username }}</h3></div>

        <div style="display: flex">
          <div style="padding-right: 10px"><strong>120</strong> posts</div>
          <div style="padding-right: 10px"><strong>32k</strong> followers</div>
          <div style="padding-right: 10px"><strong>250</strong> following</div>
        </div>

        <div>
          <div style="padding-top: 15px;"><strong>The Big One</strong></div>
          <div style="padding-right:310px"> I am the biggest most ferocious shark in the sea. Stay out of my way!</div>
          <div> <a href="google.com">google.com</a></div>
        </div>
      </div>

    </div>

  </div>

  <div class="row" style="padding-top: 15px;">
    <div class="col-md-4"><img style="max-width: 280px; height: 245px; padding: 5px; " src="https://image.businessinsider.com/4e39bb2c6bb3f7ff0400000e?width=600&format=jpeg&auto=webp"/> </div>

    <div class="col-md-4"><img style="max-width: 280px; height: 245px; padding: 5px; " src="https://cdn.hswstatic.com/gif/tiger-shark-3.jpg" /> </div>

    <div class="col-md-4"><img style="max-width: 280px; height: 245px; padding: 5px; " src="https://cdn.theatlantic.com/assets/media/img/mt/2019/04/GettyImages_611541996/lead_720_405.jpg?mod=1555700060"/> </div>

  </div>

</div>
@endsection
